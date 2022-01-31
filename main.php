<?php
	include('GameData.php');
	include('Helper.php');
	include('Enemy.php');

	// Intro to the game
	echo GameData::WELCOME_TEXT;
	echo GameData::CLOSE_GAME_INFO;
	echo GameData::FIRST_ACTION;
    echo GameData::CAPTAIN_INPUT_TEXT;

	$play_again = 'Yes';

	do {

		// Firts input of the game regarding the first dive
	    $first_dive_input = trim(fgets(STDIN));
	    echo "\n";

	    $depth = 0;

	    // Check if the player wants to exit now the game
	    if ($first_dive_input == 'X') {
	    	echo GameData::CLOSE_GAME_TEXT;
	        break;
	    // Check if the player inputs the correct data
	    } elseif ($first_dive_input && Helper::check_first_input($first_dive_input, $depth)) {
	    	$damage = 0;
	    	$hits = array();

	    	// Loop through the enemies
	    	foreach (Enemy::ENEMIES as $enemy) {
		    	$check_input = false;
		    	$action = '';

	    		$new_enemy = new Enemy($enemy);
	    		$new_enemy->set_damage();

			    echo str_replace('***', $new_enemy->direction, GameData::ATTACK_TEXT);

			    // Get and check the input of the player
		    	do {
			    	echo GameData::CAPTAIN_INPUT_TEXT;

			    	$input = trim(fgets(STDIN));
		    		
		    		// Check if the player wants to exit now the game
		    		if ($input == 'X') {
				    	echo GameData::CLOSE_GAME_TEXT;
				        break;
				    } else {
				    	// "Battle the enemy"
						Helper::battle_enemy($input, $depth, $action, $damage, $new_enemy, $hits, $check_input);
					}
		    	} while (!$check_input);
	    	}

	    	// Check the total damage to see if the player won the game
	    	if ($damage == 0) {
	    		echo str_replace('*', $depth, GameData::FINAL_DEPTH);
	    		echo GameData::WINNER;

	    		echo GameData::PLAY_AGAIN;
	    		
	    		$play_again = trim(fgets(STDIN));
	    		// Check if player wants to play the game again
	    		if ($play_again === 'Yes') {
	    			echo GameData::WELCOME_TEXT;
					echo GameData::CLOSE_GAME_INFO;
					echo GameData::FIRST_ACTION;
				    echo GameData::CAPTAIN_INPUT_TEXT;
	    		} else {
	    			break;
	    		}
 	    	} else {
	    		echo str_replace('*', $depth, GameData::FINAL_DEPTH);
	    		echo str_replace('*', count($hits), str_replace('**', $damage, GameData::LOSER));

 	    		foreach ($hits as $hit) {
	    			echo str_replace('*', $hit->direction, str_replace('**', $hit->damage, GameData::SUCCESSFUL_ATTACK));
	    		}

	    		echo GameData::PLAY_AGAIN;
	    		
	    		$play_again = trim(fgets(STDIN));
	    		// Check if player wants to play the game again
	    		if ($play_again === 'Yes') {
	    			echo GameData::WELCOME_TEXT;
					echo GameData::CLOSE_GAME_INFO;
					echo GameData::FIRST_ACTION;
				    echo GameData::CAPTAIN_INPUT_TEXT;
	    		} else {
	    			break;
	    		}
	    	}
	    } else {
	    	echo GameData::CAPTAIN_INPUT_TEXT;
	    }
	} while ($play_again != 'No');
?>