<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
 
class AdminController extends Controller
{
    public function dashboard (){
        return view("admin.dashboard");
    }

    public function login(Request $request){
        if($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];

            $customMessages = [
                'email.required'=>'Email is required',
                'email.email'=>'Valid email is required',
                'password.required'=>'Password is required'
            ];

            $this->validate($request,$rules,$customMessages);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],
            'status'=>1])){
                return redirect('admin/dashboard');
            } else {
                return redirect()->back()->with('error_message','Invalid Email or Password');
            }
        }
        
        return view("admin.login");
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
