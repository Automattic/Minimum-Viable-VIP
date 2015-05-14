<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); /* required */ ?>
	</head>
	<body <?php body_class(); ?>>

		<h1>404</h1>

		<span class="vipfooter"><?php echo vip_powered_wpcom(); /* required */ ?></span>
		<?php wp_footer(); /* required */ ?>
	</body>
</html>
