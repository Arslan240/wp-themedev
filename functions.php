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
