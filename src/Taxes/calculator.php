<?php
namespace App\Taxes;


class calculator{
    public function calcul(float $prix) :float{
        return $prix * (20 / 100); 
    }
}