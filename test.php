<?php
    echo "this is just a test file! <br>";
    echo "more text!!!";
    echo "Emo text!";
    public function charge_battery($time){
		echo "chargin battery...<br/>";
		echo "stard endurance = $this->battery_power;";
		$this->battery_power += $time * 10;
		if($this->battery_power > 100){
			$this->battery_power = 100;
		}
		echo "end endurance = $this->battery_power";
	}

echo "something";
