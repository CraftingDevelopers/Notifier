<?php

namespace Jankirby\Notifier;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player;

class Main extends PluginBase implements Listener{

 public function onPreLogin(PlayerPreLoginEvent $event){
    $player = $event->getPlayer();
    $reason = $player joined the server, but he/she is not on the whitelist list!
    if(!$this->getServer()->isWhitelisted($player->getName())){
      $event->setCancelled(true);
      $event->setKickMessage($reason);
        }
    }
     public function onPreLogin(PlayerPreLoginEvent $event){
    $player = $event->getPlayer();
    $reason = $player tried to join the game but he/she is banned!
    if(!$this->getServer()->isBanned($player->getName())){
      $event->setCancelled(true);
      $event->setKickMessage($reason);
    }
     }
}


  
  

