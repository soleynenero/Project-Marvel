<?php

// ici le controlleur c'est le parent de registercontrolleur et logincontrolleur
// fonction static pour utiliser des variables et methodes sans faire d'instance pour alleger le code
    class Controlleur
    {
        protected function validateEmail(string $email): bool
        {
            return(filter_var($email , FILTER_VALIDATE_EMAIL)) ? true : false ;
        }
    }