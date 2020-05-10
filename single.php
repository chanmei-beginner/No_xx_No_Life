		<?php get_header(); ?>
		<div class="container">
			<div class="main">
				<?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>

				<article <?php post_class('mycontainer'); ?>>
					<div class="myposthead">
						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
							<?php if(function_exists('bcn_display'))
  {
   bcn_display();
  }?>
						</div>

						<h1><?php the_title(); ?></h1>

						<div class="datetime">
							<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">

								<div class="posted-date">
									<?php echo esc_html( get_the_date('Y/m/d') ); ?>
								</div>


								<?php if(get_the_time('Y/m/d') != get_the_modified_date('Y/m/d')):?>
								<div class="update-date">
									<?php the_modified_date('Y/m/d') ?>
								</div>
								<?php endif;?>

							</time>

						</div>
						<?php the_category(); ?>

					</div>


					<?php the_content(); ?>

					<div class="tag-list">


						
						<?php the_tags('', '  '); ?>
						
					</div>


					

					<aside class="myshare">
						<h2>↓この記事をシェアする↓</h2>

						<!--横並び-->
						<div class="snspostlist">
							<!--twitter-->
							<a href="https://twitter.com/share?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" class="btn-social-circle btn-social-circle--twitter " onclick="window.open(this.href, 'new', 'width=500,height=400'); return false;">
								<i class="fab fa-twitter"></i>
							</a>
							<!--facebook-->
							<a href="https://www.facebook.com/share.php?u=<?php echo urlencode( get_permalink() ); ?>" class="btn-social-circle btn-social-circle--facebook" onclick="window.open(this.href, 'new', 'width=500,height=400'); return false;">
								<i class="fab fa-facebook-f"></i>
							</a>
							<!--はてぶ-->
							<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" class="btn-social-circle btn-social-circle--hatebu">
								B!
							</a>

							<!--pocket-->
							<a href="http://getpocket.com/edit?url=<?php the_permalink(); ?>" target="_blank" class="btn-social-circle btn-social-circle--pocket">
								<i class="fab fa-get-pocket"></i>
							</a>

							<a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>" class="btn-social-circle btn-social-circle--line">
								<i class="fab fa-line"></i>
							</a>



						</div>

					</aside>



					<?php comments_template(); ?>
					<?php the_post_navigation(); ?>

					<aside class="myrelated">
						<h2>関連記事</h2>

						<div class="mypostlist">
							<?php $myposts = get_posts( array(
	'posts_per_page' => '8',
	'post__not_in' => array( get_the_ID() ),
	'category__in' => wp_get_post_categories( get_the_ID() ),//同じカテゴリーに属する記事を取得
	'orderby' => 'rand'//記事をランダムに取得
	)) ;
	?>

							<?php if( $myposts ):
foreach($myposts as $post):
setup_postdata($post); ?>
							<article>
								<a href="<?php the_permalink(); ?>">
									<?php if( has_post_thumbnail() ): ?>
									<figure>
										<?php the_post_thumbnail(); ?>
									</figure>
									<?php endif; ?>
									<h3><?php the_title(); ?></h3>
									<?php the_excerpt(); ?>
								</a>
							</article>
							<?php endforeach;
wp_reset_postdata();
endif; ?>

						</div>
					</aside>

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
