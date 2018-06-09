<?php


class Human
{
	public $isAlive = true;
    protected $age;
    protected $gender;
    protected $height;
    protected $weight;
    protected $name;
    public function __construct($name,$age,$gender, $height, $weight)
    {
    	$this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->height = $height;
        $this->weight = $weight;    
    }

     public function getName()
    {
        return $this->name;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function getAge()
    {
        return $this->age;
    }
    
    public function getHeight()
    {
        return $this->height;
    }
    public function getWeight()
    {
        return $this->weight;
    }
   
    public function getPersonFull()
    {
    	return 'My name is '. self::getName().', I am '. self::getAge().' years old, I am '.self::getHeight(). 'cm height '. 'and I weight '. self::getWeight(). 'kg .'; 
    }
}

/** Class Human(name,age,gender, height, weight)  */

$person1 = new Human('Natasa',26,'Female',160, 50);

if($person1->isAlive){
	echo 'Person 1:<br>';
	echo $person1->getPersonFull();
	echo "<br>".$person1->getName().' is '.$person1->getGender();
}

echo '<br>-----------------------------------<br>';

$person2 = new Human('Oliver',29,'Male',176, 90);

if($person1->isAlive){
	echo 'Person 2:<br>';
	echo $person2->getPersonFull();
	echo "<br>".$person2->getName().' is '.$person2->getGender();
}