<?php
//Variavel
// uma variavel não pode iniciar com numeros, mas com _ pode 
$cor = "azul";
$cor = "vermelho";
echo  "<p>$cor</p>";


$x = 10;
$y = 5;

function teste(){
    global $x; // como declarar uma variavel global
    echo "<h1>O valor de x dentro da Função $x</h1>";
    
}

teste();
echo "<h2>O valor do x fora da função $y</h2>";



//manipulação de stings 

$palavra = "matheus Gomes da Rocha";
echo strlen ();


?>

