<?php
/**
 * Template Name: Industrial Garment Printers
 */
?>
<?php require_once __DIR__ . '/inc/func.php'; ?>
<?php get_header(); ?>

<?php $term_image = carbon_get_term_meta( 3, 'cb_sewing_term_image' ); ?>
<img class="page-image" src="<?php echo $term_image; ?>" alt="">

<ul class="breadcrumbs">
	<?php $products_page = new WP_Query( [ 'page_id' => 13 ] ); ?>
	<?php if ( $products_page->have_posts() ): ?>
		<?php $products_page->the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
    <li><?php the_title(); ?></li>
</ul>

<?php $garment_posts = new WP_Query( [
	'post_type'      => 'product',
	'posts_per_page' => - 1,
	'model'          => 'industrial-garment-printers'
] ); ?>

<div class="products-items garment">
    <div class="products-items__block">
        <h2 class="section__title"><?php the_title(); ?></h2>
        <div class="products-items__grid">
			<?php if ( $garment_posts->have_posts() ): ?>
				<?php while ( $garment_posts->have_posts() ): ?>
					<?php $garment_posts->the_post(); ?>
                    <div class="products-items__item">
                        <div class="products-items__img">
                            <a href="<?php the_permalink(); ?>">
								<?php echo kama_thumb_img( 'w=190 &h=145' ); ?>
                            </a>
                        </div>
                        <div class="products-items__content">
                            <h3 class="products-items__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="products-items__text"><?php echo carbon_get_the_post_meta( 'crb_model_short_text' . get_lang() ); ?></p>
                            <a class="products-items__link"
                               href="<?php the_permalink(); ?>"><?php echo carbon_get_theme_option( 'crb_read_more' . get_lang() ); ?></a>
                        </div>
                    </div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
