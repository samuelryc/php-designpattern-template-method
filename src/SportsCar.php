<?php

namespace App;

class SportsCar extends Vehicule
{
    protected function addEngine() 
    {
        echo ("\nAdding fast engine");

        return $this;
    }
}