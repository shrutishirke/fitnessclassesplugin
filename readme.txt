===== PhireFitness Gym, Monthly Specials Plugin ====
/*
* Plugin Name: Monthly Specials Plugin
* Theme URI: https://phoenix.sheridanc.on.ca/~ccit3424/
* Description: Monthly Specials Plugin File that displays special events the client has within a month for Client PhireFitness Gym
* Authors/Contributors: Mayank Sharma, Nayab Safdar and Shruti Shirke (MSN Developers)
* Version: 1.0 03/26/2016
* Author URI: https://phoenix.sheridanc.on.ca/~ccit3424/
*/ 

Tags: custom post type, widget, plugin, posts, monthly specials, 

Requires at least: 4.0
Tested up to: 4.4.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

FILES USED IN THIS ASSIGNMENT:
monthlyspecials.php = includes the functions scripts for the shortcode and scripts for the widget
pluginstyle.css = includes the stylesheet for the plugin
pluginassignment = folder name that includes both monthlyspecials.php and pluginstyle.css


== 1. Description ==
The Monthly Specials Plugin is designed to display the specials that a client may have every week within the month. This plugin 
is versatile and can be used to display monthly promotions, coupons, classes and many more options all in a post format where the user can type in
any content along with a featured image for the respective posts in the WP admin panel. In the case of client, PhireFitness Gym, 
the plugin displays the special classes held within every week per month for the gym. The most latest/current special is for week 4, 
which makes week 1 being the special for the most previous week. The client can enter in their posts in the back-end of the WP admin panel
and choose the appropriate publish dates. These posts are pulled from the "monthly-specials" category from WordPress. 

The shortcode appears within the "Additional Features" section of the website. We thought it made sense to link four posts using a 
list format in the Additional Features tab as it is "extra" content for the user to read. These four posts come from the category of 
"features" within the WordPress dashboard. This custom post type only shows a set number of four posts within the "features" category and 
these posts can actually appear in a list format on any page if this code [phirefitness_shortcode] is inserted within the backend of the page where you edit the content.
For the purpose of this assignment, the shortcode is displayed under the Additional Features Page on the PhireFitness website. 

1.1 Benefits of Custom Post Type and Shortcodes
-----------------------------------------------
1.1.1 Custom Post Types Advantages:
	They help in customizing and better organizing your content in an effective manner. This gives users the chance to hide content from 
	default queries and center the customization around specific content. This allows users to choose when to present
	the data to their audience at any time they wish. It increases usability because even a non-coder can use this
	code to input the code in a simpler method rather than having to define all the queries from scratch. For instance no nested pages
	or seperation of pages features are required now thanks to custom post type. Custom post plugins also reduce the need for web developers
	or users to look for third party plugins that can fo exactly what the custom post type can do - this reduces risks of breaking code and
	also unknown vulnerabilities from the third party plugin. Moreover, the custom post type is easy to learn and in terms of design
	non-coders can add meta fields, the postition of objects can be changed or like in our case even link a specific number of posts to the
	site's sidebar as a widget. 
	Read more: http://wpsmith.net/2011/understanding-wordpress-custom-post-types-benefits-and-advantages-of-using-custom-post-types/
	http://www.selfgrowth.com/articles/advantages-of-using-custom-post-types
	
1.1.2 Shortcodes Advantages: 
	Shortcodes are a smaller version of a more complex code. A shortcode has 2 pieces - the code that goes inside the content section of your site
	within the .php file - for instance, functions.php. This code/php function helps the user achieve the functionality that is aimed to be 
	accomplished. The  second script is less than one line bit of code e.g. [shortcode-me] that can be inserted into the
	content section of the post within WP's admin panel. Shortcodes can add media, recent posts, buttons, objects and many other things 
	inside any post or page within WP. Shortcodes are time-saving because any time you need to achieve this specific functionality, 
	the user does not have to write challenging code, they can simply insert the shortcode in their posts/pages. Something I found interesting
	when researching this is that shortcodes give users the chance to enhance content areas such as widgets and sidebars that are not
	generally easy to access and more freedom to build any form of layout for the site. 
	Read more here: http://cyberchimps.com/wordpress-custom-shortcodes/


