<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beata_Antosik_Clinic
 */

?>
<footer>
	<div class="container-fluid footer">
		<div class="container footer-content-container">
			<div class="row footer-row">
				<div class="col-xs-12 offset-md-1 col-md-4 footer-cell">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo-white.svg" alt="Beata Antosik Clinic logo" class="img-fluid">
					<p>
						ul. Koszykowa 81/12
						<br>
						00-001 Warszawa
					</p>
				</div>
				<div class="col-xs-12 col-md-4 footer-cell">
					<strong>
						Godziny otwarcia
					</strong>
					<p>
					Poniedziałek - Piątek 9:00 - 21:00
					<br>
					Sobota 9:00 - 16:00
					</p>
				</div>
				<div class="col-xs-12 col-md-3 footer-cell">
					<div class="social-icon-div">
						<a href=""><i class="fab fa-facebook-square"></i></a>
						<a href=""><i class="fab fa-instagram"></i></a>
					</div>
					<p>
						klinika@nazwadomeny
						<br>
						600 000 000
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
