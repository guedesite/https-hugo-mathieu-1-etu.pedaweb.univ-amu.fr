<?php
namespace modele\app;

class action {
    
    public static function invoke() : void {
        if(isset($_GET['action'])) {
            if(file_exists("action/".$_GET['action'].".php")) {
                include("action/".$_GET['action'].".php");
                jsonState::call();
                exit();
            } else {
                header('Location: index.php?page=404');
            }
        }
    }
    
    
}