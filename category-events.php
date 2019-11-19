<?php get_header(); ?>

<?php if(has_post_thumbnail()): ?>
	<img class="page-image" src="<?php echo carbon_get_term_meta(43, 'cb_sewing_term_image'); ?>" alt="">
<?php endif; ?>

<ul class="breadcrumbs">
	<li>
		<a href="<?php echo get_page_link(517); ?>"><?php echo get_the_title(517); ?></a>
	</li>
	<li><?php single_cat_title(); ?></li>
</ul>
<section class="section grid padding-right">
	<aside class="sidebar">
		<?php wp_nav_menu( [
			'theme_location'  => 'menu-about',
			'menu'            => '',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'sidebar__list',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => '',
		] ); ?>
	</aside>
	<div class="main">
		<?php if ( have_posts() ): ?>
			<?php the_post(); ?>
			<h2 class="section__title"><?php the_title(); ?></h2>
			<div class="main-content">
				<?php echo apply_filters( 'the_content', carbon_get_term_meta(43, 'crb_events_category_text'.get_lang())); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>
