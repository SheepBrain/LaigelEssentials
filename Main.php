<?php

namespace PluginPC;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class main extends PluginBase implements Listener {

	public function onEnable(){
		$this->getLogger()->info("Its enabled bruh");
	}

  public function onDisable(){
  	$this->getLogger()->info("Its disabled bruh");
  }

  public function onCommand(CommandSender $sender, Command $cmd, String $Label, Array $args) : bool {
  	switch ($cmd->getName()){
  		case "staffs"
  		 $sender->sendMessage("List of Staff Members
                               1.LaigelPlayz(Owner)
                               2.TheMuttonGaming(Co-Owner)
                               3.EnhancedRain(Discord Operator)
                               4.BadDiamond(Discord Mod)
                               5.GrayHoodiBoi(Discord Mod)
                               6.BlueBerryShake(Server Mod)
                               7.HiddenHope(Server Mod)
                               8.ParThiV 22(Helper)
                               9.Logan7310YT(Helper)
                               10.RishiOMG(Builder)
                               11.SnowBerryC(Builder)
                               12.Ashwin11(Builder)
                               13.TipGamingYT(Builder)
                               14.TimeForLyife(Builder)")
  	}
  return true;
  }

 
}