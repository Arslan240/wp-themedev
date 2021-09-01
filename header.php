

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <title>Awesome Theme</title>
        <?php wp_head(); //WP provides us this function, and it calls all the functions (while linking our css files) and alot of other stuff that idk.?>
    </head>

    <?php //is_front_page() detects the page which is home set by us in reading settings of the website. Where as is_home() detects the page which is showing the posts, doesn't matter if it's name is home or blog or whatever.
        if( is_front_page() ):
            $awesome_classes = array( 'awesome-class', 'my-class');
        else:
            $awesome_classes = array();
        endif;
    ?>
<body <?php body_class($awesome_classes); //this body_class() returns the class names which will be added to the body tag and will be shown in page source.?>>

<!--  We create a new hook in the body to print our menu  -->
<?php wp_nav_menu(array('theme_location'=>'primary')); //theme location is just string or title and primary is the name of the menu that we registered earlier using register_nav_menu hook.
// that menu will be printed at the start of every file that have header file.
// we can also use this hook inside a function and hook that function to another hook. That would be preferred if we had a lot of different custom menus.

?>

<!--this is header so this does not have closing tags for the main body.-->
<!--they are declared in the footer.php file-->