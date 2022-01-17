<?php 
namespace modele\app;

class jsonState {
    
    private static array $return = [];

	public static function call() : Void {
	   header('Content-Type: application/json');
	   print json_encode(self::$return);
	}
	
	public static function returnJson(Object $key, Object $value) : Void {
	    self::$return[$key] = $value;
	}
	
	public static function returnNotif(String $status, String $header, String $message) : Void {
	    self::returnJson("toastr", true);
	    self::returnJson("status", $status);
	    self::returnJson("header", $header);
	    self::returnJson("message", $message);
	}
}