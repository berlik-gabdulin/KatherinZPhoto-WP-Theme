<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox2/jquery.fancybox.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick-1.5.9/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick-1.5.9/slick/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/<?php
    $options = get_option('sample_theme_options');
    echo $options['selectinput']; ?>.css" />
    <!-- <link rel="stylesheet" href="css/skins/purple.css" /> -->

    <?php wp_head(); ?>

</head>
<body>
<div class="loader">

</div>
<div class="top-mnu">
    <ul>
        <li><a href="#portfolio" class="animated">Портфолио</a></li>
        <li><a href="#about" class="animated">Обо мне</a></li>
        <li><a href="#rezume" class="animated">Резюме</a></li>
        <li><a href="#contact" class="animated">Контакты</a></li>
    </ul>
</div>
<header class="main-head main-color-bg" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="logo-container">
                <?php dynamic_sidebar('logo'); ?>
            </div>
            <button class="toggle-mnu">
					<span class="sandwich">
						<span class="sw-topper"></span>
						<span class="sw-bottom"></span>
						<span class="sw-footer"></span>
					</span>
            </button>
        </div>
    </div>
    <div class="top-wrapper">
        <div class="top-descr">
            <div class="top-centered">
                <div class="top-text">
                    <h1><?php echo get_bloginfo('name'); ?></h1>
                    <p><?php echo get_bloginfo('description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</header>