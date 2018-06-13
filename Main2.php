
<?php


namespace Fly;



use pocketmine\event\Listener;

use pocketmine\command\Command;

use pocketmine\plugin\PluginBase;

use pocketmine\Server;

use pocketmine\Player;





class Fly extends PluginBase implements Listener[

    Public function onEnable(){

        $this->getLogger()->info("Fly Succesfully Enabled");

}



    Public function onDisable(){

        $this->getLogger()->info("Fly Succesfully Disabled");

	}
}