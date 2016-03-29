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
 
function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? 'Monthly Specials ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
?>
<?php 
		$args = array('showposts'=>'4',  'category_name'=> 'monthly-specials'); 
				$my_query = new WP_Query($args); 
	?> 
	
<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); 
	?> 
				
<h3> 
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> 
   <div class= "widgetpost"><?php the_post_thumbnail('category-thumbnail'); ?> </div></a> 

<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> 
<?php 
$customField = get_post_custom_values("Featured");
if (!empty($customField[0])) {
//Custom field is set, display custom field
echo $customField[0]; 


} else { "";
 }
endwhile;
endif;
?>
</a>

</h3>

<?php
wp_reset_query();
    
  }
 
}

add_action( 'widgets_init', function(){
  register_widget('MonthlyFitnessWidget' );
  });
  
