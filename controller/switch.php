
<?php

    $path = "vues/";
    if(isset($_GET["p"])){
        $page = $_GET["p"];
    }else{
        $page = "home";
    }

    if(strpos($page, 'admin') !== false){
        $p = explode("_", $page);
        if(count($p)==2){
            $path .= "admin/".$p[1];
        }else{
            $path .= "admin/home";
        }
    }else{

        $path .= $page;

    }

    require_once($path.".php");

    ?>