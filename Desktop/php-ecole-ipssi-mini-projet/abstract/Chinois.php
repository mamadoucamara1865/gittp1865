Chinois
<?php
namespace App;

use App\Abstract\Abstract-secondaire;

class Chinois extends AbstractMatiere-secondaire{

    public function enseigne par video() : bool
    {
        print_r("Je prend des cours de chinois par video");
        return true;
    }
    