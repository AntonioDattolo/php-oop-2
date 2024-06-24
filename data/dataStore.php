<?php
include __DIR__ . "/dataDogs.php";


class Categoria
 {  
     public $species;
     public $prodotto;
     public function __construct($species, Prodotto $prodotto)
     {
         $this->species = $species;
         $this->prodotto = $prodotto;
     }
     public function print()
     {
         return $this->species->food ;
    }
}
$Products = [
     new Categoria("Dogs", new Prodotto("food","toy","pethouse")),
     new Categoria("Cats", new Prodotto("food","toy","pethouse"))
     ];


