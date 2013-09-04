<?php

//sgCore version 2.1

class sgCore{

 private $server;
 private $spawnCnt;
 private $spawnLoc = array(
   array();
   array();
   array();
   array();
   array();
   array();
   array();
   array();
 );
 
	function __construct(){
	  $this->server = ServerAPI::request();
	}
	
	public function init(){
	  
	}
	
	function __destruct(){
	
	} 
	
} 
?>