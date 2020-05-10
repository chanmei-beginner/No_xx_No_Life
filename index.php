		<?php get_header(); ?>
		<div class="container">

			<div class="main">



				<?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>

				<article <?php post_class('mycontainer'); ?>>
					<div class="myposthead">
						<?php the_category(); ?>
						<h1><?php the_title(); ?></h1>

						<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
							<!--記事の投稿日 パラーメーターをDATE_W3Cとし、esc_attrでエスケープ処理 -->
							<?php echo esc_html( get_the_date() ); ?>
						</time>
					</div>


					<?php the_content(); ?>
					<?php the_excerpt(); ?>
					<?php the_post_navigation(); ?>
				</article>
				<?php 
          endwhile;
      endif;
      ?>
			</div>
		</div>

		<div class="page-top-logo">
			<li id="page_top"><a href="#header"><i class="fas fa-angle-double-up"></i></a></li>
		</div>

		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
