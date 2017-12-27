<?php
    // require "view/no-connect/login.php";

    require "config.php" ;
    $view = "view/no-connect/login.php";
    if($_GET)
    {
        if(isset($_GET["page"]))
        {
            foreach(PAGE_SITE as $indice => $valeur)
            {
                if($indice == $_GET["page"]) // es ce que l'indice est egale au paramètre de la page si oui notre valeur cad le reste de l'url prend pour valeur view
                {
                    $view = $valeur ; // on arrive a voir le view car a la fin de notre code on fait un requite
                    break ;
                }
            }
        }
    }
    if($_POST)
    {
        if(isset($_POST["page"])) // ici on regarde si on recupère bien le name et si on le recupere bien en fonction de leur value on va nous amener vers une page
        {
            switch($_POST["page"]):
                case "login":
                    require "controlleur/loginControlleur.php";
                    $controlleurLogin = new loginControlleur() ;
                    $view = $controlleurLogin->login($_POST);
                    break ;

                case "register":
                    require "controlleur/loginControlleur.php";
                    $controlleurLogin = new loginControlleur() ;
                    $view = $controlleurLogin->login($_POST);
                    break ;
            endswitch ;
        }
    }



    require $view ;



?>