<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSlideController extends Controller
{
    public function index () {
        return view("admin.slide.index");
    }

    public function add(Request $request) {
        // $formFields = $request->all();
        $formFields = $request->validate([
            'photo' => 'required',
            'title' => 'required',
            'description' => 'required|min:120|max:140',
            'button' => 'required',
        ]);

        Slide::create($formFields);
    }
}