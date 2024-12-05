<?php

class Chambre{

    private string $nmChambre;
    private string $nbLit;
    private string $prix;
    private string $wifi;
    private Hotel $hotel;
    private array $reservations;


 public function __construct(string $nmChambre , string $nbLit , string $prix , string $wifi, Hotel $hotel) {



        $this->nmChambre = $nmChambre;
        $this->nbLit = $nbLit;
        $this->prix = $prix;
        $this->wifi = $wifi;
        $this->hotel = $hotel;
        $this->hotel->addChambre($this);
        $this->reservations = [];

    }




    /**
     * Get the value of nmChambre
     */ 
    public function getNmChambre()
    {
        return $this->nmChambre;
    }

    /**
     * Set the value of nmChambre
     *
     * @return  self
     */ 
    public function setNmChambre($nmChambre)
    {
        $this->nmChambre = $nmChambre;

        return $this;
    }

    /**
     * Get the value of nbLit
     */ 
    public function getNbLit()
    {
        return $this->nbLit;
    }

    /**
     * Set the value of nbLit
     *
     * @return  self
     */ 
    public function setNbLit($nbLit)
    {
        $this->nbLit = $nbLit;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of wifi
     */ 
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * Set the value of wifi
     *
     * @return  self
     */ 
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    /**
     * Get the value of reservations
     */ 
    public function getReservations()
    {
        return $this->reservations->format("d-m-Y");
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
    /**
     * Get the value of hotel
     */ 
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Set the value of hotel
     *
     * @return  self
     */ 
    public function setHotel( $hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }



    public function  addReservation(Reservation $reservation) {
        return $this->reservations[] = $reservation ."<br>";
    }

    public function  afficherReservations()  {
        $result = "<h1> Reservation $this</h1><br>";
        

        foreach($this->reservations as $reservation){
            
           $result.= $reservation;
       }

        return $result;


    }





    public function __toString() {
    
        return $this->hotel->getNom()." ".$this->nmChambre." ".$this->nbLit." ".$this->prix." ".$this->wifi;  
    
    }




    
}