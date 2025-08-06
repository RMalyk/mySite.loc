<?php

if (!defined('ABSPATH') || empty($block)) exit;
if (GutenbergBlocks::checkForPreview($block)) return;

$title         = get_field('title');
$text          = get_field('text');
$image_preview = get_field('image_preview');
?>

<div class="portfolio_section">
	<div class="wrapper_global">
		<div class="description">
            <?php
            DisplayGlobal::renderTag($title, 'h2');
            DisplayGlobal::renderTag($text);
            ?>
		</div>
        <?php
        if (!empty($image_preview)){ ?>
        <?php
        foreach ($image_preview as $item) {
            $image_small_1  = $item['portfolio']['image_small_1'];
            $image_small_2  = $item['portfolio']['image_small_2'];
            $image_large    = $item['portfolio']['image_large'];
            $image_position = $item['portfolio']['image_position'];
            $custom_class   = (!empty($image_position) && $image_position === 'left') ? 'mirror' : '';
            ?>
			<div class="portfolio_section_grid <?php echo $custom_class ?>">
                <?php
                DisplayGlobal::renderAcfImage($image_small_1);
                DisplayGlobal::renderAcfImage($image_small_2);
                DisplayGlobal::renderAcfImage($image_large);
                ?>
			</div>
        <?php } ?>
	</div>
    <?php } ?>
</div>
