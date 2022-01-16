<?php 
        /*
           Attention ! le host => l'adresse de la base de données et non du site !!
        
           Pour ceux qui doivent spécifier le port ex : 
           $bdd = new PDO("mysql:host=HOST;dbname=DB_NAME;charset=utf8;", "LOGIN", "PASS");
           
         */
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=smdmxjmg_mydrugs;charset=utf8;port=3306", "smdmxjmg_myuser", "3u(Me3:3bu%d!3d5Qu");
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }