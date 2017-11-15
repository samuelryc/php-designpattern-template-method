<?php

namespace App;

abstract class Vehicule 
{
    public function build() 
    {
        return $this
        ->buildStructure()
        ->addTires()
        ->addEngine()
        ->addOptions();
    }

    protected function buildStructure() 
    {
        echo ("\nBuilding structure");

        return $this;
    }

    protected function addTires() 
    {
        echo ("\nAdding tires");

        return $this;
    }

    protected function addOptions() 
    {
        echo ("\nAdding options\n\n");

        return $this;
    }

    protected abstract function addEngine();
}