<aside class="side">


	<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php endif; ?>


	<section class="myprofile">
		<h1>about me</h1>
		<figure>
			<img src="<?php echo esc_url( get_theme_file_uri( 'profile.jpg' ) ); ?>" alt="">
		</figure>
		<p class="display-name"><strong><?php the_author_meta( 'display_name' ); ?></strong></p>
		<!--				プロフィール情報に入力した紹介文-->
		<p class="my-description"><?php the_author_meta( 'description' ); ?></p>
		

	</section>
</aside>
