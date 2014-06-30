<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post();?>
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
				
				<div class="main-video">
					<iframe width="640" height="360" src="//www.youtube.com/embed/PPxMOYzbnQk" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="down-arrow-circle">
					<div class="down-arrow-icon"></div>
				</div>
			</div>
		</div>
		
		<div class="section-content spectacles">
			<div class="section-title">Spectacles</div>
			<div class="show-wrap">
				<div class="show-row">
					<div class="show-date">
						<span class="topdate">19</span>
						<span class="middate">Juin</span>
						<span class="botdate">2014</span>
						</div>
					<div class="show-text">
						<div class="show-text-title">Animation - les lundis du club extra humour</div>
						<div class="show-text-location">le club dix 30, brossard - 20:00</div>
						<a href="#" class="show-text-link">Info/billeterie</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="show-row">
					<div class="show-date">
						<span class="topdate">30</span>
						<span class="middate">Septembre</span>
						<span class="botdate">2014</span>
						</div>
					<div class="show-text">
						<div class="show-text-title">Animation - les lundis du club extra humour</div>
						<div class="show-text-location">le club dix 30, brossard - 20:00</div>
						<a href="#" class="show-text-link">Info/billeterie</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="show-row">
					<div class="show-date">
						<span class="topdate">4</span>
						<span class="middate">Février</span>
						<span class="botdate">2015</span>
						</div>
					<div class="show-text">
						<div class="show-text-title">Animation - les lundis du club extra humour</div>
						<div class="show-text-location">le club dix 30, brossard - 20:00</div>
						<a href="#" class="show-text-link">Info/billeterie</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="show-row">
					<div class="show-date">
						<span class="topdate">11</span>
						<span class="middate">Mars</span>
						<span class="botdate">2015</span>
						</div>
					<div class="show-text">
						<div class="show-text-title">Animation - les lundis du club extra humour</div>
						<div class="show-text-location">le club dix 30, brossard - 20:00</div>
						<a href="#" class="show-text-link">Info/billeterie</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		
		<div class="section-content videos">
			<div class="section-title">Vidéos</div>
			<div class="section-video-wrap">
				<div class="first-video-wrap">
					<iframe src="//www.youtube.com/embed/PPxMOYzbnQk" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="first-video-text">
					REEL<br>
					<span>22 Mars 2014</span>
				</div>
			</div>
			<div class="video-grid-wrap">
				<div class="video-box">
					<a href="#" class="video-grid-node"></a>
					<div class="video-box-text">
					Reel<br>
					<span>22 Mars 2014</span>
					</div>
				</div>
				<div class="video-box">
					<a href="#" class="video-grid-node"></a>
					<div class="video-box-text">
					Reel<br>
					<span>22 Mars 2014</span>
					</div>
				</div>
				<div class="video-box">
					<a href="#" class="video-grid-node"></a>
					<div class="video-box-text">
					Reel<br>
					<span>22 Mars 2014</span>
					</div>
				</div>
				<div class="video-box">
					<a href="#" class="video-grid-node"></a>
					<div class="video-box-text">
					Reel<br>
					<span>22 Mars 2014</span>
					</div>
				</div>
				<div class="video-box">
					<a href="#" class="video-grid-node"></a>
					<div class="video-box-text">
					Reel<br>
					<span>22 Mars 2014</span>
					</div>
				</div>
				<div class="video-box">
					<a href="#" class="video-grid-node"></a>
					<div class="video-box-text">
					Reel<br>
					<span>22 Mars 2014</span>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		
		<div class="section-content nouvelles">
			<div class="section-title">Nouvelles</div>
			<div id="owlcarousel" class="owl-carousel owl-theme">
				<div class="item news-block">
					<div class="news-row">
						<div class="news-title">Titre de la nouvelle<br><span>Date de la nouvelle</span></div>
						<div class="news-text">Dès sa sortie de l’École Nationale de l’humour en 2010, Pierre-Bruno a démarré sa carrière en flèche et n’a pas ralenti depius.  Il laisse sa trace en tant que finaliste à l’émission En route vers mon premier gala Juste pour rire 2011, sur les galas Juste pour Rire et Grand Rire.</div>
						<a href="#" class="news-link">Voir plus »</a>
					</div>
					<div class="news-row">
						<div class="news-title">Titre de la nouvelle<br><span>Date de la nouvelle</span></div>
						<div class="news-text">Dès sa sortie de l’École Nationale de l’humour en 2010, Pierre-Bruno a démarré sa carrière en flèche et n’a pas ralenti depius.  Il laisse sa trace en tant que finaliste à l’émission En route vers mon premier gala Juste pour rire 2011, sur les galas Juste pour Rire et Grand Rire.</div>
						<a href="#" class="news-link">Voir plus »</a>
					</div>
				</div>
				<div class="item news-block">
					<div class="news-row">
						<div class="news-title">Titre de la nouvelle<br><span>Date de la nouvelle</span></div>
						<div class="news-text">Dès sa sortie de l’École Nationale de l’humour en 2010, Pierre-Bruno a démarré sa carrière en flèche et n’a pas ralenti depius.  Il laisse sa trace en tant que finaliste à l’émission En route vers mon premier gala Juste pour rire 2011, sur les galas Juste pour Rire et Grand Rire.</div>
						<a href="#" class="news-link">Voir plus »</a>
					</div>
					<div class="news-row">
						<div class="news-title">Titre de la nouvelle<br><span>Date de la nouvelle</span></div>
						<div class="news-text">Dès sa sortie de l’École Nationale de l’humour en 2010, Pierre-Bruno a démarré sa carrière en flèche et n’a pas ralenti depius.  Il laisse sa trace en tant que finaliste à l’émission En route vers mon premier gala Juste pour rire 2011, sur les galas Juste pour Rire et Grand Rire.</div>
						<a href="#" class="news-link">Voir plus »</a>
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="section-content bio">
			<div class="section-title">Bio</div>
			<div class="section-text-bio">
			Dès sa sortie de l’École Nationale de l’humour en 2010, Pierre-Bruno a démarré sa carrière en flèche et n’a pas ralenti depius.  Il laisse sa trace en tant que finaliste à l’émission En route vers mon premier gala Juste pour rire 2011, sur les galas Juste pour Rire et Grand Rire. En 3 ans il cumule plusieurs apparitions à la télévision, entre autre aux Mercredis JPR et au Grand Rire Comédie Club. Il s’illustre aussi beaucoup hors du Québec, qu’il s’agisse d’une tournée Canadienne l’amenant du Nouveau-Brunswick jusqu’en Colombie Britannique dans le cadre des Rendez-vous de la Francophonie ou des passages remarqués en Belgique et en France.
			<br><br>
			La qualité de son écriture se ressent sur scène et charme plusieurs humoristes qui font appel à lui, dont Maxim Martin, Rachid Badouri, Sylvain Laroque et Anne Roumanoff. Il est d’ailleurs récipiendaire d’un Olivier dans la catégorie « Textes de l’année » pour le dernier spectacle de Maxim Martin. Il signe aussi l’écriture de galas Juste pour Rire et Grand Rire et prête sa plume à des émissions telles queFiston sur msn.ca, Brassard en direct, Et si à Vtélé et C’est la Crise, avec Anne Roumanoff et Martin Matte, à Canal +, et plusieurs autres.
			<br><br>
			On pourra apprécier son côté versatile à l’automne 2014 comme comédien maison dans l’émission Arrange toi avec ça, animé par Stéphane Bellavance.
			</div>
		</div>
		
		<div class="section-content contact">
			<div class="section-title">Contact</div>
			<div class="contact-wrap">
				<span class="contact-title">François Simard</span><br>
				<span class="contact-number">514 849-8955 #22</span><br>
				<a href="mailto:fsimard@hahaha.com" class="contact-link">FSIMARD@HAHAHA.COM</a>
			</div>
		</div>
		
	</div>
</div>
<?php 	
	endwhile;
	endif;
?>
<?php get_footer(); ?>