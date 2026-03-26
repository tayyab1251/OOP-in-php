<?php

class Person
{
    public $firstName;
    public $lastName;

    // constructor is a special method
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    // method to get name that we have set in constructor
    public function getName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

?>

<h1>Person Constructor</h1>

<?php

$person = new Person("Tayyab", "Sabir");
echo $person->firstName;
