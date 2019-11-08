<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Upload;

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

}
