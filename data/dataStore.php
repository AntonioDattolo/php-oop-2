<?php
include __DIR__ . "/dataCategory.php";
include __DIR__ . "/dataFood.php";
include __DIR__ . "/dataPetHouse.php";
include __DIR__ . "/dataToy.php";


class Prodotto
 {  
    public $category;    
     public $nome;
     public $price;
     
     public function __construct(Category $category ,$nome, $price)
    {
        $this->category = $category;
         $this->nome = $nome;
         $this->price = $price;
         
    }
}

$dogs= new Category("Dogs", "icona_cane");
$cats= new Category("Cats","icona_gatto");



$catalogo =[
    new Food($cats,"Integratore", "12.55","45g","A+"),
    new PetHouse($dogs,"cuccia","35.99","4x4","legno"),
    new Food($dogs,"Integratore", "12.55","45g","A+"),
    new PetHouse($cats,"cuccia","35.99","4x4","legno"),
    new Food($cats,"Integratore", "12.55","45g","A+"),
    new PetHouse($dogs,"cuccia","35.99","4x4","legno"),
    new Toy($cats,"Pallina","7.99","//","spugna")
    
];
