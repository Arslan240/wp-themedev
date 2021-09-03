<?php
/*
 * Single page is the page that WordPress is gonna refer to automatically while printing posts
 * */?>

			<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>></article>
			<?php the_title('<h1 class="entry-title">','</h1>') ?>

			<?php if(has_post_thumbnail()): ?>
				<div class="pull-right"><?php the_post_thumbnail('medium');?> </div>
			<?php endif; ?>

			<small> <?php the_category(' ');?> || <?php the_tags(); ?> || <?php edit_post_link(); ?> </small>
			<p><?php the_content(); ?></p>
			<hr>

        <div>
<!--        The next post link is added at the end of the single post page.     -->
            <div> <?php previous_post_link(); ?> </div>
            <div> <?php next_post_link(); ?> </div>
        </div>

<?php
		if(comments_open()){ //if the comments are enabled for a post them default comments template by wordpress will be shown to the user. this form has all the security features to prevent sql inection
		    comments_template();
        }else{
		    echo 'Sorry! Comments are disabled for this post.';
        }
		?>
</article?