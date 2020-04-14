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
        return view('home',compact('fiches'))
            ->with('i', ($request->input('page', 1) - 1) * 5);


    }
}
