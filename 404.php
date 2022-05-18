<?php
	// The template for displaying 404 pages (Not Found)
	get_header(); 
?>	
<!-- Page 404 -->
<section class="page page--404">
	<div class="container">
		<article class="hentry">
			<header class="page__header">
				<h1 class="page__title title"><?php _e( 'Page not found', 'mdf_theme_translate' ); ?></h1>
			</header>
			<div class="page__content">
				<p><?php _e( 'The page you are looking is under construction or does not exist.', 'mdf_theme_translate' ); ?></p>
			</div>
		</article>
	</div>
</section>
<!-- Page 404 -->
<?php get_footer(); ?>