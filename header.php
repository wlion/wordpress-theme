<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <? language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <? language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <? language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <? language_attributes() ?>><!--<![endif]-->
    <head>
        <meta charset="<? bloginfo( 'charset' ) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title><? wp_title( '|', true, 'right' ) ?></title>
		<meta name="author" content="White Lion Internet Agency">
		<link rel="author" href="http://wlion.com">
		<? wp_head() ?>
    </head>
    <body <? body_class() ?>>
		<div id="page_wrap">
			<header id="page_header">
				<h1 id="page_logo">
					<? if (!is_front_page()): ?>
						<a href="<? bloginfo('url') ?>" title="<? bloginfo('name') ?> - <? bloginfo('description') ?>">
							<? bloginfo('name') ?>
						</a>
					<? else: ?>
						<span>
							<? bloginfo('name') ?>
						</span>
					<? endif; ?>
				</h1>
				<? wp_nav_menu(array(
					'theme_location' => 'main-nav',
					'container'      => 'nav',
					'container_id'   => 'primary_nav'
				)) ?>
			</header>
			<div id="content-wrap">
