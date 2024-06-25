<?php
class Food extends Prodotto
{

    public function __construct(Category $category, $nome, $price, public $peso, public $valori_nutrizionali)
    {
        parent::__construct($category, $nome, $price);
        $this->peso = $peso;
        $this->valori_nutrizionali = $valori_nutrizionali;
    }

    public function print()
    {
        return "<span>" . "Peso:" . $this->peso . "</span>" . " " . "<span>" . "Valore Nutrizionale:" . $this?->valori_nutrizionali . "</span>";
    }
}