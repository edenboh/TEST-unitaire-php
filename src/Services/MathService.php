<?php

namespace App\Services;

class MathService
{
    public function square(int $unNb):int
    {
        return sqrt($unNb);
    }
    public function power(int $nb1,int $nb2):float|int
    {
        return pow($nb1,$nb2);//nb1 puissant $nb2
        /*$total=$nb1 * $nb2;
        $totalFinal=$total*$nb2;
        return $totalFinal;*/
    }
}