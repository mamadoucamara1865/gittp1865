Francais
<?php
namespace App;

use App\Abstract\Abstract-Matiere-secondaire;

class Francais extends AbstractMatiere-secondaire{

 public function enseigne 'en fonction du temps de l'etudiant'() : bool
     {
    print_r("Je prend des cours en francais en fonction de mon temps");
        return true;
    }