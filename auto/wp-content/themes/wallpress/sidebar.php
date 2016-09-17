<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WallPress
 * @since WallPress 1.0.7
 */
?>

<div id="sidebar" class="widget-area" >
	<div class="sidebar-inner">	
	<?php if ( ! dynamic_sidebar( 'sidebar-main' ) ) : ?>

		<div id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</div>

		<div id="archives" class="widget">
			<h2 class="widget-title"><?php _e( 'Archives', 'wallpress' ); ?></h2>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</div>
		
		<div id="meta" class="widget">
			<h2 class="widget-title"><?php _e( 'Meta', 'wallpress' ); ?></h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</div>
	<?php endif; // end sidebar widget area ?>
		<div id="copyright">
			<?php do_action( 'wallpress_credits' ); ?>
			<a href="http://wp-templates.ru/">wp темы</a> - <a href="http://searchtimes.ru/">форум</a>
		</div>
	</div>
</div><!-- #sidebar .widget-area -->