<?php
class Category
{
  public $nome;
  public $icona;

  public function __construct($nome, $icona)
  {
    $this->nome = $nome;
    $this->icona = $icona;
  }
  public function getCategory()
  {
    return $this->icona . " " . $this->nome;
  }
}