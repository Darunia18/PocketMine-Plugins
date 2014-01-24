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
                //$this->config = new Config($this->api->plugin->configPath($this)."config.yml", CONFIG_YAML, array('enabled' => true));
                //I may do something with an actual config file at a later time.
                $fp = fopen('./plugins/EnderChest/keepme.php','w');
                fwrite($fp, '<?php
                    public function setSlot($data, $s, Item $item, $update = true, $offset = 0){
                       $username = $data["player"]->username;
                        $level = $this->level;
                        $class = 54;
                        $i = $this->getSlotIndex($s); 
                        $d = array( "Count" => $item->count, "Slot" => $s, "id" => $item->getID(), "Damage" => $item->getMetadata(), );
                        $x = $data->x;
                        $y = $data->y;
                        $z = $data->z;
                        $this->api->tile->add($level, $class, $x, $y, $z, $i, $d);
        }
        ?>
        ');
                fclose($fp);
                $this->api->addHandler("player.block.activate", array($this, "touchHandler"));//using activate but may be touch
        }
                
        public function touchHandler($data){
                $username = $data["player"]->username;
                $ChestID = $data["target"]->getID(54);
                $level = $data["target"]->level;
                $class = 54;
                $x = $data["target"]->x;
                $y = $data["target"]->y;
                $z = $data["target"]->z;
                $data = $this->api->plugin->readYAML($this->api->plugin->configPath($this) . $username . ".yml");
                if($ChestID = 54){
                        if(file_exists('./plugins/EnderChest/'.$username.'.yml')){
                            require("./plugins/EnderChest/keepme.php");
                                //loads $username.yml and updates, if needed.
                                //see keepme.php for info.                       

                        }else{
                                
                                $this->config = new Config($this->api->plugin->configPath($this).$username.".yml", CONFIG_YAML, array(
                                        "Items" => array(
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
                                        "x" => "$x",
                                        "y" => "$y",
                                        "z" => "$z"));
                        }        
                        
                }
        }
        
               /* public function setSlot($data, $s, Item $item, $update = true, $offset = 0){
                       $username = $data["player"]->username;
                        $level = $this->level;
                        $class = 54;
                        $i = $this->getSlotIndex($s); 
                        $d = array( "Count" => $item->count, "Slot" => $s, "id" => $item->getID(), "Damage" => $item->getMetadata(), );
                        $x = $data->x;
                        $y = $data->y;
                        $z = $data->z;
                        $this->api->tile->add($level, $class, $x, $y, $z, $i, $d);
        }*/
        
        public function __destruct(){}
}
?>
