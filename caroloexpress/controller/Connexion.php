<?php

  class Connexion{
    //private $server = "mysql:host=localhost;dbname=etudiantlive";
    private $server = "mysql:host=ttsabrbrdecmz.mysql.db;dbname=ttsabrbrdecmz" ;
    //private $user = "root";
    private $user = "ttsabrbrdecmz";
    //private $password = "";
    private $password = "rdeCMZ08" ;
    
    private $security = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    protected $bdd;

    /* Fonction de connexion à la bdd en pdo */
    public function openConnexion()
    {
        try
        {
            $this->bdd = new PDO($this->server, $this->user, $this->password, $this->security);
            return $this->bdd;
        }
        catch (PDOException $e)
        {
            echo "Erreur de connexion: " . $e->getMessage();
        }
    }

    /* Fonction pour clore connection */
    public function closeConnexion()
    {
        $this->bdd = null;
    }
  }

 ?>
