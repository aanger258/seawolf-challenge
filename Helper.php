<?php
	class Helper{
		// check_first_input function that checks if the player inputs the data for the first dive correctly
		public function check_first_input($input, &$depth) {
			$input = explode(" ", trim($input));
			if (count($input) == 2 && $input[0] === "dive" && (int) $input[1] > 0) {
				$depth = (int) $input[1];
				echo str_replace('***', $input[1], GameData::CORRECT_FIRST_ACTION);
				return true;
			} else {
				echo GameData::WRONG_FIRST_ACTION;
				return false;
			}
		}

		// check_input function that checks if the player inputs the data for guessing game correctly and changes the depth accordingly to the player's choice
		public function check_input($input, &$depth, &$action) {
			if (trim($input) === "dive") {
				$action = $input;
				$dive = rand(5,75);
				$depth += $dive;
				echo str_replace('***', $dive, GameData::ACTION_DIVE);
				return true;
			} elseif (trim($input) === "float") {
				if ($depth == 0) {
					$float = 0;
				} elseif ($depth < 45) {
					$float = rand(1, $depth);
				} else {
					$float = rand(1, 45);
				}
				$action = $input;
				$depth -= $float;
				echo str_replace('***', $float, GameData::ACTION_FLOAT);
				return true;
			} else {
				echo GameData::WRONG_ACTION;
				return false;
			}
		}

		// battle_enemy function, if the input of the player is correct it checks if he guessed correctly and inflicts damage if the player is wrong
		public function battle_enemy($input, &$depth, &$action, &$damage, $enemy, &$hits, &$check_input){
			if ($input && Helper::check_input($input, $depth, $action)) {
				$check_input = true;

				$correct_action = GameData::ACTIONS[array_rand(GameData::ACTIONS)];

				if ($action === $correct_action) {
					echo GameData::CORRECT_DECISION;
				} else {
					if (count($hits) == 0) {
						$inflicted_damage = $enemy->damage;
					} else {
						$inflicted_damage = pow(2, count($hits)) * $enemy->damage;
						$enemy->damage = $inflicted_damage; 
					}
					$hits[] = $enemy;
					$damage += $inflicted_damage;

					echo str_replace('*', $enemy->direction, str_replace('**', $inflicted_damage, GameData::WRONG_DECISION));
				}
		    	return true;
		    } else {
		    	return false;
		    }
		}
	}
?>