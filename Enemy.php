<?php
	// Enemy class containing the list of enemies and the damage that each onne inflicts
	class Enemy{
		const ENEMIES = ["W", "E", "N"];

		public $direction;
  		public $damage;

		function __construct($direction) {
			$this->direction = $direction;
		}

		function set_damage() {
			switch ($this->direction) {
				case "W":
					$this->damage = rand(1,5);
					break;
				case "E":
					$this->damage = rand(7,14);
					break;
				case "N":
					$this->damage = rand(9,22);
					break;
				default:
					echo "Wrong Direction";
			}
		}
	}
?>