== 2. Installation == 

2.1 PLUGIN INSTALLATION:
------------------------

The following steps should be followed to install the plugin:

1. Have a stable internet connection prior to installation
2. In your WP admin panel, go to Plugins and click the Add New button 
3. Click Upload and Choose File, then select the plugin's .zip file. Click Install Now.
4. Click Activate under the plugins tab in the WP admin panel. 
5. Go to Appearance in the left hand sidebar of the WP admin panel > then add Monthly Specials Widget from the available widgets section to your sidebar.
6. Check your website to see if the widget appears, a good way to check is if you create a post and a featured image for that post in the WP admin panel
to see it appear on the widget. 
7. Create 4 new posts in WordPress and add them each under a category called "monthly-specials" (you can add this category by clicking on +Add New Category under the Categories section in 
the right hand side menu bar of the admin panel within every post) After you add a category for the first post, it will automatically appear in this categories section,
so all you have to do for the other three posts is click on the small list box next to "monthly-specials" in there so a check mark shows up.
	7.1 Add a featured image for each post ( on the right hand side menu bar all the way at the bottom in the Featured Image section, click set featured image and then either upload a photo
	from your computer or choose the ones already available from your WP installation > click the blue set featured image button
	7.2 Week 4 appears first, followed by week 3, 2 and 1 in the widget. This is because we wanted the user to see the last week of the month first rather than
	see the first week. Choose publish times/days based on this. Within each post under the Publish section in the right hand side
	menu, click on edit the Published on section > here you can choose the day and time of when you want to publish the post. In this example, week 4 is published on the last 
	week of the month, whereas week 1 is published in the first week of the month. 
8. The end result of this procedure should show you a list of only four posts coming from your "monthly-specials" category in the widget along with their respective featured images.
When the user clicks on these images, it should take them directly to the post. 

2.2 SHORTCODE INSTALLATION (HOW TO USE SHORTCODES FOR THIS PLUGIN):
------------------------------------------------------------------
1. Have a stable internet connection prior to installation
2. Create 4 new posts in WordPress (click posts on the right hand side menu bar > click add new) and give them 4 unique titles 
3. Add these four posts each under a category called "features" (you can add this category by clicking on +Add New Category under the Categories section in 
the right hand side menu bar of the admin panel within every post). After you add a category for the first post, it will automatically appear in this categories section,
so all you have to do for the other three posts is click on the small list box next to "features" in there so a check mark shows up.
4. Click the blue Publish button every time you make a new post and click the blue "Update" button every time you make a change to the post.
	4.1 The list of posts that will be displayed on the page at the end of this procedure will be in Ascending order. This means that the most old post will come on top, while
	the newest post will be at the bottom of the list. Based on this, choose publish times/days based on this. Within each post under the Publish section in the right hand side
	menu, click on edit the Published on section > here you can choose the day and time of when you want to publish the post.
5. Create a Page (Pages > Add New) for the purpose of this example, name it Additional Features in the title section.
6. Add this piece of shortcode in the text area of the page in the same edit page section add this = [phirefitness_shortcode]. The reason
this code is being added here because this is the page where the 4 posts that were categorized under "features" will appear live. This is 
the custom post type for the posts within the shortcode. 
7. Click the blue update button to see how the page looks, it should have a list of the four posts with their respective titles in a clickable format. So when the user 
clicks the post, it takes them to it. The benefit of having this is the user now has four posts that are completely different 
from other content on the site, and are specific to the page in this case Additional Features. 


== 3. Definitions of Terms ==

3.1 Plugin: A plugin generates a widget in the case of this Monthly Specials plugin which is generally written in PHP language.
Plugins are designed to enhance the functionality that is present within WordPress through the functions it creates for a website.
Plugins are coded in such a way that users can simply upload them under the plugins section of the WP admin panel and not have to
worry about adding difficult code themselves. 
Read more here: https://codex.wordpress.org/Plugins 

3.2 Widget: Widgets are in the front-end that usually appear within the widgets section under the Appearance tab of WordPress.
Widgets are items that are related to the website's content. For example, a social media widget with clickable icons for a tech savvy blog. 
Essentially, widgets present the data coded in the plugin file to the user in a presentable manner. Widgets give users options
for added functionality to customize the plugin without having to use complex code. For example, adding a title to the widget from the
Widgets section under appearance in WP admin panel, which then appears
on the front-end as well. 

3.3 WordPress Dashboard (WP Dashboard) Admin Panel: This is the backend of WordPress (wp-admin) where you can edit your website. 
It is the very first screen that you see when you log into the admin section of the website. An easy way to remember if you 
forget how to get to the site is add (wp-admin) at the end of your site's url, for example, https://phoenix.sheridanc.on.ca/~ccit3424/wp-admin
The WP Dashboard gives an overview of the posts, pages, comments, and other activity of the site. It is where the user 
can edit posts, approve comments and perform other changes to the site without using any coding such as php or css. If you are 
confused on how to go back to the dashboard after clicking on your site, try clicking on the name of your site that contains the circular
dashboard symbol next to it, in the dropdown menu of this will be a clickable link to the dashboard. 
Read more on the WordPress Dashboard here: https://en.support.wordpress.com/dashboard/

3.4 Posts: Posts are the areas in which a user can create/write content for their site's blog. WP gives users the option
to set a publish time and date along with an organizational tool of categories and tags. Pages tend to have "static" topics about
one thing, whereas posts can be about anything. Posts are more social and can include an area for the user to enable comments.
Read more on posts and pages here: http://www.wpbeginner.com/beginners-guide/what-is-the-difference-between-posts-vs-pages-in-wordpress/ 

3.5 Shortcode: The shortcode is a group of functions that can be used within the body of pages or posts inside WP.
The purpose of the shortcode is to eliminate the need for users to write complex lines of code. Shortcodes can create
objects such as buttons, embed files and do many other things! 
Read more on shortcodes here: https://codex.wordpress.org/Shortcode_API 

3.6 Category: Categories are ways to organize posts within WordPress. Think of them as sections that have posts under them. You
can assign multiple categories for any post, but it needs to have at least one category. Read more here: https://en.support.wordpress.com/posts/categories/

3.7 Featured Image: The featured image is a specific image that is designated to a post, page, and custom post types.

== 4. Frequently Asked Questions ==
4.1 Q: Is there any javascript used to create the plugin? 
	A: No, there is no Java Script used to create the plugin, as we wanted our plugin to be compatible with most sites that do 
	not support jqueries. 
	

== 5. Tips and Tricks of Plugin == 

5.1  What does the word enqueue mean? Is the stylesheet enqueued properly? 
The style sheet is enqueued properly within the monthlyspecials.php file. the reason for
enqueueing helps make sure that styles are placed properly and that their
functionality is the absolute best as compared to simplying linking the style sheet through means of a "href" variable. 
It decreases challenges faced between plugins and themes such as conflicting versions of files, order of scripts and problems such
as the amount of time it takes to load CSS - also decreases chances of having duplicate code.

Read more here: http://code.tutsplus.com/tutorials/loading-css-into-wordpress-the-right-way--cms-20402


== 6. Change Log ==
The most current version of this plugin is version 1.0

== 7. Credits == 
This plugin is created by MSN Developers (Mayank Sharma, Shruti Shirke and Nayab Safdar) with the aid of Laurie Rauch's Lecture slides from CCT460, labs created
for CCT460, the WordPress Codex and other sources that are cited within the files of this plugin. 
