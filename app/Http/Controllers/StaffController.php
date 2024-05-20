<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff_login() {
        return view('staff.auth.login');
    }
    public function staff_register() {
        return view('staff.auth.register');
    }
    public function staff_forget_password() {
        return view('staff.auth.forget_password');
    }
}
