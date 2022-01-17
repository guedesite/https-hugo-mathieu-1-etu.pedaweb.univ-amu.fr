<?php 
namespace modele\app;

class jsonState {
    
    private static array $return = [];

	public static function call() : void {
	   header('Content-Type: application/json');
	   print json_encode(self::$return);
	}
	
	public static function returnJson(mixed $key, mixed $value) : void {
	    self::$return[$key] = $value;
	}
	
	public static function returnNotif(String $status, String $header, String $message) : void {
	    self::returnJson("toastr", true);
	    self::returnJson("status", $status);
	    self::returnJson("header", $header);
	    self::returnJson("message", $message);
	}
}