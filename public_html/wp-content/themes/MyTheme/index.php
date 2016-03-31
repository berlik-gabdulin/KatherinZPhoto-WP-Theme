<?php get_header(); ?>
<section id="portfolio" class="s-portfolio bg-dark">
	<div class="section-header">
		<h2>Портфолио</h2>
		<div class="s-descr">Мои последние работы</div>
	</div>
	<div class="section-content container">
		<div class="row">
			<div class="filter-div controls">
				<ul>
					<li class="filter active" data-filter="all">Все работы</li>
					<?php $all_cats = get_categories();
					foreach( $all_cats as $category)
					{ 
						echo '<li class="filter" data-filter=".' . $category->cat_ID . '">' . $category->cat_name . '</li>'
						;} ?>
					</ul>
				</div>
				<div id="portfolio-wrapper">

					<?php if ( have_posts() ) : query_posts('');
					while ( have_posts() ) : the_post(); ?>
					<div class="col-md-3 col-sm-6 col-xs-12 portfolio-item mix <?php foreach(
					( get_the_category() ) as $category)
					{ 
						echo $category->cat_ID;
					}?>
					">
					<?php the_post_thumbnail(array(400, 300)); ?>
					<div class="port-item-cont">
						<div class="port-item-wrap">
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a href="" class="popup-content">Посмотреть</a>
						</div>
					</div>
					<div id="" class="mfp-hide port-descr">
						<h3>Название работы</h3>
						<?php the_content(); ?>

						<div class="slider">
							<?php
								/* The loop */
								
									if ( get_post_gallery() ) :
										$gallery = get_post_gallery( get_the_ID(), false );

										/* Loop through all the image and output them one by one */
										foreach( $gallery['src'] as $src ) : ?>
											<!-- <img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" /> -->
											<a href="<?php echo $src; ?>" class="fancybox-thumb" rel="fancybox-thumb"><img src="<?php echo $src; ?>" alt=""></a>
											<?php
										endforeach;
									endif;
							
							?>


						</div>
					</div>
				</div>
			<? endwhile; endif; wp_reset_query(); ?>



		</div>

	</div>
</div>

</section>
<section id="about" class="s-about bg-light">
	<div class="container">
		<div class="section-header">
			<h2><?php echo get_cat_name(2); ?></h2>
			<div class="s-descr"><?php echo category_description(2); ?></div>
		</div>

		<?php if ( have_posts() ) : query_posts('p=4');
		while (have_posts()) : the_post(); ?>
		<div class="col-md-4 col-sm-12 col-md-push-4 myphoto clearfix">
			<div class="col-md-12 person">
				<h3>Фото</h3>
				<?php if ( has_post_thumbnail() ) : ?>
					<a class="popup" href="<?php
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
					echo $large_image_url[0];
					?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(array(220, 220)); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
	<div class="col-md-4 col-sm-6 col-md-pull-4 aboutme clearfix">
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
	</div>
<?php endwhile; endif; wp_reset_query(); ?>

<div class="col-md-4  col-sm-6 persinfo">

	<?php if ( have_posts() ) : query_posts('p=10');
	while (have_posts()) : the_post(); ?>
	<h3><?php the_title(); ?></h3>
	<h2><?php echo get_bloginfo('name'); ?></h2>

	<?php the_content(); ?>

	<div class="social-wrap">
		<ul>
			<li><a href="#" target="_blank"><i class="fa fa-vk"></i></a></li>
			<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
		</ul>
	</div>
<? endwhile; endif; wp_reset_query(); ?>

</div>
</div>

</section>
<section id="contact" class="s-contact bg-light">
	<div class="section-header">
		<h2>Контакты</h2>
		<div class="s-descr">Оставьте ваше сообщение</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="contact-box">
					<div class="contact-icon icon-basic-geolocalize-05"></div>
					<h3>Адрес:</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="contact-box">
					<div class="contact-icon icon-basic-smartphone"></div>
					<h3>Телефон:</h3>
					<p>+7 777 777 77 77</p>
				</div>
				<div class="contact-box">
					<div class="contact-icon icon-basic-webpage-img-txt"></div>
					<h3>Веб-сайт:</h3>
					<p><a href="#" target="_blank">http://mywebsite.com</a></p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<form action="http://formspree.io/atiguy@mail.ru" method="POST" class="main-form" novalidate targer="_blank"/>
				<label class="form-group">
					<span class="color-element">*</span>Ваше имя:
					<input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" required />
					<p class="help-block text-danger"></p>
				</label>
				<label class="form-group">
					<span class="color-element">*</span>Ваш E-mail:
					<input type="email" name="email" placeholder="Ваш E-mail" data-validation-required-message="Не корректно введен E-mail" required />
					<p class="help-block text-danger"></p>
				</label>
				<label class="form-group">
					<span class="color-element">*</span>Ваш E-mail:
					<textarea type="text" name="message" placeholder="Ваш E-mail" data-validation-required-message="Вы не ввели сообщение" required /></textarea>
					<p class="help-block text-danger"></p>
				</label>

				<button>Отправить</button>
			</form>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>