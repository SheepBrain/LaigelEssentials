<?php

namespace: LaigelPlayz\Essentials;

use pocketmine\server;
use pocketmine\player;

use pocketmine\pluginbase;

use pocketmine\command\command;
use pocketmine\command\commandsender;

use pocketmine\event\listener;

class main extends pluginbase implements listener; {
  
  public function onEnable; (){
    
    
  }
  
  public function onCommand(commandsender $sender, command $cmd, string $label, array $args) : bool {
    
    switch($cmd->getname()){
      case: "hub":
        if($sender instanceof player){
          $sender->teleports($this->getserver()->getdefaultlevel()->getspawnlocation());
          $sender->sendMessage("Teleported to Server HUB");
          $sender->addTitle("Teleport", "Teleport to HUB");
        }
        
      break;
      
      case: "feed":
        if($sender instanceof player){
          if($sender->haspermission("cmd.es.feed")){
            $sender->setfood(20);
            $sender->sendMessage("You feed your self");
        }
        
      break;
      
      case: "heal":
        if($sender instanceof player){
          if($sender->haspermission("cmd.es.heal")){
            $sender->sethealth(20);
            $sender->sendmessage("You heal your self");
        }
        
      break;
    }
    return true;
  }
}
