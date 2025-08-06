<?php
$get_stylesheet_directory_uri = get_stylesheet_directory_uri() . '/';
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
	<div class="wrapper_global">
		<div class="header_wrapper">
			<div class="logo">
				<img src="<?php echo $get_stylesheet_directory_uri ?>assets/images/icons/logo.svg" alt="logo">
			</div>
			<div class="social">
				<a href="#"><img src="<?php echo $get_stylesheet_directory_uri ?>assets/images/icons/youtube.svg" alt="youtube"></a>
				<a href="#"><img src="<?php echo $get_stylesheet_directory_uri ?>assets/images/icons/vk.svg" alt="vk"></a>
				<a href="#"><img src="<?php echo $get_stylesheet_directory_uri ?>assets/images/icons/facebook.svg" alt="facebook"></a>
				<a href="#"><img src="<?php echo $get_stylesheet_directory_uri ?>assets/images/icons/twitter.svg" alt="twitter"></a>
				<a href="#"><img src="<?php echo $get_stylesheet_directory_uri ?>assets/images/icons/twitch.svg" alt="twitch"></a>
				<a href="#"><img src="<?php echo $get_stylesheet_directory_uri ?>assets/images/icons/instagram.svg" alt="instagram"></a>
			</div>
		</div>
	</div>
</header>

