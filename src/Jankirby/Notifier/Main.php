<?php
namespace Jankirby\Notifier;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

public function onPreLogin(PlayerPreLoginEvent $event){
    $player = $event->getPlayer();
    $name = $player->getName();
    if(!$this->getServer()->isWhitelisted($player->getName())){
      $event->setCancelled(true);
      $event->setKickMessage(C::RED . $name . "joined the server, but he/she is not on the whitelist!");
       if(!$this->getServer()->isBanned($player->getName())){
        $event->setCancelled(true);
      $event->setKickMessage(C::RED . $name . "joined the server, but he/she is Banned!");
      if(!$this->getServer()->isOp($player->getName())){
        $event->setKickMessage(C::RED . $name . "is an OPERATOR, and is here to help!");
       public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
      if($cmd->getName() == "test"){ $sender->sendMessage("This Is A Test!"); } return true; } }
    }
}
}
}
