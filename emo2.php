<?php 
class Animal{
	private $name;
	private $color;
	private $breed;
	private $energy;
	public static $animals_count;

	public function __construct($c, $n = "Balkan", $b = "Shepherd")
	{
		echo "__construct for $n <br/><br/>";
		$this->energy = 100;
		$this->name = $n;
		$this->breed = $b;
		$this->color = $c;
		self::$animals_count++;
	}

	public function eat($food, $quantity)
	{
		echo "$this->name is eating $quantity $food. Am-am-am <br/>";
		$this->energy += 2 * $quantity;
		if($this->energy > 100){
			$this->energy = 100;
		}
	}

	public function walk($distance)
	{
		echo "$this->name is going outside $distance km distance <br/>";
		
		$this->energy -= $distance;
		if($this->energy < 1){
			$shortened = $distance + $this->energy;
			echo "$this->name is critically tired and is going home earlier with $shortened km <br/>";
		}
	}

	public function show_info()
	{
		echo "Name: $this->name <br/>
			Breed: $this->breed <br/>
			Color: $this->color <br/>
			Energy: $this->energy <br/>";
	}

	public function __set($name, $value){
        
        echo "Setting '$name' to '$value' <br/>";
        if (property_exists($this, $name)) {
        	$this->$name = $value;
    	}else{
        	echo "property $name does NOT exist <br/>";
        }
    }

    public function __get($name)
    {
        echo "Getting '$name' <br/>";
        if (property_exists($this, $name)) {
        	return $this->$name;
        }else{
        	echo "property $name does NOT exist <br/>";
        }
	}
}