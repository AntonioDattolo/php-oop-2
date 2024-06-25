
<?php
class Prodotto
{
    public $category;
    public $nome;
    public $price;

    public function __construct(Category $category, $nome, $price)
    {
        $this->category = $category;
        $this->nome = $nome;
        $this->price = $price;
    }
}
