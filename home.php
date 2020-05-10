		<?php get_header(); ?>

<div class="container">
	
			<div class="main">
				<main class="mycontainer">
				<div class="myposthead">		
					<h1>最新情報</h1>
					<p>RESENT</p>
				</div>
					<div class="mypostlist">
				<?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
				
				<article <?php post_class(''); ?>>
					<a href="<?php the_permalink(); ?>">
				<?php if( has_post_thumbnail() ): ?>
					<figure>
						<!--アイキャッチ画像を表示する-->
						<?php the_post_thumbnail(); ?>
					</figure>
					<?php endif; ?>

				<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						</a>
					
					</article>
				<?php 
          endwhile;
      endif;
      ?>
						</div>
						
					<?php the_posts_pagination(array(
	//	両端のリンクをアイコンにする
	'prev_text' => '<span class="dashicons dashicons-arrow-left-alt2"></span><span class="screen-reader-text">前へ</span>',
	'next_text' => '<span class="screen-reader-text">次へ</span><span class="dashicons dashicons-arrow-right-alt2"></span>'
)); ?>
					
					</main>
</div>
	
		<?php get_sidebar(); ?>
		</div>
		
		<div class="page-top-logo">
			<li id="page_top"><a href="#header"><i class="fas fa-angle-double-up"></i></a></li>
		</div>

<?php get_footer(); ?>