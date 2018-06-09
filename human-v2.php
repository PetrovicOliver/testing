<?php
class Human
{
    public $isAlive = true;
    private $name;
    private $age;
    private $height;
    private $weight;

    public function setName($name)
    {
        $this->name = $name;
    }
     
    public function getName()
    {
        return $this->name;
    }
     
    public function setAge($age)
    {
        $this->age = $age;
    }
     
    public function getAge()
    {
        return $this->age;
    }
     
    public function setHeight($height)
    {
        $this->height = $height;
    }
     
    public function getHeight() 
    {
        return $this->height;
    }
     
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
     
    public function getWeight()
    {
        return $this->weight;
    }

    public function getPersonData()
    {
        return 'My name is '.$this->getName().', I am '.$this->getAge().' years old, I am '.$this->getHeight().'cm height and I weight '.$this->getWeight().'kg .';
    }
     
}
 
$person1 = new Human();
if($person1->isAlive){
    $person1->setName("Oliver");
    $person1->setAge(29);
    $person1->setHeight(176);
    $person1->setWeight(90);     
    echo 'Person1:<br> '.$person1->getPersonData();
}
echo "<br>--------------------------------------------------------------<br>";
$person2 = new Human();
if($person2->isAlive){
    $person2->setName("Natasa");
    $person2->setAge(26);
    $person2->setHeight(170);
    $person2->setWeight(50);     
    echo 'Person2:<br> '.$person2->getPersonData();
}