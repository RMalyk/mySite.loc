<?php
$get_stylesheet_directory_uri = get_stylesheet_directory_uri() . '/';

$logo = get_field( 'footer_logo', 'option' );

?>

<footer>
	<div class="logo_footer">
		<?php DisplayGlobal::renderAcfImage( $logo ) ?>
	</div>
	<div class="copyright">
		<p>&copy; 2025 Роман Малик. Усі права захищено.</p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
