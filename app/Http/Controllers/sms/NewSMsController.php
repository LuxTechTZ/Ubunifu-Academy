<?php

namespace App\Http\Controllers\sms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SMS\Contact;
use App\Models\SMS\Sent_sms;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use AfricasTalking\SDK\AfricasTalking;
use App\Http\Controllers\SMS\BalanceController;
use AltoRouter;

class NewSMsController extends Controller
{
    function __construct(Contact $contact, Sent_sms $sent_sms, BalanceController $balance_control)
    {
        $this->contact = $contact;
        $this->sent_sms = $sent_sms;
        $this->balance_control = $balance_control;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $balance = $this->balance_control->getBalance();
        $sms_can_send = $balance/35;
        $contacts = $this->contact->get();
        return view('sms.new-sms',compact('contacts','balance','sms_can_send'));
        return Excel::download(new UsersExport, 'users.xlsx');
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

    public function sendSms(Request $request)
    {
        $numbers = $this->contact->get();
        $to = '+255765204506';
        foreach ($numbers as $number) {
            if (strpos($number->phone, "255") == 1) {
                $to .= ','.$number->phone;
            }
        }

        $url = 'https://api.sandbox.africastalking.com/version1/messaging';
        $myvars = array('username' => 'sandbox', 'to' => $to, 'message' => $request['message'], 'from' => 'MSUMENO SPL', 'accept' => 'application/json');
        $headers = array('Content-type: application/x-www-form-urlencoded', 'apiKey: f27e50acb0d581f8d36596cef7bdeb06edfadacf33ad35a4350c1c1831ebac90');

        // return $myvars;

        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($myvars));
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 1);
        curl_setopt( $ch, CURLOPT_HTTPHEADER , $headers);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec( $ch );

        $price = 0;
        $total_sms = 0;
        foreach ($numbers as $number) {

            $sms_length = strlen($request['message']);
            $sms_count = $sms_length/150;
            $muly = ceil($sms_count);

            $price+= 35*$muly;
            $total_sms+= 1*$muly;

            $this->saveSMS($number->phone, $request['message']);
        }

        // return $total_sms;

        // Update Balance
        $balance = $this->balance_control->updateBalance($price, 0,$total_sms);


        return $response;

        return json_encode($response);

        $url = 'https://api.sandbox.africastalking.com/version1/messaging';
        $data = array();
        $options = array(
                'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        var_dump($result);

        return "Stop";


        $username = "sandbox";
        $apiKey = getenv("f27e50acb0d581f8d36596cef7bdeb06edfadacf33ad35a4350c1c1831ebac90");

        $AT = new AfricasTalking($username, $apiKey);
        $router = new AltoRouter();


        $phone = $request["phone"];
        $message = $request["message"];

        $url = 'https://api.sandbox.africastalking.com/version1/messaging';
        $data = array('username' => 'sandbox');

        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => json_encode($data)
            )
        );

        $context  = stream_context_create($options);

        // var_dump($context);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) { /* Handle error */ }

        // var_dump($result);

        // return "hi";
        $router->map( 'POST', '/auth/register/[*:phone]', function ($phone) {
            global $AT;
            $sms = $AT->sms();
            $response = $sms->send(array(
                "to" => $phone,
                "from" => "AT2FA",
                "message" => "Welcome to Awesome Company Msumeno",
            ));
            header("Content-Type: application/json; charset=UTF-8");
            echo json_encode($response);
            var_dump($response);
        });

        // return $router;
    }

    public function saveSMS($phone, $sms)
    {
        $sent = new Sent_sms;

        $sent->phone = $phone;
        $sent->text = $sms;

        $sent->save();
    }

    public function saveEpense($price)
    {
        # code...
    }
}
