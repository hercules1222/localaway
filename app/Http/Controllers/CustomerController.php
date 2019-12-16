<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Upload;
use App\User;
use App\Customer;

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

    public function postSignup(Request $request)
    {
      $first_name = $request->input('first_name');
      $last_name = $request->input('last_name');
      $email = $request->input('email');
      $birthday = $request->input('birthday');
      $password = $request->input('password');
      $receive_alert = $request->input('receive_alert', 'off');
      $hear_us = $request->input('hear_us');

      $user = new User;
      $user->first_name = $first_name;
      $user->last_name = $last_name;
      $user->email = $email;
      $user->birthday = $birthday;
      $user->password = Hash::make($password);
      $user->save();

      $customer = new Customer;
      $customer->user_id = $user->id;
      $customer->receive_alert = $receive_alert == "on" ? 1 : 0;
      $customer->hear_us = $hear_us;
      $customer->save();
    }

    public function postGeneral(Request $request)
    {
      $email = $request->input("email");
      $dress = $request->input('dress');
      $gender = $request->input('gender');
      $metric = $request->input('metric');
      $feet = $request->input('height_feet');
      $inch = $request->input('height_inch');

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->dress = $dress;
        $customer->gender = $gender;
        $customer->metric = $metric == 'yes';
        $customer->height_feet = $feet;
        $customer->height_inch = $inch;
        $customer->save();
      }
    }

    public function postMen(Request $request)
    {
      $email = $request->input("email");
      $men_body_type = $request->input("men_body_type");
      $casual_shirts = $request->input("men_casual_shirts");
      $button_up_shirts = $request->input("men_button_up_shirts");
      $waist = $request->input("men_waist");
      $inseams = $request->input("men_inseams");
      $jeans = $request->input("men_jeans");
      $shorts = $request->input("men_shorts");
      $shoe = $request->input("men_shoe");

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->men_body_type = $men_body_type;
        $customer->casual_shirts = $casual_shirts;
        $customer->button_up_shirts = $button_up_shirts;
        $customer->waist = $waist;
        $customer->inseams = $inseams;
        $customer->jeans = $jeans;
        $customer->shorts = $shorts;
        $customer->shoe = $shoe;
        
        if ($request->hasFile("custom_man_body_type")) {
          $customer->photo = $request->file("custom_man_body_type")->store("uploads/custom-photo", "public");
        }
        $customer->save();
      }
    }

    public function postWomen(Request $request)
    {
      $email = $request->input("email");
      $mother = $request->input("mother_or_pregrant");
      $women_body_type = $request->input("women_body_type");
      $casual_shirts = $request->input("women_casual_shirts");
      $button_up_shirts = $request->input("women_button_up_shirts");
      $bra = $request->input("bra_size");
      $waist = $request->input("women_waist");
      $inseams = $request->input("women_inseams");
      $jeans = $request->input("women_jeans");
      $skirt = $request->input("skirt");
      $dress_style = $request->input("dress_style");
      $shorts = $request->input("women_shorts");
      $shoe = $request->input("women_shoe");

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->mother = $mother == "yes" ? 1 : 0;
        $customer->women_body_type = $women_body_type;
        $customer->casual_shirts = $casual_shirts;
        $customer->button_up_shirts = $button_up_shirts;
        $customer->bra = $bra;
        $customer->waist = $waist;
        $customer->inseams = $inseams;
        $customer->jeans = $jeans;
        $customer->skirt = $skirt;
        $customer->dress_style = $dress_style;
        $customer->shorts = $shorts;
        $customer->shoe = $shoe;
        if ($request->hasFile("custom_woman_body_type")) {
          $customer->photo = $request->file("custom_woman_body_type")->store("uploads/custom-photo", "public");
        }
        $customer->save();
      }
    }

    public function postNeutral(Request $request)
    {
      $email = $request->input("email");
      $casual_shirts = $request->input("casual_shirts");
      $button_up_shirts = $request->input("button_up_shirts");
      $waist = $request->input("waist");
      $inseams = $request->input("inseams");
      $jeans = $request->input("jeans");
      $shorts = $request->input("shorts");

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->casual_shirts = $casual_shirts;
        $customer->button_up_shirts = $button_up_shirts;
        $customer->waist = $waist;
        $customer->inseams = $inseams;
        $customer->jeans = $jeans;
        $customer->shorts = $shorts;
        $customer->save();
      }
    }

}
