<?php

namespace App\Abstract;

abstract class Abstract-matiere{

    public function enseigne() : bool
    {
        print_r("J'enseigne les matieres" . PHP_EOL);
        return true;
    