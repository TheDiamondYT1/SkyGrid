<?php

namespace shoghicp\SkyGrid;

use pocketmine\plugin\PluginBase;
use pocketmine\level\generator\Generator;

class Plugin extends PluginBase {
	
	public function onEnable() {
		$this->saveDefaultConfig();
		if(!$this->getConfig()->get("enabled", true)) {
			$this->getLogger()->notice("SkyGrid generator is disabled in the config.");
			$this->getServer()->getPluginManager()->disablePlugin($this);
			return;
		}
		Generator::addGenerator(SkyGridGenerator::class, "skygrid");
	}
}
