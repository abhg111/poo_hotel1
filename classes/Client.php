<?php

class Client {


    private string $nom;
    private string $prenom;
    private array $reservations;

    public function __construct(string $nom , string $prenom){

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->reservations = [];
        


    }



    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of reservations
     */ 
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set the value of reservations
     *
     * @return  self
     */ 
    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function  addReservation(Reservation $reservation) {
        return $this->reservations[] = $reservation ."<br>";
    }

    public function  afficherReservations()  {
        $result = "<h1>Réservations De $this</h1><br>";
    

        foreach($this->reservations as $reservation){
            
           $result.= $reservation;
        }

        return $result;


    }


    public function __toString() {
    
        return $this->nom." ".$this->prenom;  
    
    }

}