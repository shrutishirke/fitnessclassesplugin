<?php
/*
Plugin Name: Monthly Specials 
Plugin URI: http://www.phoenix.sheridanc.on.ca/~ccit3424/
Description: This widget displays the monthly specials divided by the week offered through PhireFitness. 
Author: Nayab Safdar, Mayank Sharma, Shruti Shirke (MSN Developers)
Version: 1.0 
Author URI: http://phoenix.sheridanc.on.ca/~ccit3424
*/

/*References: 
*http://www.makeuseof.com/tag/how-to-create-wordpress-widgets/
 https://developer.wordpress.org/reference/functions/get_permalink/
 https://wordpress.org/support/topic/how-to-link-post-in-custom-field-loop-help
 https://codex.wordpress.org/Function_Reference/wp_parse_args
 Lecture slides from Widget Lecture 
 */

/* Altered stylesheet based on Code Diva Lecture Slides. The following function enqueues the stylesheet. 
Enqueueing ensures that styles are placed properly and that their functionality is the absolute best as compared to simplying linking the style sheet through means of a "href" variable. It decreases challenges faced between plugins and themes such as conflicting versions of files, order of scripts and problems such as the amount of time it takes to load CSS - also decreases chances of having duplicate code. Source for code below:
https://codex.wordpress.org/Function_Reference/wp_register_style */
function connect_widget_style(){
	wp_register_style( 'pluginassignment', plugins_url( 'pluginassignment/pluginstyle.css') );
	wp_enqueue_style('pluginassignment');
}
add_action('wp_enqueue_scripts', 'connect_widget_style' );

/* the add_action hook demands WordPress to add more functionality at a specific point in the processing of a page. This code is 
essentially called a "hook" because it allows users to "hang" their code on these hooks. Action hooks are meant to "do" or perform 
a task. In this case the action hook calls the style and scripts related to the plugin within the pluginassignment folder 
and makes the files thin this path connect to the css folder and then pluginstyle.css. Which then enqueues the style to the whole
assignment folder and eventually registers the widget's style. Read more: 
http://docs.presscustomizr.com/article/26-wordpress-actions-filters-and-hooks-a-guide-for-non-developers */

//Source Code for creating widget: http://annakolm.pl/828/how-make-wordpress-widget/
class MonthlyFitnessWidget extends WP_Widget //This "extends" the widgets present in WordPress'  by including the Monthly Fitness Widget in that list
{
  function MonthlyFitnessWidget() //This function sets up the widget in the backend in terms of using arrays to give it labels for name and description
  {
    $widget_ops = array( //Here, the array assigns labels
      'classname' => 'MonthlyFitnessWidget', //The widget is now given a name of "Monthly Fitness Widget"
      'description' => __( 'Displays the monthly specials divided by the week.', 'msndevelopers') /* The widget is given
      a one line brief description along with the authors name. This shows up in the widgets area of the WP admin panel
      where users can choose widgets based on what their content requires. The description provides users a general idea
      of what the widget is aimed to do. */
       );


    $this->WP_Widget('msndevelopers', 'Monthly Fitness Specials', $widget_ops);  /* This statement "defines" the widget. */
  }
 
function form($instance) /* This form function script is responsible for the way in which the widget will appear in the admin panel after inserting
  it within the siderbar. The array below with the $instance variable gives the title a label and allows the user to enter text in a textbox to display that as a title on the widget. The form is also known as an input box. */
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) ); /* In this title input field, here the array states that if the user does not enter any value inside the textbox, the title section will be blank */
    $title = $instance['title'];
     /* This code below within the paragraph enclosing tag defines the label given to the title, gives it an input class 
    (which is where the user can type in their title) and a field ID as well as a field name to appear in the admin panel
    of the widget. Source code: http://code.tutsplus.com/articles/building-custom-wordpress-widgets--wp-25241 */
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance) /* The function update script ensures that data that the user enters in the form
  from the admin panel will be updated and saved. Source code: http://annakolm.pl/828/how-make-wordpress-widget/ */
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance) /* This section is what will be displayed to the user in the webpage. It allows us to push arguments 
  from any WP theme, which in this case is the title. Following this, the $instance variable is pushed to the theme, which is related 
  with the class of the function widget (). Source: http://code.tutsplus.com/articles/building-custom-wordpress-widgets--wp-25241.
   */
  {
    extract($args, EXTR_SKIP);  /* Here extract is used to pull the values from the argument ($args)
    as values need to be present locally. In other words, collisions such as those for numeric keys or those that are not valid
    are treated by extraction flags. the EXTR_SKIP is an extraction flag that tells the code, if there happens to be 
    a collision, the exisiting variable should not be overwrited. Source: http://php.net/manual/en/function.extract.php */
 
 
    echo $before_widget; /* This displays the widget's title. This echo script is extreamly important because it ensures that the widget
    has the same styles from the theme being used applied to the widget in the sidebar for the title. */
    $title = empty($instance['title']) ? 'Monthly Specials ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
?>
<?php 
/* The array below helps us to achieve the custom post type functionality by specifing within the variable of showposts that only 4
must be displayed. Moreover, in that same argument, it states that these four posts must only come from the category of monthly-specials
This is essentially setting/defining the taxnomony of the posts that will appear within the widget. Source code: 
https://codex.wordpress.org/Class_Reference/WP_Query */
	$args = array('showposts'=>'4',  'category_name'=> 'monthly-specials'); 
				$my_query = new WP_Query($args); 
	?> 
	
<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); 
/* The if and while loop above states that if there are recent posts identified within the category defined inside the array above, 
get them, save them and display them. */
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

//PhireFitness Shortcode
/*References
http://stackoverflow.com/questions/27424064/wp-shortcode-to-query-custom-post-type-and-display-according-to-custom-meta-va
http://php.net/manual/en/function.ob-get-clean.php
http://code.tutsplus.com/tutorials/create-a-shortcode-to-list-posts-with-multiple-parameters--wp-32199
Lecture on Shortcodes by CCT460
*/

add_shortcode('phirefitness_shortcode', 'custom_post_type_shortcode');
  
function custom_post_type_shortcode() {
	$args = array( 
	'showposts' => '4',
	'category_name' => 'features',
	'order' => 'ASC'
	
	); 
	$string = '';
	$query = new WP_Query($args);
	if ( $query->have_posts() ) { ?>
        <ul class="Post">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    <?php $shortcodebuffer = ob_get_clean();
    return $shortcodebuffer;
    }
}  
