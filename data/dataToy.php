<?php
class Toy extends Prodotto {

    public function __construct(Category $category,$nome,$price,public $alimentazione, public $materiali)
    {
        parent::__construct($category,$nome,$price);
      $this->alimentazione = $alimentazione;
      $this->materiali = $materiali;
      
    }

    public function print(){
        return "<span>" . "Alimentazione:" . $this->alimentazione . "</span>" .  " " . "<span>" . "Materiali:" . $this->materiali . "</span>";
    }

}