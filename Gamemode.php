<?php
/*
 __PocketMine Plugin__
name=Gamemode
description=Change you're gamemode with /gm.
version=1.0
author=DarkN3ss
class=Gamemode
apiversion=10
*/
class Gamemode implements Plugin{
   private $api;

   public function __construct(ServerAPI $api, $server = false){
     $this->api = $api;
   }

   public function init(){
     $this->api->console->register("gm", "<0/1/2/3>", array($this, "gmHandler"));
   }
   
   public function gmHandler($cmd, $params, $issuer, $alias)
   {
	if($cmd = "gm")
	{
		switch(array_shift($params)){
				case "":
					$output = "Usage: /gm <0/1/2/3>";
					break;
				case "0":
					$issuer->setGamemode(0);
					break;
				case "1":
					$issuer->setGamemode(1);
					break;
				case "2":
					$issuer->setGamemode(2);
					break;
				case "3":
					$issuer->setGamemode(3);
					break;					
			}
			return $output;
		}
	}
	
   public function __destruct(){
   }
}
?>