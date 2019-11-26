<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Revolution\Google\Sheets\Facades\Sheets;

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
    public function index(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        return view('survey', [
            'name' => $name,
            'email' => $email,
        ]);
    }
    
    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $flag=true;
        $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
        ->sheet('DataSheet')->get();
        foreach ($sheets AS $data) {
            if($data[1]==$email){
                $flag=false;
            }
        }
        if($flag==true)
        {
            return "true";
        }
        else
        {
            return "false";
        }
    }
}
