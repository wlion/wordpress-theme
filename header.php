<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ) ?></title>
		<meta name="author" content="White Lion Internet Agency">
		<link rel="author" href="http://wlion.com">
		<?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
		<div id="page_wrap">
			<header id="page_header">
				<h1 id="page_logo">
					<?php if (!is_front_page()): ?>
						<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>">
							<?php bloginfo('name') ?>
						</a>
					<?php else: ?>
						<span>
							<?php bloginfo('name') ?>
						</span>
					<?php endif; ?>
				</h1>
				<?php wp_nav_menu(array(
					'theme_location' => 'main-nav',
					'container'      => 'nav',
					'container_id'   => 'primary_nav'
				)) ?>
			</header>
			<div id="content-wrap">
