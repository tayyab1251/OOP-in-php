<?php

/*
private ->only accessed within the same class by public method
protected ->this is also can be accessed within the class but also can be accessed to the class that extends this class



*/

class Person {
    private $firstName ;
    private $lastName ;

    // method to set first name and last name
    public function setName($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getName(){
        return "Full name : " .  $this->firstName . " " . $this->lastName;
    }
}