<?php
require('animal.class.php');

class Cat extends Animal
{
   
    
    public function meow() {
       return "Cat ".$this->getName()." say meow";
    }
}
?>