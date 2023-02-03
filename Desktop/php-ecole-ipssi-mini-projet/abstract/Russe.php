Russe
<?php
namespace App;

use App\Abstract\Abstract-Matiere-secondaire;

class russe extends AbstractMatiere-secondaire{

    public function enseigne par video() : bool
    {
        print_r("Je prend des cours de russe par video");
        return true;
    }