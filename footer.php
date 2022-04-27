<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package I_AM_Developer
 */

?>

	<footer id="colophon" class="siteFooter">
		<div class="siteFooter__wrap container">
			<div class="siteFooter__logo">
				<div class="logo">
					<img src="<?php echo get_template_directory_uri() . '/images/logo_white.svg'; ?>"/>
				</div>
				<p>Działamy w całej Polsce!</p>
			</div>
			<div class="siteFooter__links">
				<h3>Szybkie linki</h3>
				<ul>
					<li><a href="<?php echo home_url('/kariera'); ?>">Kariera</a></li>
					<li><a href="<?php echo home_url('/referencje'); ?>">Referencje</a></li>
					<li><a href="<?php echo home_url('/media'); ?>">Media</a></li>
				</ul>
			</div>
			<div class="siteFooter__links">
				<h3>Kontakt</h3>
				<div class="contact">
					<a href="tel:516004957" class="phone">+48 516 004 957</a>
					<a href="tel:516000720" class="phone">+48 516 000 720</a>
					<a href="mailto:kontakt@agencjaiam.pl" class="mail">kontakt@agencjaiam.pl</a>
				</div>
			</div>
			<div class="siteFooter__links">
				<div class="address">
					<p><b>Biuro:</b> Zabłocie 25/31,<br/>
					30-701 Kraków</p>
					<p>NIP: 552 165 74 32</p>
				</div>
			</div>
		</div>
		<div class="siteFooter__copyrights container">
			<p class="copy">I AM © 2022. Wszystkie prawa zastrzeżone.</p>
			<div class="links">
				<a href="<?php echo home_url('/polityka-prywatnosci'); ?>">Polityka Prywatności</a>
				<span>/</span>
				<a href="<?php echo home_url('/regulamin'); ?>">Regulamin</a>
				<span>/</span>
				<a href="<?php echo home_url('/kontakt'); ?>">Kontakt</a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
