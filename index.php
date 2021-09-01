<?php get_header(); ?>

<?php echo 'this is not working';
    //custom loop for posts. This will apply on all the posts as well as pages idk why.
    if( have_posts() ):
        while( have_posts() ):
            the_post();  // the_post() function is called to access the following the_title and other post related stuff.
            ?>

        <h3><?php the_title(); ?></h3>
        <small>Posted on <?php the_time('F j, Y');?> , <?php the_time('g:i a'); ?> in <?php the_category(); ?></small>
        <p><?php the_content(); ?></p>
        <hr>
<?php
        endwhile;
    endif;
    ?>


<!--inside a theme folder we need index.php file. because wordpress looks for index.php to control or initiate the theme according to standardization.-->

<?php get_footer();?>