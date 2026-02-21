<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


include 'includes/Person.php';

$person = new Person;

$person->setName("Tayyab", "Sabir"); //set name

// get name

echo $person->getName();