<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\MasterRequest;
use App\Http\Requests\TransferLogRequest;
use App\Models\Admin\Role;
use App\Models\Admin\Transter\TransferLog;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MasterController extends Controller
{

    public function index()
    {

        $masterId = auth()->id(); // ID of the Admin
        $users = User::where('agent_id', $masterId)->latest()->get();

        return view('admin.master.index', compact('users'));
    }

    public function create()
    {
        return view('admin.master.create');
    }

    public function store(MasterRequest $request)
    {
        $inputs = $request->validated();
        $this->authorize('createMaster', User::class);
        $userPrepare = array_merge($inputs, [
            'password' => Hash::make($inputs['password']),
            'agent_id' => Auth::user()->id
        ]);
        $user = User::create($userPrepare);
        $agentRole = Role::where('title', 'Master')->first();
        $user->roles()->sync($agentRole->id);
        return redirect(route('admin.master.index'))->with('success', 'Master has been created successfully.');
    }

    public function show(string $id)
    {
        $user_detail = User::find($id);
        return view('admin.master.show', compact('user_detail'));
    }


    public function edit(string $id)
    {
        $user = User::find($id);
        return view('admin.master.edit', compact('user'));
    }

    public function update(MasterRequest $request, string $id)
    {
        $inputs = $request->validated();
        $user = User::find($id);
        if ($inputs['password']) {
            $inputs['password'] = Hash::make($inputs['password']);
        }
        $user->update($inputs);
        return redirect(route('admin.agent-list'))->with('success', 'Master has been updated successfully.');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route('admin.master.index'))->with('success', 'Master has been deleted successfully.');
    }

    public function transfer(string $id)
    {
        $transfer_user = User::find($id);
        return view('admin.master.transfer', compact('transfer_user'));
    }

    public function cashOutUpdate(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'cash_out' => 'required|numeric',
        ]);

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
        session()->flash('success', 'Money transfer request submitted successfully!');
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Money fill request submitted successfully!');
    }

    public function transferStore(TransferLogRequest $request)
    {

        try {
            $inputs = $request->validated();
            DB::transaction(function () use ($inputs) {
                $user = User::findOrFail($inputs['to_user_id']);
                $admin = Auth::user();
                $cashIn = $inputs['cash_in'];

                if ($cashIn > $admin->balance) {
                    throw new \Exception('You do not have enough balance to transfer!');
                }

                // Transfer money
                $user->balance += $cashIn;
                $user->save();
                $admin->balance -= $cashIn;
                $admin->save();

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

    public function cashOut(string $id)
    {
        // Assuming $id is the user ID
        $transfer_user = User::findOrFail($id);

        // Assuming you want to find transfer logs related to the user
        $transfer_logs = TransferLog::where('from_user_id', $id)
            ->orWhere('to_user_id', $id)
            ->get();
        $logs = TransferLog::where('from_user_id', $id)
            ->orWhere('to_user_id', $id)
            ->orderBy('created_at', 'desc')->first();

        return view('admin.master.cash_out', compact('transfer_user', 'transfer_logs', 'logs'));
    }
}
