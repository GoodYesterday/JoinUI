<?php

declare(strict_types=1);

namespace GY\PM4\form;

use pocketmine\player\Player;

use pocketmine\form\Form;

class JoinForm implements Form 
{
   public function jsonSerialize() : array {
      return [
      "type" => "form",
      "title" => "GYo.O",
      "content" => "§l§f어서오세요 !",
      "buttons" => [
      [
      "text" => "§l§f창닫기"
            ]
         ]
      ];
   }
   public function handleResponse(Player $player, $data) : void {
      if($data === null) {
         return;
      }
      if($data === 0) {
         $player->sendTitle("§l§7[ §f! §7]");
         $player->sendSubTitle("§l§7환영합니다 !");
      }
   }
 }