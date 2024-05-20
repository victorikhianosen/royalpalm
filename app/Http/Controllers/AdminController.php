<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
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
            'name' => 'required|min:4',
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => 'required|confirmed|min:4'
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        Admin::create($formFields);
        return view('admin.auth.login');
    }

    public function admin_login_submit(Request $request) {
        $formField = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt($formField)) {
            return redirect()->route('admin_dashboard');
        }else {
            return redirect()->back();
        }

    }

    public function admin_dashboard (){
        return view('admin.dashboard.index');
    }
    public function admin_logout (){

        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }
}