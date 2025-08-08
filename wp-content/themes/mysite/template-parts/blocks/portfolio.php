<?php

if ( ! defined('ABSPATH') || empty($block)) exit;
if (GutenbergBlocks::checkForPreview($block)) return;

$title         = get_field('title');
$text          = get_field('text');
$image_preview = get_field('image_preview');
$demos         = get_field('demos');
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
        if ( ! empty($demos)) { ?>
			<div class="portfolio_section_grid">
                <?php foreach ($demos as $site) {
                    $site_ID   = $site->ID;
                    $site_link = get_permalink($site_ID);
                    $thumbnail = get_the_post_thumbnail($site_ID, 'full', []);
                    ?>
					<a href="<?php echo $site_link ?>"><?php echo $thumbnail ?></a>
                    <?php
                }
                ?>
			</div>
        <?php } ?>
	</div>
</div>
