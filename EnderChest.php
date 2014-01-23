<?php
/*
__PocketMine Plugin__
name=EnderChest
description=Every player has personal, universal chest.
version=Dev 0.1
author=Darunia18
class=EnderChest
apiversion=10,11,12
*/

class EnderChest implements Plugin {
	private $api;
	private $config;
	public $class;
	
	public function __construct(ServerAPI $api, $server = false) {
		$this->api = $api;
	}
	
	public function init() {
		//$this->config = new Config($this->api->plugin->configPath($this)."config.yml", CONFIG_YAML, array('enabled' => true));
		//I may do something with an actual config file at a later time.
		$this->api->addHandler("player.block.activate", array($this, "touchHandler"));//using activate but may be touch
	}
		
	public function touchHandler($data){
		$username = $data["player"]->username;
		$ChestID = $data["target"]->block->getID;
		if($ChestID = 54){
			if(file_exists('./plugins/EnderChest/'.$username.'.yml')){
				$level = $data["target"]->level;//Chest level. I have no clue if this is right.
				$class = 54;
				$x = $data["target"]->x;//Chest x. I'm not sure if this is right.
				$y = $data["target"]->y;//Chest y. I'm not sure if this is right.
				$z = $data["target"]->z;//Chest z. I'm not sure if this is right.
				$data = $this->api->plugin->readYAML($this->api->plugin->configPath($this) . $username . ".yml");				$this->api->tile->add($level, $class, $x, $y, $z, $data);
				//load $username.yml
				//put items into chest
				//read what is left in the chest after closed
				//save what is in the chest
				//clear the chest
				//READ THIS! USE $this->api->tile->add($level, $class, $x, $y, $z, $data(default: array());
			}
			else{
				$this->config = new Config($this->api->plugin->configPath($this).$username.".yml", CONFIG_YAML, array(
					"Items" => array(//I hope this array is right.
						array(
							"Count" => 0,
							"Slot" => 0, 
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 1,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 2,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 3,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 4,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 5,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 6,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 7,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 8,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 9,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 10,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 11,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 12,  
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 13,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 14,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 15,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 16,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 17,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 18,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 19,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 20,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 21,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 22,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 23,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 24,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 25,
							"id" => 0,
							"Damage" => 0),
						array(
							"Count" => 0,
							"Slot" => 26,
							"id" => 0,
							"Damage" => 0)),
					"id" => 'Chest',
					"x" => $x,
					"y" => $y,
					"z" => $z));
			}	
			
		}
	}
	
	public function chestClose($data){//Something with closing the chest
		$username = $data["player"]->username;
		$level = $this->level;//Player/Chest level. I have no clue if this is right.
		$class = 54;
		$x = $data->x;//Chest x. I'm not sure if this is right.
		$y = $data->y;//Chest y. I'm not sure if this is right.
		$z = $data->z;//Chest z. I'm not sure if this is right.
		$data = array();
		//Something about overwriting the $username.yml file.
		$this->api->tile->add($level, $class, $x, $y, $z, $data);
	}
	
	public function __destruct(){
	}
}
?>
