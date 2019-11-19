<?php
/**
 * Template Name: Sitemap
 */
?>
<?php get_header(); ?>

<?php if ( has_post_thumbnail() ): ?>
    <img class="page-image" src="<?php echo kama_thumb_src( 'w=940 &h=346' ); ?>" alt="">
<?php endif; ?>

<ul class="breadcrumbs">
    <li><?php the_title(); ?></li>
</ul>
<section class="section grid padding-right">
    <aside class="sidebar">
		<?php wp_nav_menu( [
			'theme_location'  => 'menu-footer-info',
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
            <div class="main-content">
                <div class="sitemap-content">
                    <div class="sitemap-content__item">
                        <h2>
                            <a href="<?php echo get_page_link( 13 ); ?>"><?php echo get_the_title( 13 ); ?></a>
                        </h2>

                        <ul>
                            <li>
                                <a href="<?php echo get_page_link(45); ?>"><?php echo get_the_title(45); ?></a>
                                <?php $sewing = new WP_Query([
                                    'post_type' => 'product',
                                    'model' => 'industrial-sewing-machines',
                                    'posts_per_page' => -1,
                                    'orderby' => 'name',
                                    'order' => 'ASC'
                                ]); ?>

                                <ul>
	                                <?php if($sewing->have_posts()): ?>
		                                <?php while($sewing->have_posts()): ?>
			                                <?php $sewing->the_post(); ?>
                                            <li>
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </li>
		                                <?php endwhile; ?>
		                                <?php wp_reset_postdata(); ?>
	                                <?php endif; ?>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo get_page_link(49); ?>"><?php echo get_the_title(49); ?></a>
	                            <?php $garment = new WP_Query([
		                            'post_type' => 'product',
		                            'model' => 'industrial-garment-printers',
		                            'posts_per_page' => -1,
		                            'orderby' => 'name',
		                            'order' => 'ASC'
	                            ]); ?>

                                <ul>
		                            <?php if($garment->have_posts()): ?>
			                            <?php while($garment->have_posts()): ?>
				                            <?php $garment->the_post(); ?>
                                            <li>
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </li>
			                            <?php endwhile; ?>
			                            <?php wp_reset_postdata(); ?>
		                            <?php endif; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="sitemap-content__item">
                        <h2>
                            <a href="<?php echo get_the_permalink(16); ?>"><?php echo get_the_title(16); ?></a>
                        </h2>
                        <ul>
                            <li>
                                <a href="<?php echo get_the_permalink(107); ?>"><?php echo carbon_get_post_meta('107', 'crb_where_to_buy_title'.get_lang()); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_the_permalink(112); ?>"><?php echo carbon_get_post_meta('112', 'crb_where_to_buy_title'.get_lang()); ?></a>
                            </li>
                        </ul>
                    </div>

                    <div class="sitemap-content__item">
                        <h2>
                            <a href="#"><?php echo carbon_get_theme_option('crb_support'.get_lang()); ?></a>
                        </h2>
                        <ul>
                            <li>
                                <a target="_blank" href="http://partsbook.brother.co.jp/partsnavi/eng/index.html"><?php echo get_the_title(45); ?></a>
                            </li>
                            <li>
                                <a target="_blank" href="http://partsbook.brother.co.jp/partsnavi_em/eng/index.html"><?php echo get_the_title(49); ?></a>
                            </li>
                        </ul>

                        <h2>
                            <a href="#"><?php echo get_the_title(517); ?></a>
                        </h2>

	                    <?php wp_nav_menu( [
		                    'theme_location'  => 'menu-about',
		                    'menu'            => '',
		                    'container'       => '',
		                    'container_class' => '',
		                    'container_id'    => '',
		                    'menu_class'      => '',
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

                        <h2>
                            <a href="#"><?php echo carbon_get_theme_option('crb_other'.get_lang()); ?></a>
                        </h2>
	                    <?php wp_nav_menu( [
		                    'theme_location'  => 'menu-footer-info',
		                    'menu'            => '',
		                    'container'       => '',
		                    'container_class' => '',
		                    'container_id'    => '',
		                    'menu_class'      => '',
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
                    </div>
                </div>
            </div>
		<?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
