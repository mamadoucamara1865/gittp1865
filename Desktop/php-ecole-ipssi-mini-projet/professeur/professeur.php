<?php
 // nom du prof et la matiere qui enseigne en fonction //


class professeur
{
    private $id;
    private $nom;
    private $prenom;
    private $ specialite;
    private $ diplome;
    private $ matiere enseigne;

 
    public function __construct($id, string $nom, string $prenom, string $specialite, string $diplome, string$ matiere enseigne)
    {
        $this->id     = $id;
        $this->nom    = $nom;
        $this->prenom = $prenom;
    }
 
    public function id()
    {
        return $this->id;
    }
 
    public function nom(): string
    {
        return $this->nom;
    }
 
    public function prenom(): string
    {
        return $this->prenom;
    }
 
    public function nomComplet(): string
    {
        return $this->prenom.' '.$this->nom;
    }
}


2
3
$maha bouichira = new professeur('mb', 'bouichira', 'maha','professeur Developpement/Fullstuck');
$laetitia pinto = new professeur('lp', 'pinto', 'laetitia','professeur de Data-Analytics');
$mamadou camara = new professeur('mc', 'camara', 'mamadou','professeur de Admin-Reseau');
$valentine djama = new professeur('vd','djama','valentine','professeur de Cybersecurite');
$barke diallo = new professeur('bd','diallo','barke','professeur de Anglais');
$florence baudrey = new professeur('fb','baudrey','florence','professeur de Francais');
$vanessa tukam = new professeur('tv','tukam','vanessa','professeur de Russe');
$celine dion = new professeur('cd','dion','celine','professeur de chinois');