<?php 
    require_once "controlleur.php";
    
    class RegisterControlleur extends Controlleur{

        public function register(array $user): ?string // en php 7 on peut faire le choix de typer nos variable de retour des fonctions juste en mettant :string si on fait : ?string c'est qu'on peut return un string ou null
        // et en mettant array en paramètre ca va nous permmettre de mettre la valeur d'entrer 
        {
            //  verification de l'existence
            if(!isset($user["email"]) || !isset($user["password"]) || !isset($user["username"]))
            return "view/no-connect/register.php" ;

            //  verification que ca soit rempli
            if(empty(trim($user["email"])) || empty(trim($user["password"])) || || empty(trim($user["username"]))) // trim d'enlever les espaces avant kes caractères
            return "view/no-connect/register.php" ;

            $email = htmlspecialchars(trim($user["email"])); // permet de sécuriser notre site pour que l'utilisateur ne puisse pas bugué notre site htmlspecialchars rend inoffensif du html, css et js
            $password = strip_tags(trim($user["password"])); // permet de sécuriser notre site pour que l'utilisateur ne puisse pas bugué notre site strip_tags enleve les balises du html, css et php
            $username = strip_tags(trim($user["username"])); // permet de sécuriser notre site pour que l'utilisateur ne puisse pas bugué notre site strip_tags enleve les balises du html, css et php

            //  verification de l'email
            if(!$this->validateEmail($email))
            {
                return "view/no-connect/register.php";
            }


            //  connexion
            if($email == "toto@toto.toto" && $password=="toto")
            {
                $_SESSION["user"] = $user ;
                return "view/connect/index.php";
            }
            else
            {
                return "view/no-connect/register.php";
            }
        }
    }