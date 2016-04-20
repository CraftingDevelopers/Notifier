<?php

namespace Jankirby\Notifier;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\Listener;
use pocketmine\player;

class Main extends PluginBase implements Listener{

public function onPreLogin(PlayerPreLoginEvent $event){
    $player = $event->getPlayer();
    $name = $player->getName();
    if(!$this->getServer()->isWhitelisted($player->getName())){
      $event->setCancelled(true);
      $event->setKickMessage(C::RED . $name . "joined the server, but he/she is not on the whitelist!");
        }
    }
     }
}
