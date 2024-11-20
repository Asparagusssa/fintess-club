<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BalanceController extends Controller
{
    public function index()
    {
        $payments = Auth::user()->balance->transactions()->latest()->get(['amount', 'created_at', 'type']);


        return view('user.wallet',[
            'payments' => $payments,
        ]);
    }

    public function deposit(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'numeric', 'min:100', 'max:10000']
        ]);

        Auth::user()->balance()->update([
            'amount' => Auth::user()->balance->amount + $request->amount
        ]);

        Transactions::create([
            'balance_id' => Auth::user()->balance->id,
            'type' => 'Пополнение',
            'amount' => $request->amount,
            'description' => 'Пополнение баланса'
        ]);



        return redirect()->route('user.wallet')->with('success', 'Пополнение на ' . $request->amount . ' ₽ прошло успешно');
    }
}
