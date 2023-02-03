Africains
<?php
namespace App;

use App\Abstract\Abstract-Matiere-secondaire;

class Africains extends AbstractMatiere-secondaire{

    public function enseigne par correspondance() : bool
    {
        print_r("Je prend des cours de la culture africianes par correspondance");
        return true;
    }