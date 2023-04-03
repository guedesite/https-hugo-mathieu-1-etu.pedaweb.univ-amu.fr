<?php 
namespace modele\app;
class urlRewrite
{


    /**
     *  Traitement de la réécriture de l'URL
     *
     *  @param null
     *  @return void
     *
     *  @access public
     *  @static
     *  @see index.php
     *
     */
    public static function call() : void {
        if(strrpos($_SERVER['REQUEST_URI'], "page=") !== false) {
            $url = self::getSiteUrl();
            $arg = "";
            foreach($_GET as $key => $value) {
                if($arg == "" && substr($url, -1) == "/") {
                    $url = substr($url, 0, -1);
                }
                if(!isset($value) | empty($value)) {
                    $arg .= "/".$key;
                } else {
                    $arg .= "/".$value;
                }
            }
            header("Location: ".$url.$arg);
            exit();
        } else if($_SERVER['REQUEST_URI'] == "/index.php") {
            header("Location: ".self::getSiteUrl());
        }

    }

    /**
     *
     * Renvoit l'url du site web
     *
     * @param null
     * @return String Url du site internet
     *
     * @access public
     * @static
     * @see urlRewrite::call()
     */
    public static function getSiteUrl() : String  {
        $uri = substr($_SERVER["SCRIPT_NAME"], 0, strrpos($_SERVER["SCRIPT_NAME"], '/')+1 );
        $url = $_SERVER['SERVER_NAME'];
        $ht = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"]  == "on" ? "https://" : "http://";

        return $ht.$url.$uri;
    }


}
?>