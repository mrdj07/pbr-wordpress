<?php
/*
Template Name: Posts
*/
?>

<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="global">
	<div class="wrap">
		<div class="post-wrap">
			<div class="post-title"><?php the_title(); ?></div>
			<div class="post-text"><?php the_content(); ?></div>
			<a href="<?php echo get_site_url(); ?>" class="backlink">« Retour</a>
		</div>
	</div>
</div>

<?php 	
endwhile;
endif;
?>
<?php get_footer(); ?>