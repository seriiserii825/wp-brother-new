<div class="main-footer">
    <!--    menu-footer-info-->
    <div class="main-footer__item">
		<?php wp_nav_menu( [
			'theme_location'  => 'menu-footer-info',
			'menu'            => '',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'main-footer__list main-footer__list--border-bottom',
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
        <!--            Blocks - Footer Facebook-->
        <ul class="main-footer__socials flex">
			<?php $footer_socials = carbon_get_theme_option( 'crb_footer_socials' ); ?>
			<?php foreach ( $footer_socials as $item ): ?>
                <li>
                    <a class="tooltip" title="" href="<?php echo $item['link']; ?>">
                        <img src="<?php echo $item['image']; ?>" alt="">
                    </a>
                </li>
			<?php endforeach; ?>
        </ul>
        <!--            Blocks - Footer social-->
        <ul class="main-footer__socials">
			<?php $footer_socials_facebook = carbon_get_theme_option( 'crb_footer_socials_facebook' ); ?>
			<?php foreach ( $footer_socials_facebook as $item ): ?>
                <li>
                    <a class="tooltip" title="" href="<?php echo $item['link']; ?>">
                        <img src="<?php echo $item['image']; ?>" alt="">
                        <span><?php echo $item[ 'crb_footer_social_text' . get_lang() ]; ?></span>
                    </a>
                </li>
			<?php endforeach; ?>
        </ul>
    </div>
    <div class="main-footer__item">
		<?php $products_page = new WP_Query( [ 'page_id' => 13 ] ); ?>
		<?php if ( $products_page->have_posts() ): ?>
			<?php $products_page->the_post(); ?>
            <h3 class="main-footer__title"><?php the_title(); ?></h3>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

        <ul class="main-footer__list">
            <li>
				<?php $product_page_sewing = new WP_Query( [ 'page_id' => 45 ] ); ?>
				<?php if ( $product_page_sewing->have_posts() ): ?>
					<?php $product_page_sewing->the_post(); ?>
                    <a class="tooltip"
                       title="<?php echo carbon_get_the_post_meta( 'crb_product_page_link_title' . get_lang() ); ?>"
                       href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
            </li>
            <li>
				<?php $product_page_sewing = new WP_Query( [ 'page_id' => 49 ] ); ?>
				<?php if ( $product_page_sewing->have_posts() ): ?>
					<?php $product_page_sewing->the_post(); ?>
                    <a class="tooltip"
                       title="<?php echo carbon_get_the_post_meta( 'crb_product_page_link_title' . get_lang() ); ?>"
                       href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
            </li>
        </ul>
    </div>
    <div class="main-footer__item">
	    <?php $products_page = new WP_Query( [ 'page_id' => 19 ] ); ?>
	    <?php if ( $products_page->have_posts() ): ?>
		    <?php $products_page->the_post(); ?>
            <h3 class="main-footer__title"><?php the_title(); ?></h3>
		    <?php wp_reset_postdata(); ?>
	    <?php endif; ?>
        <ul class="main-footer__list">
            <?php $spare_parts = carbon_get_theme_option('crb_spare_parts'); ?>
            <?php foreach($spare_parts as $item): ?>
                <li>
                    <a class="tooltip" title="<?php echo $item['title'.get_lang()]; ?>" href="<?php echo $item['link']; ?>"><?php echo $item['title'.get_lang()]; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="main-footer__item">
<!--        Translate - Title-->
        <h3 class="main-footer__title"><?php echo carbon_get_theme_option('crb_about_footer_title'.get_lang()); ?></h3>
        <ul class="main-footer__list">
            <li>
                <a href="<?php echo get_page_link(517); ?>"><?php echo get_the_title(517); ?></a>
            </li>
        </ul>
    </div>
    <div class="main-footer__item">
<!--        Translate - Titles - Footer links-->
        <h3 class="main-footer__title"><?php echo carbon_get_theme_option('crb_footer_links_title'.get_lang()); ?></h3>
        <ul class="main-footer__list">
            <li>
                <a class="tooltip" title="<?php echo carbon_get_theme_option('crb_footer_links_title'.get_lang()); ?>" href="<?php echo carbon_get_theme_option('crb_footer_links_link'); ?>"><?php echo carbon_get_theme_option('crb_footer_links_text'.get_lang()); ?></a>
            </li>
        </ul>
    </div>
</div>
<div class="copyright"><?php echo carbon_get_theme_option('crb_copyright'.get_lang()); ?></div>
</div><!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/site/assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/site/assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/site/assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/site/assets/libs/html5shiv/respond.min.js"></script>
<!--<![endif]-->

<?php wp_footer(); ?>
</body>
</html>

