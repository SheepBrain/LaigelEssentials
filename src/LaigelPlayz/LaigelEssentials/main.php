<?php

namespace: LaigelPlayz\LaigelEssentials;

use pocketmine\server;
use pocketmine\player;

use pocketmine\Pluginbase;

use pocketmine\command\command;
use pocketmine\command\commandsender;

use pocketmine\event\listener;

class main extends Pluginbase implements listener; {
  
  public function onEnable; (){
    
    
  }
  
  public function oncommand(commandsender $sender, command $cmd, string $label, Array $args) : bool {
    
    switch($cmd->getname()){
      case: "spawn":
        if($Sender instanceof player){
          $sender->teleports($this->getserver()->getdefaultlevel()->getSpawnLocation());
          $sender->sendmessage("Teleportation successfull!");
        }
        
      break;
        
      case: "hub":
        if($sender instanceof player){
          $sender->teleports($this->getserver()->getdefaultlevel()->getspawnlocation());
          $sender->sendMessage("Teleportation Successfull");
        }
      
      break;
        
      case: "lobby":
        if($sender instanceof player){
          $sender->teleports($this->getServer()->getdefaultlevel()->getspawnlocation());
          $sender->sendMessage("teleportation succesful");
        }
        
      break;
        
      case: "feed":
        if($sender instanceof player){
          if($sender->haspermission("cmd.feed")){
          $sender->setFood(20);
          $sender->sendMessage("You've feed your self!");
        }
        
      break;
        
      case: "regen":
        if($sender instanceof player){
          if($sender->haspermission("cmd.regen")){
          $sender->setHealth(20);
          $sender->sendMessage("You've regenerate your self");
          }
        }
        }
    }
    return true;
  }
}
