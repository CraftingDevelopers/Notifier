<?php

namespace Jankirby\Notifier;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{

public function isWhitelisted(isWhitelisted $event){
  $sender->getServer()->broadcastMessage(TextFormat::RED."$name tried to join, but he/she is not on the whitelist-list!");
}
public function isBanned(){
  $sender->getServer()->broadcastMessage(TextFormat::RED."$name tried to join, but he/she is banned!");
}
  public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		if($sender instanceof Player) {
			$player = $sender->getPlayer()->getName();
			if(strtolower($command->getName('Notifier'))) {
				if(empty($args)) {
					$sender->sendMessage($this->plugin->formatMessage(TextFormat::GOLD."This server uses Notifier by Jankirby"));
					return true;
				}
			}
		}
  }
}


  
  

