<?php
$get_stylesheet_directory_uri = get_stylesheet_directory_uri() . '/';

$logo     = get_field( 'header_logo', 'option' );
$telegram = get_field( 'telegram', 'option' );
$whatsapp = get_field( 'whatsapp', 'option' );
$viber    = get_field( 'viber', 'option' );
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
				<?php DisplayGlobal::renderAcfImage( $logo ) ?>
			</div>
			<?php
			if(!empty($telegram) || !empty($whatsapp) || !empty($viber)){ ?>
				<div class="social">
					<a href="<?php echo 'https://t.me/'.$telegram['number']?>">
						<?php DisplayGlobal::renderAcfImage( $telegram['image'] ) ?>
					</a>

					<a href="<?php echo 'https://wa.me/'.$whatsapp['number']?>">
						<?php DisplayGlobal::renderAcfImage( $whatsapp['image'] ) ?>
					</a>

					<a href="<?php echo 'viber://chat?number='.$viber['number']?>">
						<?php DisplayGlobal::renderAcfImage( $viber['image'] ) ?>
					</a>


				</div>
			<?php }


			?>

		</div>
	</div>
</header>

