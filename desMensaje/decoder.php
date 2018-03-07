<?php

  $frase="s.sacon cehas nelatacas Los.sacon cehas nelatacas Lo";
  $fraseTemp="";
  $fraseCodificada="";

  for ($i=strlen($frase)-1; $i >-1 ; $i--) {
    $fraseTemp=$fraseTemp . substr($frase,$i,1);
  }

  for ($i=0; $i <= strlen($fraseTemp) -1 ; $i=$i+2) {
    if ($i==strlen($fraseTemp)-1) {
      $fraseCodificada=$fraseCodificada . substr($fraseTemp,$i,1);
    } else {
      $fraseCodificada=$fraseCodificada . substr($fraseTemp,$i+1,1) . substr($fraseTemp,$i,1);
    }
  }

  echo $fraseCodificada;

?>
