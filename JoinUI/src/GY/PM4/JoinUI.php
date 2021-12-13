<?php

declare(strict_types=1);

namespace GY\PM4;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\plugin\PluginBase;

use pocketmine\player\Player;

use pocketmine\form\Form;

use GY\PM4\form\JoinForm;

class JoinUI extends PluginBase implements Listener
{
   public function onEnable() : void {
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
   }
   public function onJoin(PlayerJoinEvent $event) {
      $player = $event->getPlayer();
      $name = $player->getName();
      if(! $event->getPlayer()->hasPlayedBefore())
      {
         $player->sendForm(new JoinForm());
         return true;
      }
   }
}
