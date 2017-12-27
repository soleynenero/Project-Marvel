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
        require "controlleur/loginControlleur.php";
        $controlleurLogin = new loginControlleur() ;
        $view = $controlleurLogin->login($_POST);
    }



    require $view ;



?>