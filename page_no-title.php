<?php /**  TEMPLATE NAME : Page NO Title
            */
?>
<?php get_header();?>

<?php
if( have_posts() ):
	while ( have_posts() ):
		the_post();?>

		<p><?php the_content(); ?></p>
		<h2>Title</h2> <br>
		<h1>Psych! there is no title</h1>
		<hr>

	<?php endwhile;
endif;
?>

<?php
get_footer();
?>

