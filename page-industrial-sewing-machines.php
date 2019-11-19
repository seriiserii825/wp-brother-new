<?php
/**
 * Template Name: Industrial Sewing Machine
 */
?>
<?php require_once __DIR__.'/inc/func.php';?>
<?php get_header(); ?>

<?php $term_image = carbon_get_term_meta( 2, 'cb_sewing_term_image' ); ?>
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

<div class="products-items">
    <div class="products-items__block">
        <?php showProductsBlocks(4, 'sewing-pattern-machines'); ?>
    </div>
    <div class="products-items__block">
	    <?php showProductsBlocks(5, 'cycle-machines'); ?>
    </div>
    <div class="products-items__block">
	    <?php showProductsBlocks(6, 'single-needle-machines'); ?>
    </div>
    <div class="products-items__block">
		<?php showProductsBlocks(7, 'twin-needle-machines'); ?>
    </div>
    <div class="products-items__block">
		<?php showProductsBlocks(8, 'feed-off-the-arm-machines'); ?>
    </div>
    <div class="products-items__block">
		<?php showProductsBlocks(9, 'software'); ?>
    </div>
</div>
<?php get_footer(); ?>

