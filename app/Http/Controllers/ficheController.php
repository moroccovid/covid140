<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fiche ;

class ficheController extends Controller
{
    public function index()
    {
        return view('fiche');
    }

    public function store(Request $request)
    {

        $maladies = "";
        $symptoms = "";
        foreach( $request->input('gridRadiosq3') as $maladie ){

            $maladies.= $maladie.',';
        }

        foreach( $request->input('gridRadiosq4') as $symptom ){

            $symptoms.= $symptom.',';
        }

        $fiche = Fiche::create(['nom' => $request->input('nom'),'telephone' => $request->input('tele'),'cin' => $request->input('cin')
        ,'email' => $request->input('email'),'age' => $request->input('age'),'dureet' => $request->input('dureet')
        ,'sexe' => $request->input('sexe'),'question1' => $request->input('gridRadiosq1'),'question2' => $request->input('gridRadiosq2')
        ,'question3' => $maladies,'question4' => $symptoms , 'traite' => false ,'positif' => false ,
        ]);

        return redirect()->route('page')
                        ->with('success','fiche avec success');


    }

    public function page(Request $request)
    {
        return view('ficheres');
    }
}
