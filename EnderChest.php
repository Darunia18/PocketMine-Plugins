<?php
/*
__PocketMine Plugin__
name=EnderChest
description=Every player has personal, universal chest.
version=Dev 0.1
author=Darunia18 & I_Is_Payton_
class=EnderChestAPI
apiversion=10,11,12
*/

class EnderChestAPI implements Plugin {
	private $api;
	
	public function __construct(ServerAPI $api, $server = false){
		$this->api = $api;
		$this->api->LoadAPI("enderchest", "EnderChest");
	}
	
	public function init(){
		$this->api->enderchest->init();
	}
	
	public function __destruct(){
	}
}

class EnderChest {
	static $path;
	private $config;
	
	function __construct() {
		$this->server = ServerAPI::request();
	}
	
	public function init() {
		$this->server->api->addHandler("player.block.touch", array($this, "touchHandler"));
		self::$path =  DATA_PATH."plugins/EnderChest/";
		@mkdir(DATA_PATH."plugins/EnderChest/");
	}	
		
	public function touchHandler($data){
		$username = $data["player"]->username;
		$x = $data["target"]->x;
		$y = $data["target"]->y;
		$z = $data["target"]->z;
		$level = $data["target"]->level;
		$this->config = $this->server->api->plugin->readYAML((self::$path).$username.".yml");
		if($ChestID = 54){
			if(file_exists('./plugins/EnderChest/'.$username.'.yml')){
				$chest = $this->server->api->tile->get(new Position($x, $y, $z, $level));
				$val = $this->api->config->get('items');
				foreach($val['items'] as $slot => $iteminfo){
					$item = BlockAPI::getItem($iteminfo['id'], $iteminfo['meta'], $iteminfo['count']);
					$chest->setSlot($slot, $item);
				}
			}
			else{
				$this->path = new Config(self::$path.$username.".yml", CONFIG_YAML, array(
					'items' => array(
						0 => array(
							'count' => 0, 
							'id' => 0,
							'meta' => 0
						),
						1 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						2 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						3 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						4 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						5 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						6 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						7 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						8 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						9 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						10 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						11 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						12 => array(
							'count' => 0,  
							'id' => 0,
							'meta' => 0
						),
						13 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						14 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						15 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						16 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						17 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						18 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						19 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						20 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						21 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						22 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						23 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						24 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						25 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						),
						26 => array(
							'count' => 0,
							'id' => 0,
							'meta' => 0
						)
					),
				)
				);
			}	
		}	
	}
	
	public function __destruct(){
	}
}
?>
