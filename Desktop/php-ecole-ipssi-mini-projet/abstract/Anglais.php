Anglais
<?php
namespace App;

use App\Abstract\Abstract-Matiere-secondaire;

class Anglais extends AbstractMatiere-secondaire{

    public function enseigne a distances() : bool
    {
        print_r("Je prend des cours d'anglais a distance
        ");
        return true;
    }