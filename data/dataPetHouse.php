<?php
class PetHouse extends Prodotto {

    public function __construct(Category $category,$nome,$price,public $dimensioni, public $materiali)
    {
        parent::__construct($category,$nome,$price);
      $this->dimensioni = $dimensioni;
      $this->materiali = $materiali;
      
    }

    public function getDimension(){
        return "dimensioni:" . $this->dimensioni;
    }

    public function getHouseMaterials(){
        return "Materiali:" . $this->materiali;
    }

}