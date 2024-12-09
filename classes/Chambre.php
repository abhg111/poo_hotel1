<?php

class Chambre{

    private string $nmChambre;
    private string $nbLit;
    private float $prix;
    private bool $wifi;
    private Hotel $hotel;
    private array $reservations;
    private bool $status;


 public function __construct(string $nmChambre , string $nbLit , float $prix , bool $wifi, Hotel $hotel, $status = true ) {



        $this->nmChambre = $nmChambre;
        $this->nbLit = $nbLit;
        $this->prix = $prix;
        $this->wifi = $wifi;
        $this->hotel = $hotel;
        $this->hotel->addChambre($this);
        $this->reservations = [];
        $this->status = $status ;

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
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }
 
    /**
     * Set the value of status
     *
     * @return  self
     */ 
    
    public function setStatus($status)
    {
        $this->status = $status;
 
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
        return $this->reservations[] = $reservation;
    }
    public function afficherWifi(){

        if ($this->getWifi()) {
            $available= "<i class='fa-solid fa-wifi'>WIFI</i>" ;
        } else {
            $available = "";
        }
        return $available;
        }            


    public function  afficherStatus()  {
            if ($this->status === true) {
                return "<p class=available>Disponible</p>";
            } else {
                return "<p>Réservée</p>";
            }
        
        }
        
        
    public function __toString() {
    
        return "Hotel " .$this->hotel->getNom()." / ".$this->nmChambre." ( ".$this->nbLit." ".$this->prix." ".$this->afficherWifi()." )";  
    
    }




    

}