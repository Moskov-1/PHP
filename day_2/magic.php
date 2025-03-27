<?php 
    class Fish {
        private $config = [];
        public function __call($name, $arguments) {
            echo __CLASS__." calling \"$name\" from _call method <br/>";
            print_r($arguments);
            echo "<br>".__METHOD__."<br>";
        }
        public function __set($key, $value) {
            if(isset($key) ){
                $this->config[$key] = $value;
            }else{
                echo "invalid key provided <br/>";
            }
        }
        public function __get($key){
            if(array_key_exists($key, $this->config)){
                return $this->config[$key];
            }
        }

        public function __unset($key){
            if(isset($this->config[ $key ])){
                return true;
            }else{
                throw new Exception("<p>\"$key\" key does not exist in ".__CLASS__."</p>");
            }

        }
    }

    $obj = new Fish();
    $obj->swim("test");
    $obj->jog = true;
    echo "$obj->jog";
    if(!isset($obj->topSpeed)){
        $obj->topSpeed = 11;
        echo "<p>new speed set</p>";
    }else{
        echo "speed was already set";
    }

    try{
    unset($obj->go);
    }catch(Exception $e){
        echo "".$e->getMessage()."";
    }
    $name = "Raihan Ahmed";
    echo strlen($name)."<br/>";
    $words = explode(" ", $name);
    print_r($words);

    echo "<p> ".round(3.14159, 3)."</p>";
    mt_srand(12345); 
    echo mt_rand()."<br>";  
    echo uniqid()."<br>"; // Outputs a unique identifier based on the current time
    echo uniqid('prefix_')."<br>"; // Outputs a unique identifier with a prefix

?>