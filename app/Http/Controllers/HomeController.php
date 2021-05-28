<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
      return view('guests.index');
    }

    public function contacts()
    {
      return view('guests.contacts');
    }

}
