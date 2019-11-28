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
        $name = $request->input('name');
        $row_number = $request->input('row_number');
        $flag=true;
        $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
        ->sheet('Name-Email')->get();
        if($row_number==0)
        {
            $row_number=count($sheets);
        }
        foreach ($sheets AS $data) {
            if(count($data) > 1){

                if($data[1]==$email){
                    $flag=false;
                }
            }
        }
        $this->saveName($email, $name, $row_number);
        if($flag==true)
        {
            return "true";
        }
        else
        {
            return "false";
        }
    }

    public function saveEmail(Request $request)
    {
        $email = $request->input('email');
        $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
        ->sheet('Name-Email')->get();
        $count = count($sheets);
        $time_now = now()->toDateTimeString();
        Sheets::sheet('Name-Email')->range('A'.($count+1))->update([[$time_now,$email]]);
        return ($count+1);
    }

    public function saveName($email, $name, $row_number)
    {
        $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
        ->sheet('Name-Email')->get();
        Sheets::sheet('Name-Email')->range('B'.$row_number)->update([[$email,$name]]);
    }

    public function saveInfo(Request $request)
    {
        $info = $request->input('info');
        $row_number = $request->input('row_number');
        $col_number = $request->input('col_number');
        $col_char = 'A';
        for ($i=0; $i < $col_number; $i++) { 
            $col_char++;
        }

        $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
        ->sheet('Name-Email')->get();
        Sheets::sheet('Name-Email')->range($col_char.$row_number)->update([[$info]]);
    }
}
