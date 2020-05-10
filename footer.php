		<footer>

			<div class="footer-space">

				<ul class="follow-me">
					<p>follow me!</p>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="https://www.instagram.com/aha_noodle_1110/?hl=ja"><i class="fab fa-instagram"></i></a></li>

				</ul>
				<nav class="list">
					<?php if( has_nav_menu( 'primary' ) ): ?>

					<?php wp_nav_menu( array(
	'theme_location' => 'primary',
) ); ?>
				</nav>


				<?php endif; ?>


			</div>
			<div class="author">
				<p>Copyright © 2020 All Rights Reserved.</p>
			</div>




		</footer>
		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				$(window).scroll(function() {
					var Top = 100;

					if ($(window).scrollTop() < Top) {
						$('.header-space').fadeIn();
					} else {
						$('.header-space').fadeOut();
					}
				});

				jQuery('.hamburger-list').on('click', function() {
					if (jQuery('.list').css('display') === 'none') {
						jQuery('.list').slideDown();
					} else {
						jQuery('.list').slideUp();
					}
				});

				jQuery(window).scroll(function() {
					if ($(this).scrollTop() > 100) {
						$('#page_top').fadeIn();
					} else {
						$('#page_top').fadeOut();
					}
				});
				jQuery('#page_top').click(function() {
					$('body, html').animate({
						scrollTop: 0
					}, 500);
					return false;
				});

			});

		</script>
		<?php wp_footer(); ?>
		</body>

		</html>
