<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin_login() {
        return view('admin.auth.login');
    }
    public function admin_register() {
        return view('admin.auth.register');
    }
    public function admin_forget_password() {
        return view('admin.auth.forget_password');
    }

    public function admin_register_submit(Request $request) {
        $formFields = $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => 'required|confirmed|min:4|max:20'
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        Admin::create($formFields);
        return redirect()->route('admin_login')->with('success', 'Registration was successful, Kindly login');
    }

    public function admin_login_submit(Request $request) {
        $formField = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt($formField)) {
            return redirect()->route('admin_dashboard')->with('success', 'login successfully');
        }else {
            return redirect()->back()->with('error', 'invalid credentials');
        }

    }

    public function admin_dashboard (){
        return view('admin.dashboard.index');
    }
    public function admin_add_property (){
        return view('admin.dashboard.add_property');
    }
    public function admin_logout (){

        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }
}