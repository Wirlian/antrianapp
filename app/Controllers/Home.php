<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        $title = "Aplikasi Antrian";
        return view('home', compact('title'));
    }
}
