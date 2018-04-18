<?php

class Chat
{
    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;


    public function __construct($prenom, $age, $couleur, $sexe, $race)
    {
        $this->prenom   = $prenom;
        $this->age      = $age;
        $this->couleur  = $couleur;
        $this->sexe     = $sexe;
        $this->race     = $race;
    }


    public function getPrenom() {
        return $this->prenom;
    }
    public function getAge()    {
        return $this->age;
    }
    public function getCouleur(){
        return $this->couleur;
    }
    public function getSexe()   {
        return $this->sexe;
    }
    public function getRace()   {
        return $this->race;
    }



    public function setPrenom($val) {
        if (count($val) <= 20){
            if (count($val) >= 3) {
                return $this->prenom = $val;
            }
        }
    }
    public function setAge($val) {
        if (is_int($val)) {
            return $this->age = $val;
        }
    }
    public function setCouleur($val) {
        if (count($val) <= 10){
            if (count($val) >= 3) {
                return $this->couleur = $val;
            }
        }
    }
    public function setSexe($val) {
        if ($val = 'male' || $val = 'femelle') {
            return $this->sexe = $val;
        }
    }
    public function setRace($val) {
        if (count($val) <= 20){
            if (count($val) >= 3) {
                return $this->race = $val;
            }
        }
    }

    public function getInfos() {
        $data = array(
            "Prenom"    =>$this->prenom,
            "Age"       =>$this->age,
            "Couleur"   =>$this->couleur,
            "Sexe"      =>$this->sexe,
            "Race"      =>$this->race
        );
        return $data;
    }
}
