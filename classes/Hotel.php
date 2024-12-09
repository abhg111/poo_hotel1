<?php

class Hotel {

    private string $nom;
    private string $adresse;
    private string $ville;
    private string $cp;
    private array $chambres;
  



    public function __construct(string $nom, string $adresse, string $ville, string $cp) {



        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->cp = $cp;
        $this->chambres = [];
       


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
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse." ".$this->cp." ".$this->ville;

    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of cp
     */ 
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set the value of cp
     *
     * @return  self
     */ 
    public function setCp($cp)
    {
        $this->cp = $cp;
        
        return $this;
    }

    
    /**
     * Get the value of chambres
     */ 
    public function getChambres()
    {
        return $this->chambres;
    }

    /**
     * Set the value of chambres
     *
     * @return  self
     */ 
    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }
    
   

    
    
    public function  addChambre(Chambre $chambre) {
        return $this->chambres[] = $chambre;
    }




    public function  afficherChambre()  {

        $count = 0;
        $result = '';
        foreach($this->chambres as $chambre){
            
            foreach($chambre->getReservations() as $reservation){
                $count++;
                $result .= $reservation."<br>";
            }
        }
        if($count <= 0){
            return  "<h1>$this</h1> Aucune reservation !";
        }
        else{
            $nbChambreVide = (count($this->chambres) - $count);
            return "Total de chambres : ".count($this->chambres).
                    "<br> Nombre de chambres reservées: ".$count.
                    "<br> Nombre de chambres disponible ".$nbChambreVide."<br><br>";
            }
        }

        public function  afficherReservations()  {
            $count= 0;
            $result = " ";
            foreach($this->chambres as $chambre){
                
                foreach($chambre->getReservations() as $reservation){
                    $count++;
                    $result .= $reservation;
                }
            }
            
        
    
            return "<h1> Réservation de l'hotel $this</h1>"."<p>".$count."  Reservation !"."</p>".$result; 
    
    
        }
       

        public function afficherAdress(){
            return "$this->adresse "."$this->cp "."$this->ville.<br>";
        }



    public function getInfos() {
       $result = "<h1>$this</h1><br>";

       return $result.$this->getAdresse()."<br>".$this->afficherChambre();
    }

    public function getStatus(){
        $result = "<div class=status><table>
        <thead>
            <tr>
                <th>CHAMBRE</th>
                <th>PRIX</th>
                <th>WIFI</th>
                <th>ETAT</th>
            </tr>
        </thead>";
        foreach($this->chambres as $chambre){
            $result .= "<tr>
            <td>".$chambre->getNmChambre()."</td>
            <td>".$chambre->getPrix()." €</td>
            <td>".$chambre->afficherWifi()."</td>
            <td>".$chambre->afficherStatus()."</td></tr></div>";
        }
       $result .= "</table>";
       return "<h1> Status des chambres de $this</h1>".$result;
    }
    
    
    
    
    public function __toString() {
    
        return $this->nom."******".$this->ville." ";  
    
    }

    }