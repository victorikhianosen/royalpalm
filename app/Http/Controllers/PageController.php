<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }
    public function gallery() {
        return view('gallery');
    }
    public function contact() {
        return view('contact');
    }
    public function details() {
        return view('details');
    }
}