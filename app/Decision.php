<?php
namespace App;

use Phpml\Classification\NaiveBayes;

class Decision {

    function __construct()
    {


    }


function prediect($dataset , $newval){


    foreach($dataset  as $line  ){

        echo($line['question1']) ;
        echo($line['question2']) ;
        echo($line['question3']) ;
        echo($line['question4']) ;
        echo($line['age']) ;
        echo($line['sexe']) ;
        echo($line['dureet']) ;
        echo($line['positif']) ;
    }

    die();
    $samples = [[5, 1, 1], [1, 5, 1], [1, 1, 5]];
    $labels = ['a', 'b', 'c'];

        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);


        return $classifier->predict([3, 1, 1]);

    }

}

