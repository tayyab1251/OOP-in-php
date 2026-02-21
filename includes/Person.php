<?php

/*
private ->only accessed within the same class by public method
protected ->this is also can be accessed within the class but also can be accessed to the class that extends this class



*/

class Person {
    private $firstName = "Tayyab";
    private $lastName = "Sabir";

    public function getName(){
        return $this->firstName;
    }
}