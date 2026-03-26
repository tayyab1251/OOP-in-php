<?php

class NewClass{
    private $data;

    public function __construct(){
        return $this->data;        
    }

    // set data
    public function setData($data){
        $this->data = $data;
    }

    // get data
    public function getData(){
        return $this->data;
    }

    // DESTRUCTOR
    public function __destruct(){
        echo "Object is being destroyed. Data was: " . $this->data;
    }


}


?>



<H1>PHP Destructor Example</H1>

<?php 

$obj = new NewClass();
$obj->setData("Hellow Tayyab");
unset($obj);
echo $obj->getData();
echo "<br>";

