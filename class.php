<?php
class Casa //a casa que esta sendo construida contem 4 comodos

{
    public $banheiro;
    public $quarto;
    public $cozinha;
    public $lavanderia;
    public $quintal;// riden 
    public $adiquirente;

    function teste() //metodo 
    {
      return "Ola, eu sou a funcao Teste"
    }
} 



//new é  construtor de objetos
$construtor = new casa; // construtor objeto da classe casa

 echo"<pre>";
 var_dump($construtor);
 echo"</pre>";


//retorno do resultado
//object(Casa)#1 <<< classe (5) <<< propiedades {
  ///["banheiro"]=>
  //NULL
  //["quarto"]=>
  //NULL
  //["cozinha"]=>
  //NULL
  //["lavanderia"]=>
  //NULL
  //["quintal"]=>
  //NULL
//}

?>

<?php



?>
