<?php
    // on definit des consntantes via 2 methodes différentes
    define("HOSTURL", "http://localhost/MVC/mvc/");
    const HOSTURLASSET = HOSTURL."asset/";

    define("BDDHOST", "localhost");
    define("BDDUSER", "root");
    define("BDDPASS", "");
    define("BDDDATABASE", "marvel");

    const PAGE_SITE = array(
        "login" => "view/no-connect/login.php",
        "register" => "view/no-connect/register.php",
        "index" => "view/connect/index.php",
    );
?>