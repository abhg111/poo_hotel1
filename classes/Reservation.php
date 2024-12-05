<?php

class Reservation {
    
    private Chambre $chambre;
    private Client $client;
    private DateTime $dateDebut;
    private DateTime $dateFin;
   

    public function __construct(Chambre $chambre, Client $client, string $dateDebut, string $dateFin){


        $this->chambre = $chambre;
        $this->client = $client;
        $this->dateDebut = new DateTime ($dateDebut);
        $this->dateFin = new DateTime ($dateFin);
        $this->chambre->addReservation($this);
        $this->client->addReservation($this);

    }


    /**
     * Get the value of chambre
     */ 
    public function getChambre()
    {
        return $this->chambre;
    }

    /**
     * Set the value of chambre
     *
     * @return  self
     */ 
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    
    
    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;
        
        return $this;
    }
    
    /**
     * Get the value of dateDebut
     */ 
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set the value of dateDebut
     *
     * @return  self
     */ 
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get the value of dateFin
     */ 
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set the value of dateFin
     *
     * @return  self
     */ 
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }


    public function __toString()
    {
        return $this->dateDebut->format("d-m-Y")." ".$this->dateFin->format("d-m-Y"); 
    }






}