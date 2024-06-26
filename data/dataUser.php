
<?php
class User
{
    public $nickname;
    public $password;
    public $carrello ;

    public function __construct($nickname,$password,Carrello $carrello = null)
    {
        $this->nickname = $nickname;
        $this->password = $password;
        $this->carrello = $carrello;
       
    }
    public function print(){
        return  $this->nickname;
    }
}

class Carrello{
    public $carrello = [] ;
    public function __construct($carrello)
    {
        $this->carrello = $carrello;
    }
    public function add($item)
    {
        $this->carrello = $item;
    }
    
}