<?php

namespace App\Http\Controllers\Admin\Agent;

use App\Models\User;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AgentRequest;
use App\Http\Requests\TransferLogRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin\Transter\TransferLog;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(
            Gate::denies('agent_index'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );
        $masterId = auth()->id(); // ID of the master user
        $users = User::where('agent_id', $masterId)->latest()->get();

        return view('admin.agent.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(
            Gate::denies('agent_create'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        return view('admin.agent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AgentRequest $request)
    {
        abort_if(
            Gate::denies('agent_store'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );


        $inputs = $request->validated();
        $this->authorize('createAgent', User::class);

        $userPrepare  = array_merge(
            $inputs,
            [
                'password' => Hash::make($inputs['password']),
                'agent_id' => Auth()->user()->id
            ]
        );
        $user = User::create($userPrepare);
        $agentRole = Role::where('title', 'Agent')->first();
        $user->roles()->sync($agentRole->id);
        return redirect(route('admin.agent.index'))->with('success', 'Agent has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort_if(
            Gate::denies('agent_show'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        $user_detail = User::find($id);
        return view('admin.agent.show', compact('user_detail'));
    }
    public function getTransfer(string $id)
    {
        abort_if(
            Gate::denies('agent_transfer'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        $transfer_user = User::find($id);
        return view('admin.agent.transfer', compact('transfer_user'));
    }
    public function transferCashOut(string $id)
    {
        // abort_if(
        //     Gate::denies('agent_'),
        //     Response::HTTP_FORBIDDEN,
        //     '403 Forbidden |You cannot  Access this page because you do not have permission'
        // );

        // Assuming $id is the user ID
        $transfer_user = User::findOrFail($id);

        // Assuming you want to find transfer logs related to the user
        $transfer_logs = TransferLog::where('from_user_id', $id)
            ->orWhere('to_user_id', $id)
            ->get();
        $logs = TransferLog::where('from_user_id', $id)
            ->orWhere('to_user_id', $id)
            ->orderBy('created_at', 'desc')->first();

        return view('admin.master.agent_cash_out', compact('transfer_user', 'transfer_logs', 'logs'));
    }

    public function makeTransfer(TransferLogRequest $request)
    {
        
        abort_if(
            Gate::denies('agent_transfer'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        try {
            $inputs = $request->validated();
            DB::transaction(function () use ($inputs) {
                $user = User::findOrFail($inputs['to_user_id']);
                $master = Auth::user();
                $cashIn = $inputs['cash_in'];

                if ($cashIn > $master->balance) {
                    throw new \Exception('You do not have enough balance to transfer!');
                }

                // Transfer money
                $user->balance += $cashIn;
                $user->save();
                $master->balance -= $cashIn;
                $master->save();

                // Create transfer log
                TransferLog::create($inputs);
            });
            session()->flash('success', 'Money transfer request submitted successfully!');
            return redirect()->back()->with('success', 'Money fill request submitted successfully!');
        } catch (Exception $e) {
            
            session()->flash('error', $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function AgentCashOutStore(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'cash_out' => 'required|numeric',
        ]);
        //dd($id);
        $cash_balance_data = $request->cash_balance;
        $cash_out_data = $request->cash_out;
        $cash_out_money = $cash_balance_data - $cash_out_data;

        $transfer_master = TransferLog::findOrFail($id);
        $transfer_master->name = $request->name;
        $transfer_master->phone = $request->phone;
        $transfer_master->cash_out = $request->cash_out;
        $transfer_master->cash_balance = $cash_out_money;
        $transfer_master->from_user_id = $request->from_user_id;
        $transfer_master->to_user_id = $request->to_user_id;
        $transfer_master->note = $request->note;
        $transfer_master->save();

        // user balance update
        $admin = User::find($request->from_user_id);
        $admin->balance += $request->cash_out; // Subtract cash_out from the balance of the from_user
        $admin->save();

        $master = User::find($request->to_user_id);
        $master->balance -= $request->cash_out; // Add cash_out to the balance of the to_user
        $master->save();



        // Redirect back with a success message
        session()->flash('success', 'Money transfer request submitted successfully!');
        return redirect()->back()->with('success', 'Money fill request submitted successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        abort_if(
            Gate::denies('agent_edit'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        $user = User::find($id);
        return view('admin.agent.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        abort_if(
            Gate::denies('agent_update'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        $request->validate([
            'name' => 'required|min:3|unique:users,name,' . $id,
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'unique:users,phone,' . $id],
            'password' => 'nullable|min:6|confirmed',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->agent_id = Auth::user()->id;
        $user->roles()->sync('3');
        $user->save();
        return redirect(route('admin.agent.index'))->with('success', 'Agent has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort_if(
            Gate::denies('agent_delete'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden |You cannot  Access this page because you do not have permission'
        );

        $user = User::find($id);
        $user->delete();
        return redirect(route('admin.agent-list'))->with('success', 'Agent has been deleted successfully.');
    }
}
