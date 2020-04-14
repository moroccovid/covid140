<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Fiche;
use App\Decision;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Controller;
use DB;


class traitementController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:fiche-list', ['only' => ['index','store']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $fiches = Fiche::Where('traite', 0)->orderBy('created_at','DESC')->paginate(10);
        return view('fiches.index',compact('fiches'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $tabtest = array("1" => "Non effectué.",
        "2" =>  "Oui. et le résultat du test est négatif.",
        "3" =>  "Oui et en attente du résultat du test .",
        "4" =>  "Oui. et le résultat du test est positif.");

        $tabconfinement = array(
            "1" =>      "Je suis en  isolement médical parce que j'ai rencontré une personne contaminée.",
            "2" =>      "Je suis en isolement médical parce que j'ai des symptômes.",
            "3" =>   "Je ne suis pas en isolement médical mais j'étais proche de quelqu'un en isolement médical.",
            "4" =>   "Je ne suis pas en isolement médical.");

    $tabsmaladies = array(

        "1" =>    "Insuffisance cardiaque chronique.",
        "2" =>    "Cas précédent de crise cardiaque.",
        "3" =>   "Diabète.",
        "4" =>    "Hypertension artérielle.",
        "5" =>    "Maladie rénale chronique.",
        "6" =>     "Maladie pulmonaire chronique.",
        "7" =>     "Le cancer.",
        "8" =>    "Système immunitaire affaibli.",
        "9" =>    "Prenez des médicaments anti-immuns.");

        $tabsymptomes = array(
        "1" =>    "Fièvre supérieure à 38 degrés.",
        "2" =>   "Difficulté à respirer.",
        "3" =>   "Maux d'estomac.",
        "4" =>   "Douleurs musculaires.",
        "5" => "Fatigue ou faiblesse importante.",
        "6" => "Congestion nasale ou nez qui coule.",
        "7" => "Inflammation de la gorge.",
        "8" =>  "Toux sèche.",
        "9" =>  "Toux Avec mucus.");

        $fiche = Fiche::find($id);

        $covidetest ="";
        $confinement ="";
        $maladies = "";
        $symptomes = "";

        $covidetest ="";
        $confinement ="";

        $covidetest = $tabtest[$fiche->question1];
        $confinement =  $tabconfinement[$fiche->question2];


        foreach(explode(',', $fiche->question3) as  $tmp){
         if($tmp != "")
            $maladies.= $tabsmaladies[$tmp]."<br/>";

        }

        foreach(explode(',', $fiche->question4) as  $tmp){
            if($tmp != "")
            $symptomes.= $tabsymptomes[$tmp]."<br/>";

        }
        $decision = new Decision();

        $decision->prediect(Fiche::all() , $fiche) ;

        return view('fiches.show',compact('fiche','covidetest','confinement','maladies','symptomes'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fiche = Fiche::find($id);

        if ($request->has('traite')) {
            $fiche->traite = true ;
        }else {
            $fiche->traite = false ;
        }

        if ($request->has('positif')) {
            $fiche->positif = true ;
        }else {
            $fiche->positif = false ;
        }

        $fiche->save();



        return redirect()->route('traitemants.index')
                        ->with('success','Fiche updated successfully');
    }
}
