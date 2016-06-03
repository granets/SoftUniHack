<?php
class Battery{
	//Add comment to see if it can broke much code
	public $battery_name;
	public $battery_type;
	public $battery_endurance;
	public $battery_power;

	public function __construct($n = "Li 5", $t = "Lithium battery",
			$e = 8, $p = 100){
		$this->battery_name = $n;
		$this->battery_type = $t;
		$this->battery_endurance = $e;
		$this->battery_power = $p;
	}

	//time in hours
	public function charge_battery($time){
		echo "chargin battery...<br/>";
		echo "stard endurance = $this->battery_power;";
		$this->battery_power += $time * 10;
		if($this->battery_power > 100){
			$this->battery_power = 100;
		}
		echo "end endurance = $this->battery_power";
	}

	public function show_battery(){
		echo "Battery info:...
			battery: $this->battery_name <br/>
			type: $this->battery_type <br/>
			endurance: $this->battery_endurance <br/>
			power: $this->battery_power <br/>";
	}

	//Add comment and code at the end
	public function show_battery(){
		echo "Battery info:...
			battery: $this->battery_name <br/>
			type: $this->battery_type <br/>
			endurance: $this->battery_endurance <br/>
			power: $this->battery_power <br/>";
	}
}
?>