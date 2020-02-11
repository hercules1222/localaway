<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Upload;
use App\Customer;
use App\Question;
use App\Answer;
use App\Survey;
use App\Survey_person;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            if (auth()->user()->id > 2) {
                return redirect('/');
            }
            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $images = Upload::where('collection', 'logo')->get();
        $collection = 'logo';
        return view('dashboard', [
            'images' => $images,
            'collection' => $collection
        ]);
    }

    public function hero()
    {
        $images = Upload::where('collection', 'hero')->get();
        $collection = 'hero';
        return view('dashboard', [
            'images' => $images,
            'collection' => $collection
        ]);
    }
    public function itinerary()
    {
        $images = Upload::where('collection', 'itinerary')->orderby('extra')->get();
        $collection = 'itinerary';
        return view('dashboard', [
            'images' => $images,
            'collection' => $collection
        ]);
    }
    public function stylist()
    {
        $images = Upload::where('collection', 'stylist')->orderby('extra')->get();
        $collection = 'stylist';
        return view('dashboard', [
            'images' => $images,
            'collection' => $collection
        ]);
    }

    public function customers()
    {
        return view('dashboard-customer', [
            'customers' => Customer::all()
        ]);
    }

    public function survey()
    {
        $table = [];
        // foreach (Survey_person::all() as $person)
        // {
        //     $row = [];
        //     array_push($row, $person->id, $person->name, $person->email, $person->phone, $person->person_type, $person->location, $person->note, $person->created_at);
        //     foreach (Survey::where('person_id', $person->id)->get())
        // }
        
        return view('dashboard-survey', ['header' => Question::all(), 'person' => Survey_person::all() ]);
    }
}
