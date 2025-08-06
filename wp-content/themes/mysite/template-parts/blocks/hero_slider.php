<?php

if (!defined('ABSPATH') || empty($block)) exit;
if (GutenbergBlocks::checkForPreview($block)) return;

$check_slider = get_field('check_slider');
if( empty( $check_slider ) ) return;

if (!empty($check_slider && $check_slider == 'slider')) {
    $images = get_field('images');
} else {
    $images = get_field('image');
}

$title = get_field( 'title' );
$anchor_link = get_field( 'anchor_link' );

?>

<div class="hero_section">
    <?php
    if (!empty($images)) { ?>
		<div class="bg_slider">
            <?php
            foreach ($images as $image) {
                $image = $image['image'];
                ?>
				<img src="<?php echo $image ?>" alt="img-1">
            <?php } ?>
		</div>
    <?php } ?>

	<div class="wrapper_global">
		<div class="accent_block">
			<?php
			DisplayGlobal::renderTag($title,'h1');
DisplayGlobal::renderAcfLink($anchor_link);
			?>
<!--			<h1>Доступно на всех платформах</h1>-->
<!--			<button>Узнать больше</button>-->
		</div>
	</div>
</div>