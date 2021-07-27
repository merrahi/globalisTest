<?php


//la fonction,
function triPaires($paires){
    // on commence par le tri des paires selon la valeur x 
    $lesXs = array_column($paires, 0);
    array_multisort($lesXs, SORT_ASC, $paires);
    // on parcours le tableau des paires et on teste si
    // les 2 premieres paires adjacents sont tries
    $i=0;
    $loop=true;
    do{
        if(!isset($paires[$i+1])) { 
            $loop=false; 
            break;
        }
        if($paires[$i][1]>=$paires[$i+1][0]){
            // prendre x le plus petit de 2 pairesa adjacent et y le plus grand de 2 paires adjacents
            $paires[$i]=[min($paires[$i][0],$paires[$i+1][0]), max($paires[$i][1],$paires[$i+1][1])];
            array_splice($paires, $i+1, 1);
            
        }
        else{
            $i++;
        }
        
    }while($loop);
    return $paires ;
}
    

//l'appel de la fonction, avec un jeu de test en entrée,
// jeux de donnéees 1
$paires=[[0, 3], [6, 10]];
$result=triPaires($paires);
print_r($result);
// jeux de donnéees 2
$paires=[[0, 5], [3, 10]];
$result=triPaires($paires);
print_r($result);
// jeux de donnéees 3
$paires=[[0, 5], [2, 4]];
$result=triPaires($paires);
print_r($result);
// jeux de donnéees 4
$paires=[[7, 8], [3, 6], [2, 4]];
$result=triPaires($paires);
print_r($result);
// jeux de donnéees 5
$paires=[[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]];
$result=triPaires($paires);
print_r($result);
