<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ApiHelper;
use App\Models\User;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use App\Models\Admin\Permission;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Services\ApiService;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{

    protected $apiService;
    protected $operatorCode;

    protected $secretKey;



    public function __construct(ApiService $apiService)
    {

        $this->apiService = $apiService;
        $this->operatorCode = config('common.operatorcode');
        $this->secretKey  = config('common.secret_key');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(
            Gate::denies('user_index'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        // users data with order by id desc
        $users = User::where('agent_id', Auth()->user()->id)->orderBy('id', 'desc')->get();
        return response()->view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(
            Gate::denies('user_create'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        return response()->view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {


        try {
            $inputs = $request->validated();
            $endpoint = '/createMember.aspx';
            $signatureString = strtolower($this->operatorCode) . $inputs['user_name'] . $this->secretKey;
            $signature = ApiHelper::generateSignature($signatureString);

            $param = [
                'operatorcode' => $this->operatorCode,
                'username' => $inputs['name'],
                'signature' => $signature,
            ];

            DB::transaction(function () use ($inputs, $endpoint, $param) {
                $data = $this->apiService->get($endpoint, $param);

                if ($data->errCode !== 0) {
                    throw new \Exception($data->errMsg);
                }

                $userPrepare = array_merge(
                    $inputs,
                    ['password' => Hash::make($inputs['password']), 'agent_id' => Auth::user()->id]
                );
                User::create($userPrepare)->roles()->sync(4);
            });

            return redirect()->route('admin.users.index')->with('success', 'User created successfully');
        } catch (Exception $e) {

            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort_if(
            Gate::denies('user_show'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        $user_detail = User::with(['roles', 'roles.permissions'])->findOrFail($id);
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.show', compact('user_detail', 'roles', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        abort_if(
            Gate::denies('user_edit'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        $user_edit = User::find($id);
        $roles = Role::all()->pluck('title', 'id');
        return response()->view('admin.users.edit', compact('user_edit', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
        return redirect()->route('admin.users.index', $user->id)->with('toast_success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort_if(
            Gate::denies('user_delete'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }


    public function massDestroy(Request $request)
    {
        User::whereIn('id', request('ids'))->delete();
        return response(null, 204);
    }

    public function banUser($id)
    {
        $user = User::find($id);
        $user->update(['status' => $user->status == 1 ? 0 : 1]);
        if (Auth::check() && Auth::id() == $id) {
            Auth::logout();
        }
        return redirect()->back()->with(
            'success',
            'User ' . ($user->status == 1 ? 'activated' : 'banned') . ' successfully'
        );
    }
}
