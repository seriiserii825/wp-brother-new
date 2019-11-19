<?php
/**
 * Template Name: Products
 */
?>
<?php get_header(); ?>
<ul class="breadcrumbs">
    <li><?php echo get_the_title( 13 ); ?></li>
</ul>
<section class="section">
    <h2 class="section__title"><?php echo get_the_title( 13 ); ?></h2>
    <div class="blocks">
        <a class="blocks__item" href="<?php echo get_page_link( 45 ); ?>">
			<?php $page_sewing = new WP_Query( [
				'page_id' => 45
			] ); ?>
			<?php if ( $page_sewing->have_posts() ): ?>
				<?php $page_sewing->the_post(); ?>
                <div class="blocks__image-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/1.jpg')"></div>
                <div class="blocks__content">
                    <header class="blocks__content-header">
                        <img class="blocks__image_show"
                             src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png">
                        <img class="blocks__image_hover"
                             src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
                        <div class="blocsk__titles">
                            <h4 class="blocks__brand-title"><?php echo carbon_get_the_post_meta( 'crb_block_title' . get_lang() ); ?></h4>
                            <h3 class="blocks__title"><?php echo carbon_get_the_post_meta( 'crb_block_subtitle' . get_lang() ); ?></h3>
                        </div>
                    </header>
                    <div class="blocks__text"><?php echo carbon_get_the_post_meta( 'crb_block_short_text' . get_lang() ); ?></div>
                </div>

				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </a>
        <a class="blocks__item" href="<?php echo get_page_link( 49 ); ?>">
			<?php $page_garment = new WP_Query( [
				'page_id' => 49
			] ); ?>
			<?php if ( $page_garment->have_posts() ): ?>
				<?php $page_garment->the_post(); ?>
                <div class="blocks__image-bg"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/2.jpg')"></div>
                <div class="blocks__content">
                    <header class="blocks__content-header">
                        <img class="blocks__image_show"
                             src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png">
                        <img
                                class="blocks__image_hover"
                                src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
                        <div class="blocsk__titles">
                            <h4 class="blocks__brand-title"><?php echo carbon_get_the_post_meta( 'crb_block_title' . get_lang() ); ?></h4>
                            <h3 class="blocks__title"><?php echo carbon_get_the_post_meta( 'crb_block_subtitle' . get_lang() ); ?></h3>
                        </div>
                    </header>
                    <div class="blocks__text"><?php echo carbon_get_the_post_meta( 'crb_block_short_text' . get_lang() ); ?></div>
                </div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

        </a>
        <a class="blocks__item" href="<?php echo get_page_link( 55 ); ?>">
			<?php $newsletter = new WP_Query( [
				'p' => 55
			] ); ?>
			<?php if ( $newsletter->have_posts() ): ?>
				<?php $newsletter->the_post(); ?>
                <div class="blocks__image-bg"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/3.jpg')"></div>
                <div class="blocks__content">
                    <header class="blocks__content-header">
                        <img class="blocks__image_show"
                             src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png">
                        <img
                                class="blocks__image_hover"
                                src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
                        <div class="blocsk__titles">
                            <h4 class="blocks__brand-title"><?php echo carbon_get_the_post_meta( 'crb_block_title' . get_lang() ); ?></h4>
                            <h3 class="blocks__title"><?php echo carbon_get_the_post_meta( 'crb_block_subtitle' . get_lang() ); ?></h3>
                        </div>
                    </header>
                    <div class="blocks__text"><?php echo carbon_get_the_post_meta( 'crb_block_short_text' . get_lang() ); ?></div>
                </div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </a>
    </div>
</section>
<?php get_footer(); ?>
