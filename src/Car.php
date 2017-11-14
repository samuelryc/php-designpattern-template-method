<?php

namespace App;

class Car extends Vehicule
{
    protected function addEngine() 
    {
        echo ("\nAdding normal engine");

        return $this;
    }
}