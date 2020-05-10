		<?php get_header(); ?>
<div class="container">
			<div class="main">
				<?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
				
				<article <?php post_class('mycontainer'); ?>>
				<div class="myposthead">
				<h1><?php the_title(); ?></h1>
							<p>
			<?php echo esc_html( strtoupper( get_post_field( 'post_name' ) ) ); ?>
		</p>
					</div>
					
					
				<?php the_content(); ?>
					
					</article>
				<?php 
          endwhile;
      endif;
      ?>
			</div>
	<?php get_sidebar(); ?>
		</div>
		
		<div class="page-top-logo">
			<li id="page_top"><a href="#header"><i class="fas fa-angle-double-up"></i></a></li>
		</div>


<?php get_footer(); ?>