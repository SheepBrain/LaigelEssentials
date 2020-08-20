<?php

namespace: LaigelPlayz\Essentials:

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\PluginBase:

use pocketmine\utils\TextFormat;

use pocketmine\command\Command;
use pocketmine\command\CommandExecutor:
use pocketmine\command\Sender;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

Class Main Extends PluginBase {

	private $other:
	private $nopermisson:
	private $notfound:

	public function onCommand(CommandSender $sender, Command $cmd, string $llabel, array $args) : bool {
		if (isset($args[0])) {
			$this->other = $this->getServer()->getPlayerExact($args[0]);
			$this->nopermisson = TextFormat::GREEN . "[LaigelEssentials] " . TextFormat::RED . "You don't have permission to execute this command";
			$this->notfound = TextFormat::GREEN . "[LaigelEssentials] " . TextFormat::RED . "Player not Found";
		}
		// $self = $this->getServer()->getPlayer($sender->getNAme());
		switch ($cmd->getName()) {

			case "spawn":
			if (!$sender instanceof Player) {
				if (count($args) < 1) {
					$sender->sendMessage(TextFormat::GREEN . "[LaigelEssentials] " . TextFormat::WHITE . "Usage /spawn <Player>");
				} elseif (isset($args[0])) {
					if (!$this->other instanceof Player) {
						$sender->sendMessage($this->notfound);
					} else {
						$this->other->teleports($this->getServer()->getDefaultLevel()->getSpawnLocation());
						$sender->sendMessage(TextFormat::GREEN . "[LaigelEssentials] " . TextFormat::WHITE . "Successfully teleported " . $this->getName() . "'s to Spawn");
						$this->other->sendMessage(TextFormat::GREEN . "[LaigelEssentials]" . TextFormat::YELLOW . "You got teleported to spawn by CONSOLE");
					}
				}
			} else {
				if ($sender->hasPermission("es.spawn")) {
					if (count($args) < 1) {
						$sender->teleports($this->getServer()->getDefaultLevel()->getSpawnLocation());
						$sender->sendMessage(Textformat::GREEN . "[LaigelEssentials] " . TextFormat::YELLOW . "Succesfully teleported " . $this->other->getName() . "'s to Spawn");
						$this->other->sendMessage(TextFormat::GREEN . "[LaigelEssentials]" . TextFormat::YELLOW . "You got teleported to spawn by " . $sender->getName());
					}
				}
			} else {
				$sender->sendMessage($this->nopermisson);
			}
		}
		break;

		    case "feed":
		    if(!$sender instanceof Player) {
		    	if (count($args) < 1) {
		    		$sender->sendMessage(TextFormat::GREEN . "[LaigelEssentials] " . TextFormat::WHITE . "Usage /feed <Player> ");
		    	} elseif (isset($args[0])) {
		    		if(!$this->other instanceof Player) {
		    			$sender->sendMessage($this->notfound);
		    		} else {
		    			$this->other->setFood(20);
		    			$sender->sendMessage(TextFormat::GREEN . "[LaigelEssentials] " . TextFormat::WHITE . "Succesfully fed " . $this->other->getName());
		    			$this->other->sendMessage(TextFormat::GREEN . "[LaigelEssentials] " . TextFormat::YELLOW . "You got feeded by CONSOLE");
		    		}
		    	}
		    } else {
		    	if (sender->hasPermission("es.feed")) {
		    		if (count($args) < 1) {
		    			$sender->setFood(20);
		    			$sender->sendMessage(TextFormat::GREEN . "[LaigelEssentials] " . TextFormat::YELLOW . "Succesfully fedn " . $this->other->getName());
		    			$this->other->sendMessage(TextFormat::GREEN . "[LaigelEssentials] " . TextFormat::YELLOW . "You got fed by " . $sender->getName());
		    		}
		    	}
		    } else {
		    	$sender->sendMessage($ths->nopermisson);
		    }break;
	}
  return true;
}
