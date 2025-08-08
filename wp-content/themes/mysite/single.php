<?php

get_header();

$demo_path = get_field('demo_link');
$demo_url  = get_template_directory_uri() . $demo_path;

?>

<main class="portfolio-page">
	<iframe
		src="<?php echo esc_url($demo_url); ?>"
		width="100%"
		height="800"
		style="border: none;"
		loading="lazy"
		title="Демо роботи"
	></iframe>
</main>

<?php get_footer(); ?>
