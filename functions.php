<?php

//functions.php  file runs before our site is actually loaded. So if we want to perform functions before we can include those functions in this file.
// this file should always be in the root directory of the theme folder.
// we should not include our css in style.css file in root directory, but instead we should use another file for that. In this case the css is not detected by WP automatically we have to enqueue it.

// For that purpose we're going to declare a function and then use a hook to hook that function to a specific moment like the moment when all the styling or scripts are loaded, we need to call this function.

	function awesome_script_enqueue(){
	    wp_enqueue_style('customstyle',get_template_directory_uri().'/css/awesome.css',array(),
		                filemtime(get_template_directory() . '/css/awesome.css'),'all');

	    //this
	    wp_enqueue_script('customjs',get_template_directory_uri().'/js/javascript.js',array(),
		                filemtime(get_template_directory() . '/js/javascript.js'),true);
	}

	//in the following we have hook name and then the function name that we want to attach to the action.
//ACTIONS are hooks that are launched by WP at specific moments, as a developer we attach our custom functions to these hooks and then
//our functions are called when these actions take place.

	add_action('wp_enqueue_scripts','awesome_script_enqueue');

	//we also have do_action(), we pass it the hookname and the additional arguments or parameters that our custom function needs. This function works with add_action() and from there the arguments are passed to the function.

/** TODO ADDING HOOK TO ENABLE MENU FUNCTION IN OUR THEME */


	function awesome_theme_setup(){
		add_theme_support('menus'); //this is the hook which enables the menu option in the wordpress theme. but we will add it in the function
		//we are enabling menu so...

		//we also need to  enable wp theme to have a menu by default which will add all the previous pages to it. To do that we use another hook
		register_nav_menu('primary','Primary Header Navigation'); //we'll use this menu in header file so it will be displayed in all the pages.
//
		register_nav_menu('secondary','Footer Navigation'); //adding another menu to use for footer links and stuff. we'll use this menu in the footer.php file.
	}

	add_action('init','awesome_theme_setup'); //hook is init, and function is awesome_theme_setup(). //init means this function will be called on initialization.

