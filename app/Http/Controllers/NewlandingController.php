<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;


class NewlandingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        return view('survey', [
            'name' => $name,
            'email' => $email,
        ]);
    }
}
