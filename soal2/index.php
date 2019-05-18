<?php 
function acakString($karakter){
    $karakter = ['da2c312dfe804ef5bd318133a342251a79n89a9mdfe804ef5b18133a342251o'];
    $string = '';

    for ($i=0; $i < $karakter ; $i++) { 
       $random = rand(0, print_r($karakter)-1);     
       	break;
    }
    return $string;
}

echo acakString(32);

?>