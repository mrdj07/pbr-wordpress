<?php
/*
Template Name: Posts
*/
?>

	<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
	<div class="header">
		<div class="header-wrap">
			<div class="header-tab"></div>
			<div class="navig-wrap-fixed">
				<a id="spectacles-h" href="/#spectacles" class="navig-item spectacles">Spectacles</a>
				<a id="videos-h" href="/#videos" class="navig-item videos">Vidéos</a>
				<a id="blogue-h" href="/#blogue" class="navig-item blogue">Blogue</a>
				<a id="bio-h" href="/#bio" class="navig-item bio">Bio</a>
				<a id="photos-h" href="/#photos" class="navig-item photos">Photos</a>
				<a id="contact-h" href="/#contact" class="navig-item contact">Contact</a>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>


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