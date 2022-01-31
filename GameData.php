<?php
	class GameData{
		// actions to be randomly selected in the players guessing game
		const ACTIONS = ["float", "dive"];

		// Texts to be shown in the command line regarding the story. They are helpful to guide the player through the game.
		const WELCOME_TEXT = "\e[36mWelcome to Seawolf Challenge Captain!\n";
		const CLOSE_GAME_INFO = "If you want to close the game type the character '\e[31mX\e[0m\e[36m'.\e[0m\n\n";
		const CLOSE_GAME_TEXT = "\e[32mThank you for playing the Seawolf Challenge game!\e[0m";

		const CAPTAIN_INPUT_TEXT = "\e[36mCaptain's input: \e[0m";
		
		const FIRST_ACTION = "We need your first orders \e[36mCaptain\e[0m!\nHow much should we dive?\n(Your input should be of the form '\e[36mdive 100\e[0m')\n\n";
		const CORRECT_FIRST_ACTION =  "Ok \e[36mCaptain\e[0m! We are diving \e[32m***\e[0m meters.\n\n";
		const WRONG_FIRST_ACTION = "Captain we don't know this order! Please give us a correct one!\n (Your input should be of the form '\e[36mdive 100\e[0m')\n";

		const ACTION_DIVE =  "Ok \e[36mCaptain\e[0m! We are diving \e[32m***\e[0m meters.\n\n";
		const ACTION_FLOAT =  "Ok \e[36mCaptain\e[0m! We are floating \e[32m***\e[0m meters.\n\n";
		const WRONG_ACTION = "Captain we don't know this order! Please give us a correct one!\n (Your input should be of the form '\e[36mdive\e[0m' or '\e[36mfloat\e[0m')\n";

		const ATTACK_TEXT = "\e[33mWARNING\e[0m We are under \e[31mattack\e[0m from \e[33m***\e[0m!\nWhat should we do \e[36mCaptain\e[0m!\n(Your input should be of the form '\e[36mdive\e[0m' or '\e[36mfloat\e[0m')\n\n";
		const CORRECT_DECISION = "\e[32mGOOD JOB Captain!\e[0m The attack has been avoided. No damage was taken.\n\n";
		const WRONG_DECISION = "\e[31mWRONG CHOICE Captain!\e[0m The attack from * was successful and we have been hit.\nWe have received an amount of \e[31m**\e[0m points of damage!\n\n";
		const SUCCESSFUL_ATTACK = "The attack from * was successful, inflicting \e[31m**\e[0m points of damage to our submarine.\n";

		const FINAL_DEPTH = "\e[36mCaptain, I think the attacks stopped! Our current depth is \e[0m\e[32m*\e[0m \e[36mmeters!\nWe should now take a look at a report regarding the attacks.\e[0m\n\n";

		const WINNER = "\e[32mCONGRATULATIONS Captain!\e[0m\nWe have avoided all the attacks successfully. We can continue on our course peacefully for now.\n";
		const LOSER = "\e[31mWE ARE IN TROUBLE Captain!\e[0m\nWe have have been hit \e[31m*\e[0m times and we have received a total amount of \e[31m**\e[0m points of damage.\n\n";

		const PLAY_AGAIN = "\n\e[36mWas it fun Captain? Do you want to play again?\e[0m\n(Type '\e[32mYes\e[0m' if you want to continue or any other character if you wish to stop here)\n";
	}
?>