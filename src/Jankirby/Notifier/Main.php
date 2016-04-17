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
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    if($cmd->getName() == "checkop"){
  if(!isset($args[0])){
  $sender->sendMessage("Usage: /checkop <player>");
  }else{
  $player = $this->getServer()->getPlayer($args[0]);
  if($player isOp){
  $sender->sendMessage("".$sender->getName()."$player has operator status!");
  if(!isset($args[0])){
  $sender->sendMessage("$player do not have operator status");
}

  
  

