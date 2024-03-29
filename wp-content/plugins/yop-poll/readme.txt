=== YOP Poll ===
Contributors: yourownprogrammer
Donate Link: http://www.yourownprogrammer.com/thankyou/donation.html
Tags: poll, polls, vote, survey, polling, yop poll, yop
Requires at least: 3.3
Tested up to: 3.5
Stable tag: trunk
License: GPLv2 or later

Use a full option polling functionality to get the answers you need.           

YOP Poll is the perfect, easy to use poll plugin for your WordPress site.


== Description ==

YOP Poll plugin allows you to easily integrate a survey in your blog post/page and to manage the polls from within your WordPress dashboard but if offers so much more than other similar products.  Simply put, it doesn't lose sight of your needs and ensures that no detail is left unaccounted for. 

To name just a few improvements, you can create polls to include both single or multiple answers, work with a wide variety of options and settings to decide how you wish to sort your poll information, how to manage the results, what details to display and what to keep private, whether you want to view the total votes or the total voters, to set vote permissions or block voters etc. 

Scheduling your polls is no longer a problem. YOP Poll can simultaneously run multiple surveys (no limit included) or you can schedule your polls to start one after another. Also, keeping track of your polls is easy, you have various sorting functions and you can access older versions at any time.

Designed to intuitive and easy to use, this plugin allows shortcodes and includes a widget functionality that fits perfectly with your WordPress website. For more details on the included features, please refer to the description below.

Current poll features:     

   *  Create/ Edit / Clone/Delete poll - allows you to create or intervene in your survey at any time, if you consider it necessary.   
   
   *  Poll scheduling:  programs each poll to start/end on a certain date. You can simultaneously run multiple polls you can use this option to schedule your polls one after another.    
   
   *  Display polls: you can choose to display one or more polls on your website by simply adding the corresponding poll ID. You can also decide for a random display of your active polls.    
   
   *  View all polls: lists all your polls that you can sort by number of votes or voters, by question or by date and includes a search option.     

   *  Poll answers - allows other answers, multiple answers and includes a sorting module by various criteria: in exact order, in alphabetical order, by number of votes, ascending, descending etc.   

   *  Poll results - offers a great flexibility when displaying the results: before/after vote, after poll's end date, on a custom date or never. The results can also be displayed by vote numbers, percentages or both. You can choose to include a view results link, view number of votes or number of voters.   

   *  Add new custom fields - is a complex option that you can use to ask for additional information from your voters, information that you can then download and use for.   

   *  Reset stats - proves useful when you wish to restart a poll.   

   *  Vote permissions: - limits the voting accessibility to guests, registered users or both, or blocks user access by cookie, IP and username.   

   *  Archive options - allows the users of the website to access former polls statistics. You can choose which polls to display according to their start/end date.   

   *  Edit/delete/clone templates - allows you to customize the poll using either the html or the visual modes. You can also customize the result bar.   

   *  Display Options - displays answers and results tabulated, vertically or horizontally.   

   *  Logs and bans - user logs and bans can be seen in the admin section. You can ban users by email, username and IP and you can set the limitation preferences for all your polls or for just one of them.   

   *  Edit access to YOP Poll for administrators, editors, authors.   

   *  Use custom animations when voting and viewing results.   

   *  Option to use html tags for answers.   


== Installation ==

1. Upload 'plugin-name.php' to the '/wp-content/plugins/' directory,
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

This plugin was especially designed for flexibility and it is very easy to use. We don't expect you to encounter serious issues, but we included a list with some logical questions that you may find useful.

1.  How can I create a poll?        

	*  Go to your YOP Poll menu and select the "Add New Yop Poll" option.    

	*  Fill the required information according to the examples we included: name, question, answers (add additional ones if you need), select the start/end date for your poll, and decide on the advanced settings for results, votes, voters, accessibility etc.   

	*  Once you decided on all your poll details, click on "Save".   

	*  To view your new poll access "All YOP Polls" from your main menu and choose the corresponding entry from the list.   


2.  How can I link a poll to my webpage?     

	*  Find out the ID assigned to poll by accessing "All YOP Polls".   
	   Locate your poll and notice the ID on the left, before the name section.   

	*  Copy the following shortcode and paste it in your page: [yop_poll id="ID"]   
           For instance, if the poll you want to display has the ID=15 the code will be: [yop_poll id="15"].   

	*  This is it. Check your page or post now.   


