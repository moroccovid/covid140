<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fiche;

class HomeController extends Controller
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
    public function index(Request $request)
    {

        $fiches = Fiche::Where('traite', 0)->orderBy('created_at','DESC')->paginate(5);
        $countp = Fiche::where('positif', 1)->count();
        $countn = Fiche::where('positif', 0)->count();

        return view('home',compact('fiches','countp','countn'))
            ->with('i', ($request->input('page', 1) - 1) * 5);


    }
}
