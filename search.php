		<?php get_header(); ?>

		<div class="container">

			<div class="main">
				<main class="mycontainer">
					<div class="myposthead">

						<h1>検索結果</h1>
						<p>SEARCH</p>
					</div>


					<div class="result">
						<?php if (have_posts()): ?>
						<?php
if (isset($_GET['s']) && empty($_GET['s'])) {
echo '検索キーワードを入力してください'; 
} else {
echo '「'.$_GET['s'] .'」の検索結果：'.$wp_query->found_posts .'件見つかりました';
}
?>
					</div>

					<div class="mypostlist">

						<?php while(have_posts()): the_post(); ?>
						<article <?php post_class(''); ?>>
							<a href="<?php the_permalink(); ?>">

								<?php if( has_post_thumbnail() ): ?>
								<figure>
									<?php the_post_thumbnail(); ?>
								</figure>
								<?php endif; ?>

								<h2><?php echo get_the_title(); ?></h2>
								<?php the_excerpt(); ?>
							</a>
						</article>
						<?php endwhile; ?>

						<?php else: ?>
						<div class="result">
							<p>検索されたキーワードにマッチする記事はありませんでした</p>
						</div>
						<?php endif; ?>
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
