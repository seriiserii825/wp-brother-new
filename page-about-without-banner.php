<?php
/**
 * Template Name: About Brother No Banner
 */
?>
<?php get_header(); ?>

<?php if(has_post_thumbnail()): ?>
    <img class="page-image" src="<?php echo kama_thumb_src('w=940 &h=346'); ?>" alt="">
<?php endif; ?>

<ul class="breadcrumbs">
    <li>
        <a href="<?php echo get_page_link(517); ?>"><?php echo get_the_title(517); ?></a>
    </li>
    <li><?php the_title(); ?></li>
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
	            <?php the_content(); ?>
				<?php echo carbon_get_the_post_meta( 'crb_about_banner'.get_lang() ); ?>
            </div>
		<?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
