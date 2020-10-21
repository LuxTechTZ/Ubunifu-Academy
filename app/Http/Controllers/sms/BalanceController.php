<?php

namespace App\Http\Controllers\SMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SMS\Balance;
use App\Models\SMS\TopUp;
use App\Models\SMS\Expense;

class BalanceController extends Controller
{
    function __construct(Balance $balance, TopUp $topup,Expense $expense)
    {
        $this->balance = $balance;
        $this->topup = $topup;
        $this->expense = $expense;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $current_balance = $this->balance->latest()->first();
        $topups = $this->topup->get();
        $expenses = $this->expense->get();


        return view('sms.balance', compact('topups','expenses', 'current_balance'));
    }

    public function balance()
    {
        // 
        $current_balance = $this->balance->last();

        return $current_balance;
    }

    public function updateBalance($amount, $action,$use= "0")
    {
        $balance = $this->balance->latest()->first();

        if ($action == 1) {

            $balance->Curent_balance = $balance->Curent_balance + $amount; 

            $balance->save();

        }
        if ($action == 0) {
            $exp = New Expense;
            $exp->amount = $amount;
            $exp->expense_for = 'Sent '.$use.' Text Messages';
            $exp->new_balance = $balance->Curent_balance - $amount;

            $exp->save();

            $balance->Curent_balance = $balance->Curent_balance - $amount; 

            $balance->save();
        }

        return $balance;

    }

    public function getBalance($value='')
    {
        $balance = $this->balance->latest()->first();

        return $balance->Curent_balance;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
