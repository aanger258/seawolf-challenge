# Seawolf Challenge

## Story

You are the Captain of the USS Nautilus, an Ohio class submarine, in service with the United
States Navy. Your approximate location at this time is 42°40'04.4"N 175°35'28.3”W,
somewhere in the northern Pacific Ocean cruising at sea level (0m).
Suddenly, your sonar operator detects 3 enemies submarines coming at you from different
directions. They are all ready to attack you and only your quick thinking can save you, evading
their attack.

## My Solution

In this repository I have created my solution for this challenge.
It contains 4 files (3 classes and 1 main file):

- The _GameData_ class is a config file in which I added all the texts that I use in the app. I also added an array that contains the actions that the player has to choose from when an attack occurs. Thus, more actions can be added in the future.
- The _Helper_ class contains several functions that have the purpose of checking and validating the input data of the player. It also aplies the main game mechanic of inflicting damage if he chooses the wrong option during an attack.
- The _Enemy_ class contains the data regarding the enemies. It has an array of enemies. In this array we have defined the order and the direction from which they attack. So, it will be easy to add more enemies in the future. Also, the damage that they inflict is defined through a setter function that has a switch and sets the damage based on the direction from which the enemyy attacks.
- The _main_ file is the one that must be run to start the game. Here I take the player's input and get him through the game.

## Run the game

The used version of php is 7.4.10

```sh
php main.php
```