<?php
namespace modele\app;

class page {
    
    public static function invoke() : void {
        if(isset($_GET['page'])) {
            if(file_exists("public/pages/".$_GET['page'].".php")) {
                include("public/pages/".$_GET['page'].".php");
            } else {
                include("public/pages/404.php");
            }
        } else {
            include("public/pages/accueil.php");
        }
    }
    
    
}