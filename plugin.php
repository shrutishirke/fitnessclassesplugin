<?php

/*
	Plugin Name: Fitness Classes
	Description: This widget displays the classes provided by PhireFitness Gym
	Plugin URI: https://phoenix.sheridanc.on.ca/~ccit3424/
	Author: Mayank Sharma, Nayab Safdar and Shruti Shirke (MSN Developers)
	Author URI:https://phoenix.sheridanc.on.ca/~ccit3424/
	License: GPL2
	Version: 1.0
*/


// Enqueue Stylesheet

function connect_plugin_style(){
	wp_register_style( 'pluginassignment', plugins_url( 'pluginassignment/css/style.css') );
	wp_enqueue_style('pluginassignment');
}
add_action('wp_enqueue_scripts', 'connect_plugin_style' );
