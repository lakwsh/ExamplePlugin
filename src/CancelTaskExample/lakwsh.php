<?php
/** ©2014-2017 lakwsh.net **/
namespace CancelTaskExample;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\CallbackTask;

class lakwsh extends PluginBase{
	public function onEnable(){
		$this->taskid=$this->getServer()->getScheduler()->scheduleRepeatingTask(new CallbackTask([$this,'ExampleTask']),10)->getTaskId();
	}
	public function ExampleTask(){
		$this->getLogger()->warning('榔头!!!!!');
		$this->getServer()->getScheduler()->cancelTask($this->taskid);
	}
}