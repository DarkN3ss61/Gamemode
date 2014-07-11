<?php

namespace DarkN3ss\Gamemode;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Gamemode extends PluginBase{

    public function onEnable(){
        $this->getLogger()->info("Gamemode Started");
    }

    public function onDisable(){
        $this->getLogger()->info("Gamemode Stopped");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args)
    {
        if(strtolower($command->getName()) === "gm"){
            switch($args[0]){
                case "0":
                    $sender->setGamemode(0);
                    break;
                case "1":
                    $sender->setGamemode(1);
                    break;
                case "2":
                    $sender->setGamemode(2);
                    break;
                case "3":
                    $sender->setGamemode(3);
                    break;	
            }
            return true;
        }
        return false;
    }
}
