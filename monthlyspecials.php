<?php
/*
Plugin Name: Monthly Fitness Widget
Plugin URI: http://www.phoenix.sheridanc.on.ca/~ccit3424/
Description: This widget displays the monthly specials divided by the week offered through PhireFitness. 
Author: Nayab Safdar, Mayank Sharma, Shruti Shirke (MSN Developers)
Version: 1.0 
Author URI: http://phoenix.sheridanc.on.ca/~ccit3424
*/


class MonthlyFitnessWidget extends WP_Widget
{
  function MonthlyFitnessWidget()
  {
    $widget_ops = array(
      'classname' => 'MonthlyFitnessWidget', 
      'description' => __( 'Displays the monthly specials divided by the week.', 'msndevelopers')
       );


    $this->WP_Widget('msndevelopers', 'Monthly Fitness Specials', $widget_ops);
  }
 
