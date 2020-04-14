<?php
namespace App;

use Phpml\Classification\NaiveBayes;

class Decision {

    function __construct()
    {


    }


function prediect($dataset , $newval){


    $labels = [];
    $samples = [];
    $i = 0 ;

    foreach($dataset  as $line  ){

        $iteration =  array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0) ;

        $iteration[0] = $line['age'] ;
        if($line['sexe'] == 'M')
        $iteration[1]  = 1 ;
        else $iteration[1]  = 0 ;


        $iteration[2] =  $line['dureet'] ;
        $iteration[3] = $line['question1'];
        $iteration[4] = $line['question2'] ;

        $j = 5 ;
        foreach(explode(',',  $line['question3']) as  $tmp){
            if($tmp != "")
              $iteration[$j] = 1  ;
            else
            $iteration[$j] = 0  ;

            $j++ ;
        }

        foreach(explode(',',  $line['question4']) as  $tmp){
            if($tmp != "")
              $iteration[$j] = 1  ;
            else
            $iteration[$j] = 0  ;

            $j++ ;
        }

        $samples[$i]=$iteration;
        $labels[$i] = $line['positif'] ;
        $i++ ;
    }



        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);
        $symptomes = array(0,0,0,0,0,0,0,0,0) ;
        $maladies  = array(0,0,0,0,0,0,0,0,0) ;


        foreach(explode(',',  $line['question3']) as  $tmp){
            if($tmp != "")
              $maladies[$tmp] = 1  ;
        }

        foreach(explode(',',  $line['question4']) as  $tmp){
            if($tmp != "")
              $symptomes[$tmp] = 1  ;
        }



        return $classifier->predict([$newval->age, ($newval->sexe == 'M')?1:0 ,$newval->dureet , $newval->question1 ,$newval->question2,
        $maladies[0] ,$maladies[1] ,$maladies[2],$maladies[3],$maladies[4],$maladies[5],$maladies[6],$maladies[7],
        $maladies[8], $symptomes[0] ,$symptomes[1] ,$symptomes[2],$symptomes[3],$symptomes[4],$symptomes[5],$symptomes[6],$symptomes[7],
        $symptomes[8]]);

    }

}

