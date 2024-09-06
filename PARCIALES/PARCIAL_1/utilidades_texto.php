<?php

  
  function contar_palabras($texto){
    $palabras =  explode(" ",$texto);
    $numPalabras = count($palabras);
    return $numPalabras;
  }


function contar_vocales($texto) {
   
    
   
    $texto = 0;

    
    }
  
  function invertir_palabras($texto){
    $listPalabras =  explode(" ",$texto);
    krsort($listPalabras);
    $nuevoTexto = implode(" ",$listPalabras);
    return $nuevoTexto;
  }


?>


