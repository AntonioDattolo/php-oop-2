<?php
include __DIR__ . "/dataCategory.php";
include __DIR__ . "/dataProducts.php";


class Catalogo
 {  
     public $categoria;
     public $prodotto;
     public function __construct(Categoria $categoria, Prodotto $prodotto)
     {
         $this->categoria = $categoria;
         $this->prodotto = $prodotto;
     }
     public function print()
     {
         return $this->prodotto->food ;
    }
}
$Products = [
     new Catalogo(new Categoria("nome_categoria", "icona_categoria"), new Prodotto("food","toy","pethouse")),
     new Catalogo(new Categoria("nome_categoria", "icona_categoria"), new Prodotto("food","toy","pethouse"))
     ];


