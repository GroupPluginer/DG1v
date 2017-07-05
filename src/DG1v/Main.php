<?php

namespace DG1v;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\TextFormat\as c;

class Main extends PluginBase{

public function onEnable(){
 $this->getServer()->getLogger()->info(c::GREEN."Plugin has been enable");
  $this->getLogger()->info(c::GREEN."by GROUPluginer");
   }
   public function onDisable(){
    $this->getServer()->getLogger()->info(c::RED."Plugin has been disable");
     }
     public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
      $this->getName)(({
       case 'gp':
        $sender->setHealth(20);
         break;
        }
       }
      }
