<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); /* required */ ?>
	</head>
	<body <?php body_class(); ?>>

		<p>404</p>

		<?php echo vip_powered_wpcom(); /* required */ ?>
		<?php wp_footer(); /* required */ ?>
	</body>
</html>
