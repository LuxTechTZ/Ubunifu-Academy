<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use App\Traits\CaptureIpTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use jeremykenedy\LaravelRoles\Models\Role;
use Validator;

class UserController extends Controller
{
    public function index()
    {
        //
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
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {


        return Validator::make(
            $data,
            [
//                'name'                  => 'required|max:255|unique:users|alpha_dash',
                'first_name'            => 'alpha_dash',
                'last_name'             => 'alpha_dash',
                'email'                 => 'required|email|max:255|unique:users',
                'password'              => 'required|min:6|max:30|confirmed',
                'password_confirmation' => 'required|same:password',
//                'g-recaptcha-response'  => '',
//                'captcha'               => 'required|min:1',
            ],
            [
//                'name.unique'                   => trans('auth.userNameTaken'),
//                'name.required'                 => trans('auth.userNameRequired'),
                'first_name.required'           => trans('auth.fNameRequired'),
                'last_name.required'            => trans('auth.lNameRequired'),
                'email.required'                => trans('auth.emailRequired'),
                'email.email'                   => trans('auth.emailInvalid'),
                'password.required'             => trans('auth.passwordRequired'),
                'password.min'                  => trans('auth.PasswordMin'),
                'password.max'                  => trans('auth.PasswordMax'),
//                'g-recaptcha-response.required' => trans('auth.captchaRequire'),
//                'captcha.min'                   => trans('auth.CaptchaWrong'),
            ]
        );
    }


    public function store(Request $request)
    {
        return $request;
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
         $ipAddress = new CaptureIpTrait();
         $user = User::create([
            'name'              => strip_tags($request['first_name']) .' '. strip_tags($request['last_name']),
            'first_name'        => strip_tags($request['first_name']),
            'last_name'         => strip_tags($request['last_name']),
            'email'             => $request['email'],
            'password'          => Hash::make($request['password']),
            'token'             => str_random(64),
            'signup_ip_address' => $ipAddress->getClientIp(),
            'activated'         => true,
        ]);

         $role = Role::where('slug', '=', 'user')->first();
        $user->attachRole($role);

        $profile = new Profile();
        $user->profile()->save($profile);
        $user->save();

        return redirect('/cart');
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
