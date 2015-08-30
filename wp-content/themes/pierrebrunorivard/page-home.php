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
					<a id="blogue-m" href="#" class="navig-item">Blogue</a>
					<a id="bio-m" href="#" class="navig-item">Bio</a>
					<a id="photos-m" href="#" class="navig-item">Photos</a>
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

		<!-- =============================================== -->
		<!-- SPECTACLES                                      -->
		<!-- =============================================== -->
		<div class="section-content spectacles">
			<div class="section-title">Spectacles</div>
			<div class="show-wrap">
                <?php
                $args = array(
                    'category_name'		=> 'shows',
                    'posts_per_page'	=> -1,
                    'meta_key'		=> 'date',
                    'meta_query' => array(
                        array(
                            'key' => 'date',
                            'value' => strtotime(date("d-m-Y")),
                            'compare' => '>=',
                        )
                    ),
                    'orderby'		=> 'meta_value_num',
                    'order'			=> 'ASC'
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
                                <?php $time = get_field('time'); ?>
                                <div class="show-text-location"><?php the_field('place'); ?><?php if($time == "00:00" || !empty($time)):?> - <?php the_field('time'); ?><?php endif; ?></div>
                                <?php $url = get_field('url_ticket'); ?>
                                <?php if(!empty($url)):?><a href="<?php the_field('url_ticket'); ?>" class="show-text-link">Info/billeterie</a><?php endif; ?>
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
		
		<!-- =============================================== -->
		<!-- VIDEOS                                          -->
		<!-- =============================================== -->
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
                    <a href="https://www.youtube.com/watch?v=<?php echo get_field('youtube_id'); ?>" style="background-image: url('http://img.youtube.com/vi/<?php echo get_field('youtube_id'); ?>/0.jpg');" target="_self" class="video-grid-node"></a>
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
		</div>
		
		<!-- =============================================== -->
		<!-- BLOGUE                                          -->
		<!-- =============================================== -->
		<div class="section-content blogue">
			<div class="section-title">Blogue</div>
			<?php $count = 0 ?>
			<div id="carousel_blog" class="owlcarousel owl-carousel owl-theme">
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
						
						<?php 
							if($count == 0){
								echo '<div class="item news-block">';
							};
						?>
						<div class="news-row">
							<div class="news-title"><?php the_title(); ?>
							<br><span>
							<?php echo date('d/m/Y', $date); ?>
							</span></div>
							<div class="news-text"><?php the_excerpt(); ?></div>
							<a href="<?php the_permalink(); ?>" class="news-link">Voir plus »</a>
						</div>
						<?php $count = $count+1; ?>
						<?php 
							if($count == 2){
								$count = 0;
								echo '</div>';
							};
						?>
						
					<?php endwhile; ?>
					<?php 
						if($count == 1){
							echo '</div>';
						};
					?>
					<?php wp_reset_postdata(); ?>

				<?php else:  ?>
					<p><?php _e( 'Aucune Nouvelle' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
		
		<!-- =============================================== -->
		<!-- BIOGRAPHIE                                      -->
		<!-- =============================================== -->
		<div class="section-content bio">
			<div class="section-title">Bio</div>
			<div class="section-text-bio">
            <?php
                $bio = get_post(11, ARRAY_A );
                if (!is_null($bio)) : echo $bio['post_content']; endif;
            ?>
            </div>
		</div>
		
		<!-- =============================================== -->
		<!-- PHOTOS                                        -->
		<!-- =============================================== -->
		<div class="section-content photos">
			<div class="section-title">Photos</div>
            <div class="gallery-wrap">
            <?php
            $query_images_args = array(
                'post_type' => 'attachment', 'post_mime_type' =>'image', 'post_status' => 'inherit', 'posts_per_page' => -1, 'category_name' => 'galerie',
            );

            $query_images = new WP_Query( $query_images_args );
            $images = array();
            foreach ( $query_images->posts as $image) {
;
                echo '<a href="'.wp_get_attachment_url( $image->ID ).'" data-litebox-group="gallery" class="gallery-item">'.wp_get_attachment_image($image->ID, 'gallery-thumb').'</a>';
            }

            ?>
                <div class="clear"></div>
            </div>
		</div>
		
		<!-- =============================================== -->
		<!-- CONTACT                                         -->
		<!-- =============================================== -->
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