<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="container">
		<a href="/"><img src="<?= get_stylesheet_directory_uri() . "/images/logo.svg" ?>" /></a>
		<ul>
			<li><a href="#">Corona Updates</a></li>
			<li><a href="#">Politics</a></li>
			<li><a href="#">Business</a></li>
			<li><a href="#">Sports</a></li>
			<li><a href="#">World</a></li>
			<li><a href="#">Travel</a></li>
			<li><a href="#">Podcasts</a></li>
		</ul>
	</div>
</header>
