<?php

if ( ! defined( 'ABSPATH' ) || empty( $block ) ) {
	exit;
}
if ( GutenbergBlocks::checkForPreview( $block ) ) {
	return;
}

$title      = get_field( 'title' );
$text       = get_field( 'text' );
$image_mini = get_field( 'image_mini' );
$image_bg   = get_field( 'image_bg' );
$form_code  = get_field( 'form_code' );


$anchor_link = AcfBlockParsing::get_blocks_data_from_post( get_the_ID(), 'hero-slider' );
$anchor_id   = $anchor_link['anchor_link']['url'];
?>

<div class="form_section" id="<?php echo str_replace( '#', '', $anchor_id ); ?>">
	<div class="wrapper_global">
		<?php if ( ! empty( $title ) ) { ?>
			<div class="section_title">
				<?php
				DisplayGlobal::renderAcfImage( $image_mini );
				DisplayGlobal::renderTag( $title, 'h2' );
				?>
			</div>
		<?php } ?>

		<?php
		if ( ! empty( $text ) ) {
			echo $text;
		}
		?>

		<div class="form_wrapper">
			<div class="form_box">
				<?php
				if ( ! empty( $form_code ) ) {
					echo do_shortcode( $form_code );
				}
				?>
			</div>
			<?php if ( ! empty( $image_bg ) ) { ?>
				<div class="img_box">
					<?php DisplayGlobal::renderAcfImage( $image_bg ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

