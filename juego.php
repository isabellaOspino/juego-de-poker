<?php

function repartirCartas(){
    $palos = ( "As de corazones ","Reina de picas","diamantes","trebol");
    $valorCartas = ["2","3","4","5","6","7","8","9","10","Q","J","K"]

    foreach ($palos as $palo){



 foreach($valorcartas as $valorCarta ){

        $mazo = []= ["palo"=> $palos,"valor de carta" => $valorCarta];
    }
        shuffle($mazo);
    
      $repartir = array_slice($mazo,0,5);
    
        return $repartir;



   
   function mostrarCartas($cartas);

    foreach($cartas as $carta){
echo "valor de la carta : {$carta"valor". "de" . "$carta[palo] . "\n" ;
    }

         }


    }
    
 $cartasRepartidas= repartirCartas();
 mostrarCartas($cartasRepartidas);

 function  evaluarMano($cartas){

    $valoresCartas = [];
    $palos[] 

    foreach ($cartas as $carta){

        $valoresCartas = $carta['valor'];
        $palos[] = $carta['palo'];

    }
 $valorCuenta = array_count_values($valoresCartas);
 $palosCuenta = array_count_values($palos);

 }
 


    
    
