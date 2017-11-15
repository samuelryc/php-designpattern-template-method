<?php

namespace App;

class Lamborghini extends Vehicule
{
    protected function addEngine() 
    {
        echo ("\nAdding very fast engine");

        return $this;
    }
}