<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginAdminController extends Controller
{
    //
    public function index(){
        return view('admin.login-admin');
    }
    public function login(Request $request){
        
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
            'pincode'=>'required',
        ]);

        if(Auth::guard('admin')->attempt(['username'=>$request->username,'password'=>$request->password,'pincode'=>$request->pincode],$request->remember)){
            return redirect()->intended(route('admin'));
        }
        return redirect()->back();
    }
}
