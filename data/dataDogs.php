<?php
class Prodotto  {

    public $food;
    public $toys;
    public $petHouse;

    public function __construct($food, $toys, $petHouse)
    {
      $this->food = $food;
      $this->toys = $toys;
      $this->petHouse = $petHouse;
    }

}