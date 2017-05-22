<?php
namespace ralphstudios\barcraft;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
  public function getBarCraft(){
  return new BarCraft($this);
  }
}
