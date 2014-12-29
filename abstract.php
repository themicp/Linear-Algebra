<?php
    abstract class Test {
    }

    abstract class Animal {
        abstract public function func();
    }

    class Human extends Animal {
        public function func() {
        }
    }
?>
