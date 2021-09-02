<?php

/*for about me page.*/
get_header(); ?>

<?php echo 'this is not working';
//custom loop for posts. This will apply on all the posts as well as pages idk why.
if( have_posts() ):
	while( have_posts() ):
		the_post();  // the_post() function is called to access the following the_title and other post related stuff.
		?>

		<p><?php the_content(); ?></p>
		<h3><?php the_title(); ?></h3>
		<hr>
	<?php
	endwhile;
endif;
?>

<?php get_footer(); ?>
