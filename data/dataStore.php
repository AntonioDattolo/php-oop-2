<?php
include __DIR__ . "/dataCategory.php";
include __DIR__ . "/dataProducts.php";


class oggettoCatalogo
 {  
     public $nome;
     public $price;
     public function __construct($nome, $price)
     {
         $this->nome = $nome;
         $this->price = $price;
     }
}
$Catalogo = [
    new Prodotto("petHouse",new Categoria("cane","icona_categoria"),"nome","prezzo"),
    new Prodotto("cibo",new Categoria("gatto","icona_categoria"),"nome","prezzo"),
    new Prodotto("petHouse",new Categoria("cane","icona_categoria"),"nome","prezzo"),
    new Prodotto("toys",new Categoria("gatto","icona_categoria"),"nome","prezzo"),
    new Prodotto("petHouse",new Categoria("cane","icona_categoria"),"nome","prezzo"),
    new Prodotto("petHouse",new Categoria("cane","icona_categoria"),"nome","prezzo"),
    new Prodotto("petHouse",new Categoria("cane","icona_categoria"),"nome","prezzo"),
    new Prodotto("toys",new Categoria("gatto","icona_categoria"),"nome","prezzo"),
    new Prodotto("cibo",new Categoria("cane","icona_categoria"),"nome","prezzo"),
    new Prodotto("cibo",new Categoria("gatto","icona_categoria"),"nome","prezzo"),
    new Prodotto("petHouse",new Categoria("cane","icona_categoria"),"nome","prezzo"),
    new Prodotto("toys",new Categoria("gatto","icona_categoria"),"nome","prezzo"),
];


