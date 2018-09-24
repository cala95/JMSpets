<?php

 class Database {
        private static $db = NULL;

        public function __construct() {
            
        }

        public static function getInstance() {
            if (static::$db == NULL) {                                          
                static::$db = mysqli_connect('localhost','root','','pets');   
            }

            return static::$db; 
        }
    }
    
        
      $connection = Database::getInstance();

        if(!$connection){
            
            die(mysqli_error($connection));
        }
        /*
        $mysql_server = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_db = "pets";
    $mysqli = new mysqli ($mysql_server, $mysql_user, $mysql_password, $mysql_db); //otvaranje konekcije na server
    
    if ($mysqli->connect_errno) { //errno vraca sifru greske
        //printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
        exit();
    }
    else {
        //echo "Konekcija uspesna! :) <br>";
    }
    $mysqli->set_charset("utf8"); //odabir charseta*/
?>