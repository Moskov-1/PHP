<?php 
    declare(strict_types= 1);
    interface Animalia {
        public function action();
    }

    class Dog implements Animalia {
        function action(){
            echo "Bark";
        }
    }

    
    class Bird implements Animalia {
        function action(){
            echo "Fly";
        }
        function sing(){
            echo "<p>".__CLASS__." sings</p>";
        }
    }
    class Polymorph{
        public $animal;
        public function __construct(Animalia $animal) {
            $this->animal = $animal;
        }
    }
    $obj = new Polymorph(new Bird());
    $obj->animal->action();
    $obj->animal->sing();

?>