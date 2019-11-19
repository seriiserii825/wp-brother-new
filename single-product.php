<?php get_header(); ?>

<?php
$taxonomy_product_arr = get_the_terms( get_the_ID(), 'model' );
$taxonomy_product     = [];
foreach ( $taxonomy_product_arr as $key => $item ) {
	$taxonomy_product[] = $item->slug;
}

$sewing_machine_active  = '';
$garment_machine_active = '';

if ( in_array( 'industrial-sewing-machines', $taxonomy_product ) ) {
	$sewing_machine_active = 'active';
} elseif ( in_array( 'industrial-garment-printers', $taxonomy_product ) ) {
	$garment_machine_active = 'active';
}
?>

<div class="slider-wrap">
    <div class="slider" id="js-slider">
		<?php $slider = carbon_get_post_meta( get_the_ID(), 'crb_product_slider' ); ?>
		<?php foreach ( $slider as $slide ): ?>
            <div class="slider__item">
                <img src="<?php echo $slide['image']; ?>">
            </div>
		<?php endforeach; ?>
    </div>
</div>

<ul class="breadcrumbs">
    <li>
        <a href="<?php echo get_page_link( 13 ); ?>"><?php echo get_the_title( 13 ); ?></a>
    </li>

    <li>
		<?php if ( in_array( 'industrial-sewing-machines', $taxonomy_product ) ): ?>
            <a href="<?php echo get_page_link( 45 ); ?>"><?php echo get_the_title( 45 ); ?></a>
		<?php elseif ( in_array( 'industrial-garment-printers', $taxonomy_product ) ): ?>
            <a href="<?php echo get_page_link( 49 ); ?>"><?php echo get_the_title( 49 ); ?></a>
		<?php endif; ?>
    </li>
    <li><?php the_title(); ?></li>
</ul>
<section class="section grid padding-right">

    <aside class="sidebar">
		<?php $post_title = get_the_title(); ?>

        <ul class="sidebar__list no-border products-list">
			<?php $products = new WP_Query( [
				'post_type'      => 'product',
				'model'          => 'industrial-sewing-machines',
				'orderby'        => 'name',
				'order'          => 'ASC',
				'posts_per_page' => - 1
			] ); ?>
            <li>
                <a class="<?php echo $sewing_machine_active; ?>"
                   href="<?php echo get_page_link( 45 ); ?>"><?php echo get_the_title( 45 ); ?></a>
                <ul class="<?php echo $sewing_machine_active; ?>">
					<?php if ( $products->have_posts() ): ?>
						<?php while ( $products->have_posts() ): ?>
							<?php $products->the_post(); ?>
							<?php if ( get_the_title() === $post_title ) {
								$link_active = 'class="active"';
							} else {
								$link_active = '';
							} ?>

                            <li>
                                <a <?php echo $link_active; ?>
                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                </ul>
            </li>

			<?php $products = new WP_Query( [
				'post_type'      => 'product',
				'model'          => 'industrial-garment-printers',
				'orderby'        => 'name',
				'order'          => 'ASC',
				'posts_per_page' => - 1
			] ); ?>
            <li>
                <a class="<?php echo $garment_machine_active; ?>"
                   href="<?php echo get_page_link( 49 ); ?>"><?php echo get_the_title( 49 ); ?></a>
                <ul class="<?php echo $garment_machine_active; ?>">
					<?php if ( $products->have_posts() ): ?>
						<?php while ( $products->have_posts() ): ?>
							<?php $products->the_post(); ?>

							<?php if ( get_the_title() === $post_title ) {
								$link_active = 'class="active"';
							} else {
								$link_active = '';
							} ?>

                            <li>
                                <a <?php echo $link_active; ?>href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                </ul>
            </li>
        </ul>
    </aside>
    <div class="main single-product">
        <h2 class="section__title"><?php the_title(); ?></h2>

		<?php if ( in_array( 'industrial-sewing-machines', $taxonomy_product ) ): ?>
			<?php require_once __DIR__ . '/template-parts/single-sewing-product.php'; ?>
		<?php elseif ( in_array( 'industrial-garment-printers', $taxonomy_product ) ): ?>
			<?php require_once __DIR__ . '/template-parts/single-garment-product.php'; ?>
		<?php endif; ?>

</section>
<?php get_footer(); ?>