3.  Do you have some predefined shortcodes that I can use?    

	Yes.       

	Current Active Poll ID = -1:   [yop_poll id="-1"]      

	Latest Poll id = -2:           [yop_poll id="-2"]      

	Random Poll id = -3:           [yop_poll id="-3"]     
	

4.  Can I have more than one poll active?      

	Yes, you can run multiple polls at the same time or you can schedule them to begin one after another using the "Select start/end date" option.       


5.  Can I ask for additional information from my voters?       

	Yes, you can customize your poll to request additional information. Eg. name, email, age, profession. To include this, when you create your poll using the "Add New Yop Poll" form, go to "Custom Text Fields" -> "Add new custom field" and include as many requests as you need.   


6.  How can I create/modify a template?      

	*  Access the "YOP Poll Templates" menu.     
	
	*  If you want to create a new template use the "Add new" option and include the corresponding HTML/visual code.    

	*  If you want to modify an existing template, select it from the YOP Poll Templates list and choose "Edit". You will access the HTML/visual code you want to edit.     


7.  How do I check the results?      

	*  Locate the poll you want to evaluate by accessing "All YOP Polls".     
	
	*  Below the name of the poll you have several options.       

	*  Use the "Results" link to track the results of the poll,      

	*  or access the "Logs" for a more detailed evaluation. 


8.  What is the difference between YOP Poll Options and Poll Options for each poll?      

	*  YOP Poll Options (located under plugin menu) is the way to specifify general settings for all your polls.     
	
	*  If you want to go further and customize each poll, these settings will take precedence over YOP Poll Options settings.         


9.  How can I edit access to YOP Poll for administrators, editors, authors?      

	*  To do this, in your wordpress go to Plugins->Editor.     
	
	*  On the right choose Yop Poll as the plugin to be edited.

	*  The file you need to edit is yop-poll/inc/admin.php.

	*  The file you need to edit is yop-poll/inc/admin.php.

	*  Once you open the file, do a search for function current_user_can.

	*  In that function you can find the options you need to edit.


== Screenshots ==


1. Add New YOP Poll
2. YOP Poll Templates
3. View All YOP Polls
4. YOP Poll as a widget with a custom field defined
5. YOP Poll on a page with a custom field defined


== Changelog ==

= 4.1 =

* Fixed js issue causing the widget poll not to work

= 4.0 =

* Added ability to use custom loading animation. 
* Added capabilities and roles
* Fixed issue with update overwritting settings

= 3.9 = 

* Fixed display issue with IE7 and IE8

= 3.8 = 

* Fixed compatibility issue with Restore jQuery plugin
* Added ability to link poll answers

= 3.7 = 

* Fixed issue with Loading text displayed above the polls
* Fixed issue with deleting answers from polls

= 3.6 = 

* Fixed issue with missing files

= 3.5 = 

* Added french language pack
* Added loading animation when vote button is clicked
* Fixed issue with characters encoding

= 3.4 = 

* Fixed issue with menu items in admin area
* Fixed issue with language packs

= 3.3 = 

* Added option to auto generate a page when a poll is created
* Fixed compatibility issues with IE
* Fixed issues with custom fields

= 3.2 = 
* Fixed bug that was causing issues with TinyMCE Editor

= 3.1 = 
* Various bugs fixed

= 3.0 = 
* Added export ability for logs
* Added date filter option for logs
* Added option to view logs grouped by vote or by answer
* Various bugs fixed

= 2.0 = 
* Fixed various bugs with templates

= 1.9 = 
* Fixed various bugs with templates

= 1.8 = 
* Fixed bug with wordpress editor

= 1.7 = 
* Fixed bug that was causing poll not to update it's settings

= 1.6 = 
* Added ability to change the text for Vote button   
* Added ability to display the answers for Others field

= 1.5 = 
* Fixed sort_answers_by_votes_asc_callback() bug

= 1.4 = 
* Fixed compatibility issues with other plugins

= 1.3 = 
* Fixed bug that was causing widgets text not to display

= 1.2 =  
* Fixed do_shortcode() with missing argument bug

= 1.1 =   
* Fixed call_user_func_array() bug   



== Donations ==  

We've given a lot of thought to make this application one of the best ones available and we continue to invest our time and effort perfecting it. If you want to support our work, please consider making a donation.