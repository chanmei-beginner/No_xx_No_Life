<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if( is_single() ): ?>
	<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="article">
	<meta property="og:title" content="<?php the_title(); ?>">
	<meta property="og:url" content="<?php the_permalink(); ?>">
	<meta property="og:description" content="<?php echo esc_attr( wp_strip_all_tags( get_the_excerpt() ) ); ?>">


	<?php if( has_post_thumbnail() ): ?>
	<?php $myimg = get_post_thumbnail_id(); ?>
	<meta property="og:image" content="<?php echo esc_url( wp_get_attachment_url( $myimg ) ); ?>">
	<meta property="og:image:width" content="<?php echo esc_attr( wp_get_attachment_metadata( $myimg )['width'] ); ?>">
	<meta property="og:image:height" content="<?php echo esc_attr( wp_get_attachment_metadata( $myimg )['height'] ); ?>">
	<?php endif; ?>

	<meta name="twitter:card" content="summary_large_image">
	<meta property="fb:app_id" content="XXXXXXXXXXXXXX">
	<?php endif; ?>

	<script src="https://kit.fontawesome.com/e1db9acaf4.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrapper">

		<header id="header">
			<div class="header-space">
				<ul class="logo">
					<li><a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a></li>
				</ul>


				<ul class="follow-me">
					<p>follow me!</p>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="https://www.instagram.com/aha_noodle_1110/?hl=ja"><i class="fab fa-instagram"></i></a></li>

				</ul>
				



			</div>

			<div class="header-message">
				<ul class="logo">
					<li><a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a></li>
				</ul>
				<ul class="follow-me">
					<p>follow me!</p>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="https://www.instagram.com/aha_noodle_1110/?hl=ja"><i class="fab fa-instagram"></i></a></li>

				</ul>
				
				

			</div>




		</header>
