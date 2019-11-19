<?php get_header(); ?>

<?php
$machine_type = get_query_var( 'machine_type' );
$machine_type_id = get_term_by('slug', 'industrial-sewing-machines', 'categories')->term_id;
$page_id = get_page_by_path($machine_type.'-where-to-buy')->ID;
$objects         = get_queried_object();
$country         = $objects->slug;
$country_name = $objects->name;
?>

<ul class="breadcrumbs">
    <li>
        <a href="<?php echo get_page_link( 16 ); ?>"><?php echo get_the_title( 16 ); ?></a>
    </li>
    <li>
        <a href="<?php echo get_page_link($page_id); ?>">
            <?php echo carbon_get_post_meta( $page_id, 'crb_where_to_buy_title' . get_lang() ); ?>
        </a>
    </li>
    <li><?php echo $country_name; ?></li>
</ul>
<section class="section section-country" style="background-color: #f5f6f8; background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/where_to_buy_background.jpg'); background-repeat: no-repeat;">
    <h2 class="section__title"><?php echo carbon_get_theme_option( 'crb_city_one_text' . get_lang() ); ?></h2>

	<?php $country_posts = new WP_Query( [
		'post_type'      => 'address',
		'order' => 'DESC',
		'tax_query'      => [
			'relation' => 'AND',
			[
				'taxonomy' => 'categories',
				'field'    => 'slug',
				'terms'    => $country,
			],
			[
				'taxonomy' => 'categories',
				'field'    => 'slug',
				'terms'    => $machine_type,
			]
		],
		'posts_per_page' => - 1
	] ); ?>

    <div class="country">
		<?php if ( $country_posts->have_posts() ): ?>
			<?php while ( $country_posts->have_posts() ): ?>
				<?php $country_posts->the_post(); ?>
                <div class="country__item">
                    <h3 class="country__title"><?php the_title(); ?></h3>
					<?php the_content(); ?>
                </div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
    </div>

    <a class="country__back-link" href="<?php echo get_page_link($page_id); ?>"><?php echo carbon_get_theme_option('crb_where_to_buy_back_link'.get_lang()); ?></a>
</section>
<?php get_footer(); ?>
