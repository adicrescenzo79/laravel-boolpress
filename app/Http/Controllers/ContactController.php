<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;


use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
  public function index(Request $request)
  {

    $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'email:rfc,dns',
      'title' => 'required|string|max:255',
      'content' => 'required|string',
    ]);

    $data = $request->all();

    Mail::to('servizioclienti@boolpress.it')->send(new ContactMail());

    return redirect()->route('index');


  }
}
