<?php
/**
 * Template Name: Sidebar left + Content
 *
 * @package WallPress
 * @since WallPress 1.0.3
 */

get_header(); ?>

	<?php get_sidebar(); ?>

		<div id="container" class="clearfix">

			<div id="content" class="masonry">

			<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content' ); ?>

			<?php endwhile; else :?>
				
				<h1 class="entry-title">Ничего не найдено</h1>

				<p>Извините, но ничего не найдено на указанный архив. Возможно, поиск поможет найти соответствующий пост.</p>	
			
			<?php endif; ?>			

			</div>
			<!-- #content -->
		</div>
		<!-- #container -->

<?php get_footer(); ?>