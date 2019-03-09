<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#topnav" aria-controls="topnav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#"><?php $blog_title = get_bloginfo();echo $blog_title ?></a>
			<div class="navbar-collapse justify-content-md-center collapse" id="topnav" style="">
				<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
					'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
					'container'=> false, // обертка списка, тут не нужна
					'menu_id' => 'top-nav-ul', // id для ul
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'menu_class' => 'navbar-nav', // класс для ul
					'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false
				);
					wp_nav_menu($args); // выводим верхнее меню
				?>
			</div>
		</nav>

	</header>