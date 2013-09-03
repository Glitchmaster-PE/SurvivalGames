<?php

//sgCore version 2.1

class sgCore{

 private $server;
 
	function __construct(){
	  $this->server = ServerAPI::request();
	}
	
	public function init(){
	  
	}
	
	function __destruct(){
	
	} 
	
} 
?>