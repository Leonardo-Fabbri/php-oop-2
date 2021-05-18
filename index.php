<?php
    class User {
        public $nome;
        public $cognome;
        public $username;
        public $n_post=0;
  
        public function setActive($n_post) 
        {
            if($n_post >= 1) {
                $this -> username= " "."è attivo";
            }
            else {
                $this -> username= "error 404";
            }
  
        }
        public function getActive() 
        {  
            return $this ->username;
        }
  
    }
  
    $utente_primo = new User();
    $utente_primo->$username = "Fragola86";
    $utente_primo ->setActive(1);
  
    $utente_secondo = new User();
    $utente_secondo->$username = "Banana33";
    $utente_secondo ->setActive(10);

    $utente_terzo = new User();
    $utente_terzo->$username = "arancia96";
    $utente_terzo ->setActive(0);
  
    echo $utente_primo->$username;
    echo " ";
    echo $utente_primo -> getActive();
    echo "<br>";
    echo $utente_secondo->$username;
    echo " ";
    echo $utente_secondo -> getACtive();
    echo "<br>";
    echo $utente_terzo->$username;
    echo " ";
    echo $utente_terzo -> getACtive();









