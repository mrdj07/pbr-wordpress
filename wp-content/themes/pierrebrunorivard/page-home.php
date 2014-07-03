<?php
/*
Template Name: Home
*/
?>

<?php get_header();
$datesStr = array(
    "months" => array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"),
    "days" => array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi")
);
?>
<div class="global">
	<div class="wrap">
		<div class="content">
			<div class="section-intro">
				<div class="main-title">
					Pierre-Bruno<br>
					<span class="large">Rivard</span>
				</div>

				<div class="navig-wrap">
					<a id="spectacles-m"href="#" class="navig-item">Spectacles</a>
					<a id="videos-m" href="#" class="navig-item">Vidéos</a>
					<a id="nouvelles-m" href="#" class="navig-item">Nouvelles</a>
					<a id="bio-m" href="#" class="navig-item">Bio</a>
					<a id="contact-m" href="#" class="navig-item">Contact</a>
					<div class="clear"></div>
				</div>

                <?php
                $sticky = get_option( 'sticky_posts' );
                $args = array(
                    'category_name'		=> 'videos',
                    'posts_per_page' => 1,
                    'post__in'  => $sticky,
                    'meta_key'		=> 'date',
                    'orderby'		=> 'meta_value_num',
                    'order'			=> 'DESC',
                    'ignore_sticky_posts' => 1
                );
                $the_query = new WP_Query( $args );
                if ( isset($sticky[0]) ) : ?>
                    <?php if ( $the_query->have_posts() ) : $the_query->the_post(); $date = get_field('date')/1000; ?>
                        <div class="main-video">
                            <iframe src="//www.youtube.com/embed/<?php echo get_field('youtube_id'); ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    <?php endif; endif; ?>
                <?php wp_reset_postdata(); ?>
				<div class="down-arrow-circle">
					<div class="down-arrow-icon"></div>
				</div>
			</div>
		</div>

		<div class="section-content spectacles">
			<div class="section-title">Spectacles</div>
			<div class="show-wrap">
                <?php
                $args = array(
                    'category_name'		=> 'shows',
                    'posts_per_page'	=> -1,
                    'meta_key'		=> 'date',
                    'orderby'		=> 'meta_value_num',
                    'order'			=> 'DESC'
                );
                $the_query = new WP_Query( $args ); ?>

                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) :
                        $the_query->the_post();
                        $date = get_field('date')/1000;
                    ?>
                        <div class="show-row">
                            <div class="show-date">
                                <span class="topdate"><?php echo date('d', $date); ?></span>
                                <span class="middate"><?php echo $datesStr['months'][date('n', $date)-1]; ?></span>
                                <span class="botdate"><?php echo date('Y', $date); ?></span>
                            </div>
                            <div class="show-text">
                                <div class="show-text-title"><?php the_title(); ?></div>
                                <div class="show-text-location"><?php the_field('place'); ?> - <?php the_field('time'); ?></div>
                                <a href="<?php the_field('url_ticket'); ?>" class="show-text-link">Info/billeterie</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                <?php else:  ?>
                    <p><?php _e( 'Aucun Spectacle de prévu!' ); ?></p>
                <?php endif; ?>
			</div>
		</div>
		
		<div class="section-content videos">
			<div class="section-title">Vidéos</div>
            <?php
            $sticky = get_option( 'sticky_posts' );
            $args = array(
                'category_name'		=> 'videos',
                'posts_per_page' => 1,
                'post__in'  => $sticky,
                'meta_key'		=> 'date',
                'orderby'		=> 'meta_value_num',
                'order'			=> 'DESC',
                'ignore_sticky_posts' => 1
            );
            $the_query = new WP_Query( $args );
            if ( isset($sticky[0]) ) : ?>
                <?php if ( $the_query->have_posts() ) : $the_query->the_post(); $date = get_field('date')/1000; ?>
                <div class="section-video-wrap">
                    <div class="first-video-wrap">
                        <iframe src="//www.youtube.com/embed/<?php echo get_field('youtube_id'); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="first-video-text">
                        <?php echo the_title(); ?><br>
                        <span><?php echo date('d', $date).' '.$datesStr['months'][date('n', $date)-1].' '.date('Y', $date); ?></span>
                    </div>
                </div>
            <?php endif; endif; ?>
            <?php wp_reset_postdata(); ?>

			<div class="video-grid-wrap">

                <?php
                $args = array(
                    'category_name'		=> 'videos',
                    'posts_per_page'	=> -1,
                    'meta_key'		=> 'date',
                    'orderby'		=> 'meta_value_num',
                    'order'			=> 'DESC',
                );
                $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) :

                $the_query->the_post();
                $date = get_field('date')/1000;
                ?>
                <div class="video-box">
                    <a href="https://www.youtube.com/watch?v=a9YEbc5LXwI<?php echo get_field('youtube_id'); ?>/1.jpg" style="background-image: url('http://img.youtube.com/vi/<?php echo get_field('youtube_id'); ?>/0.jpg');" class="video-grid-node"></a>
                    <div class="video-box-text">
                        <?php the_title(); ?><br>
                        <span><?php echo date('d', $date).' '.$datesStr['months'][date('n', $date)-1].' '.date('Y', $date); ?></span>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php else:  ?>
                <p><?php _e( 'Aucun Vidéo.' ); ?></p>
            <?php endif; ?>
				<div class="clear"></div>
			</div>
		
		<div class="section-content nouvelles">
			<div class="section-title">Nouvelles</div>
			<div id="owlcarousel" class="owl-carousel owl-theme">
				<div class="item news-block">
                    <?php
                    $args = array(
                    'category_name'		=> 'news',
                    'posts_per_page'	=> -1,
                    'orderby'		=> 'date',
                    'order'			=> 'DESC'
                    );
                    $the_query = new WP_Query( $args ); ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) :
                            $the_query->the_post();
                            $date = get_the_time('U');
                            ?>

                            <div class="news-row">
                                <div class="news-title"<?php the_title(); ?><br><span><?php echo date('d/m/Y', $date); ?></span></div>
                                <div class="news-text"><?php the_excerpt(); ?></div>
                                <a href="<?php the_permalink(); ?>" class="news-link">Voir plus »</a>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                    <?php else:  ?>
                        <p><?php _e( 'Aucune Nouvelle' ); ?></p>
                    <?php endif; ?>
				</div>
			</div>
			
		</div>
		
		<div class="section-content bio">
			<div class="section-title">Bio</div>
			<div class="section-text-bio">
            <?php
                $bio = get_post(11, ARRAY_A );
                if (!is_null($bio)) : echo $bio['post_content']; endif;
            ?>
            </div>
		</div>
		
		<div class="section-content contact">
			<div class="section-title">Contact</div>
			<div class="contact-wrap">
                <?php
                $bio = get_post(13, ARRAY_A );
                if (!is_null($bio)) : echo $bio['post_content']; endif;
                ?>
			</div>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>