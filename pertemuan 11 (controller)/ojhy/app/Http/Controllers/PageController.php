<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Untuk file index.blade.php
    public function index() {
        return view('index');
    }

    // Untuk file aboutus.blade.php
    public function about() {
        return view('aboutus');
    }

    // Untuk file contact.blade.php
    public function contact() {
        return view('contact');
    }

    // Untuk file menu.blade.php
    public function menu() {
        return view('menu');
    }

    // Untuk file halo.blade.php
    public function halo() {
        return view('halo');
    }
}
