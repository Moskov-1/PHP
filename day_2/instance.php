<?php
    class Animal {
        public function speak() {
            echo "I am an animal!";
        }
        public function classShow() {
            echo "<p>the class is ".__CLASS__."</p>";        
        }
    }
   
    class Cat extends Animal {
        public function speak() {
            echo "Woof!";
        }
        public function classShow() {
            echo "<p>the class is ".__CLASS__."</p>";

        }
    }

    $cat = new Cat();
    $cat->classShow();

    if ($cat instanceof Cat) {
        echo "<p>The object is an instance of Dog.</p>";
    } else {
        echo "<p>The object is NOT an instance of Dog.</p>";
    }
    print_r(range(1,10));
?>
