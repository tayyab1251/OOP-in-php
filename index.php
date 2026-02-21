<?php

include 'includes/Person.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

$person = new Person;
echo $person->getName();