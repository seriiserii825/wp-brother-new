<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bs-brother
 */

get_header();
?>
<?php if ( in_category( 'events' ) ): ?>
<?php endif; ?>
    <ul class="breadcrumbs">
        <li>
            <a href="<?php echo get_page_link( 517 ); ?>"><?php echo get_the_title( 517 ); ?></a>
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
            <div class="page-header">
                <h2 class="section__title"><?php the_title(); ?></h2>
                <time><?php echo get_the_date( 'd.m.Y' ); ?></time>
            </div>
            <div class="clearfix">
				<?php the_content(); ?>
            </div>
            <hr>
            <a class="back-link" href="#"><?php echo carbon_get_theme_option('crb_back_link'.get_lang()); ?></a>
        </div>

		<?php endif; ?>
    </section>
<?php
get_footer();
