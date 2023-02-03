Data-Analytics
<?php
namespace App;

use App\Abstract\Abstract-Matiere-Principal;

class Data-Analytics extends AbstractMatiere-principal{

    public function enseigne par microsoft-teams() : bool
    {
        print_r("Je prend des cours en data analytics sur microsoft teams");
        return true;
    }