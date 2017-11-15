<?php

namespace App;

class Toyota extends Vehicule
{
    protected function addEngine() 
    {
        echo ("\nAdding normal engine");

        return $this;
    }
}