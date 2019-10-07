<?php
 
namespace App\Estoque;
Class Estoque 
{
    private $total;

    public function __construct()
    {
        $this->total = rand(0, 5000);
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal()
    {
        $this->total = total;
    }

}

?>