<?php
include __DIR__ . "/dataProducts.php";
include __DIR__ . "/dataCategory.php";
include __DIR__ . "/dataFood.php";
include __DIR__ . "/dataPetHouse.php";
include __DIR__ . "/dataToy.php";

$dogs= new Category("Dogs", "icona_cane");
$cats= new Category("Cats","icona_gatto");

$catalogo =[
    new Food($cats,"Integratore", "12.55","45g","A+"),
    new PetHouse($dogs,"House","35.99","4x4","legno"),
    new Food($dogs,"Integratore", "12.55","45g","A+"),
    new PetHouse($cats,"House","35.99","4x4","legno"),
    new Food($cats,"Integratore", "12.55","45g","A+"),
    new PetHouse($dogs,"House","35.99","4x4","legno"),
    new Toy($cats,"Pallina","7.99","//","spugna"),
    new Food($cats,"Integratore", "12.55","45g","A+"),
];
