<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Upload;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function signup()
    {
      return view('customer.signup.index');
    }
}
