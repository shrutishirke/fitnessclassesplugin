<?php

/*
	Plugin Name: Fitness Classes
	Description: This widget displays the classes provided by PhireFitness Gym
	Plugin URI: https://phoenix.sheridanc.on.ca/~ccit3424/
	Author: Mayank Sharma, Shruti Shirke and Nayab Safdar (MSN Developers)
	Author URI:https://phoenix.sheridanc.on.ca/~ccit3424/
	License: GPL2
	Version: 1.0
*/


// Create the Widget

class Fitnessclasses_Widget extends WP_Widget {
	
	// Initialize the Widget
	public function __construct() {
		$widget_ops = array('classname' => 'fitnessclasses_widget', 'description' => __( 'A display of your available classes') );
		// Adds a display of available classes to the wdiget page. It also gives a brief description in the backend of the WP dashboard.
		parent::__construct('fitnessclasses_widget', __('Weekly Classes', 'msndevelopers'), $widget_ops);
	}
