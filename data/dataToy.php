<?php
class Toy extends Prodotto {

    public function __construct(Category $category,$nome,$price,public $alimentazione, public $materiali)
    {
        parent::__construct($category,$nome,$price);
      $this->alimentazione = $alimentazione;
      $this->materiali = $materiali;
      
    }

    public function getDimension(){
        return "Alimentazione:" . $this->alimentazione;
    }

    public function getHouseMaterials(){
        return "Materiali:" . $this->materiali;
    }

}