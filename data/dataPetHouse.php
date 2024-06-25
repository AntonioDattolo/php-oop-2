<?php
class PetHouse extends Prodotto {

    public function __construct(Category $category,$nome,$price,public $dimensioni, public $materiali)
    {
        parent::__construct($category,$nome,$price);
      $this->dimensioni = $dimensioni;
      $this->materiali = $materiali;
      
    }

    public function print(){
        return "<span>" . "dimensioni:" . $this->dimensioni . "</span>" . " " . "<span>" . "Materiali:" . $this?->materiali . "</span>";
    }

}