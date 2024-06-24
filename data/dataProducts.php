<?php
class Prodotto extends oggettoCatalogo {
    public $whatIs;
    public $category;
    public function __construct($whatIs,Categoria $category,$nome,$price)
    {
      parent::__construct($nome,$price);
      $this->whatIs = $whatIs;
      $this->category = $category;
    }
}