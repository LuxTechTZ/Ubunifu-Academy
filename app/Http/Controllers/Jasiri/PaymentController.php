<?php

namespace App\Http\Controllers\jasiri;

use App\Http\Controllers\Controller;
use App\Models\jasiri\Order;
use App\Models\jasiri\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function save(Request $request)
    {
        $order = Order::where('company_ref',$request['CompanyRef'])->first();


        $payment['order_id'] = $order->id;
        $payment['trans_id'] = $request['TransID'];
        $payment['ccd_approval'] = $request['CCDapproval'];
        $payment['prn_id'] = $request['PnrID'];
        $payment['trans_token'] = $request['TransactionToken'];
        $payment['company_ref'] = $request['CompanyRef'];

        return Payment::create($payment);

    }
}
