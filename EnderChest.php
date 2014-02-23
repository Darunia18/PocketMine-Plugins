<?php
/*
__PocketMine Plugin__
name=EnderChest
description=Every player has personal, universal chest.
version=Dev 0.1
author=Darunia18 & I_Is_Payton_
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
		$this->api->addHandler("player.block.touch", array($this, "eventHandler"));
	}	
		
	public function touchHandler($data, $packet){
		$username = $packet->username;
		$x = $data["target"]->x;
		$y = $data["target"]->y;
		$z = $data["target"]->z;
		if($ChestID = 54){
			if(file_exists('./plugins/EnderChest/'.$username.'.yml')){
				$chest = $this->api->tile->get($x, $y, $z);
				$this->config = $this->api->plugin->configPath($this . $username . ".yml");
				$chest->setSlot(0,$this->config->get('Slot0'['id']));
				$chest->setSlot(1,$this->config->get('Slot1'['id']));
				$chest->setSlot(2,$this->config->get('Slot2'['id']));
				$chest->setSlot(3,$this->config->get('Slot3'['id']));
				$chest->setSlot(4,$this->config->get('Slot4'['id']));
				$chest->setSlot(5,$this->config->get('Slot5'['id']));
				$chest->setSlot(6,$this->config->get('Slot6'['id']));
				$chest->setSlot(7,$this->config->get('Slot7'['id']));
				$chest->setSlot(8,$this->config->get('Slot8'['id']));
				$chest->setSlot(9,$this->config->get('Slot9'['id']));
				$chest->setSlot(10,$this->config->get('Slot10'['id']));
				$chest->setSlot(11,$this->config->get('Slot11'['id']));
				$chest->setSlot(12,$this->config->get('Slot12'['id']));
				$chest->setSlot(13,$this->config->get('Slot13'['id']));
				$chest->setSlot(14,$this->config->get('Slot14'['id']));
				$chest->setSlot(15,$this->config->get('Slot15'['id']));
				$chest->setSlot(16,$this->config->get('Slot16'['id']));
				$chest->setSlot(17,$this->config->get('Slot17'['id']));
				$chest->setSlot(18,$this->config->get('Slot18'['id']));
				$chest->setSlot(19,$this->config->get('Slot19'['id']));
				$chest->setSlot(20,$this->config->get('Slot20'['id']));
				$chest->setSlot(21,$this->config->get('Slot21'['id']));
				$chest->setSlot(22,$this->config->get('Slot22'['id']));
				$chest->setSlot(23,$this->config->get('Slot23'['id']));
				$chest->setSlot(24,$this->config->get('Slot24'['id']));
				$chest->setSlot(25,$this->config->get('Slot25'['id']));
				$chest->setSlot(26,$this->config->get('Slot26'['id']));
			}else{
				
				$this->config = new Config($this->api->plugin->configPath($this).$username.".yml", CONFIG_YAML, array(
					"Items" => array(
						"Slot0" => array(
							"Count" => 0,
							"Slot" => 0, 
							"id" => 0,
							"Damage" => 0
						),
						"Slot1" => array(
							"Count" => 0,
							"Slot" => 1,
							"id" => 0,
							"Damage" => 0
						),
						"Slot2" => array(
							"Count" => 0,
							"Slot" => 2,
							"id" => 0,
							"Damage" => 0
						),
						"Slot3" => array(
							"Count" => 0,
							"Slot" => 3,
							"id" => 0,
							"Damage" => 0
						),
						"Slot4" => array(
							"Count" => 0,
							"Slot" => 4,
							"id" => 0,
							"Damage" => 0
						),
						"Slot5" => array(
							"Count" => 0,
							"Slot" => 5,
							"id" => 0,
							"Damage" => 0
						),
						"Slot6" => array(
							"Count" => 0,
							"Slot" => 6,
							"id" => 0,
							"Damage" => 0
						),
						"Slot7" => array(
							"Count" => 0,
							"Slot" => 7,
							"id" => 0,
							"Damage" => 0
						),
						"Slot8" => array(
							"Count" => 0,
							"Slot" => 8,
							"id" => 0,
							"Damage" => 0
						),
						"Slot9" => array(
							"Count" => 0,
							"Slot" => 9,
							"id" => 0,
							"Damage" => 0
						),
						"Slot10" => array(
							"Count" => 0,
							"Slot" => 10,
							"id" => 0,
							"Damage" => 0
						),
						"Slot11" => array(
							"Count" => 0,
							"Slot" => 11,
							"id" => 0,
							"Damage" => 0
						),
						"Slot12" => array(
							"Count" => 0,
							"Slot" => 12,  
							"id" => 0,
							"Damage" => 0
						),
						"Slot13" => array(
							"Count" => 0,
							"Slot" => 13,
							"id" => 0,
							"Damage" => 0
						),
						"Slot14" => array(
							"Count" => 0,
							"Slot" => 14,
							"id" => 0,
							"Damage" => 0
						),
						"Slot15" => array(
							"Count" => 0,
							"Slot" => 15,
							"id" => 0,
							"Damage" => 0
						),
						"Slot16" => array(
							"Count" => 0,
							"Slot" => 16,
							"id" => 0,
							"Damage" => 0
						),
						"Slot17" => array(
							"Count" => 0,
							"Slot" => 17,
							"id" => 0,
							"Damage" => 0
						),
						"Slot18" => array(
							"Count" => 0,
							"Slot" => 18,
							"id" => 0,
							"Damage" => 0
						),
						"Slot19" => array(
							"Count" => 0,
							"Slot" => 19,
							"id" => 0,
							"Damage" => 0
						),
						"Slot20" => array(
							"Count" => 0,
							"Slot" => 20,
							"id" => 0,
							"Damage" => 0
						),
						"Slot21" => array(
							"Count" => 0,
							"Slot" => 21,
							"id" => 0,
							"Damage" => 0
						),
						"Slot22" => array(
							"Count" => 0,
							"Slot" => 22,
							"id" => 0,
							"Damage" => 0
						),
						"Slot23" => array(
							"Count" => 0,
							"Slot" => 23,
							"id" => 0,
							"Damage" => 0
						),
						"Slot24" => array(
							"Count" => 0,
							"Slot" => 24,
							"id" => 0,
							"Damage" => 0
						),
						"Slot25" => array(
							"Count" => 0,
							"Slot" => 25,
							"id" => 0,
							"Damage" => 0
						),
						"Slot26" => array(
							"Count" => 0,
							"Slot" => 26,
							"id" => 0,
							"Damage" => 0
						)
					),
					"id" => 'Chest',
					"x" => $x,
					"y" => $y,
					"z" => $z
				)
				);
			}	
		}	
	}
	public function __destruct(){}
}
?>
