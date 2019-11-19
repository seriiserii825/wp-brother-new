<?php
/**
 * Template Name: Spare Parts
 */
?>
<?php get_header(); ?>
	<ul class="breadcrumbs">
		<li><?php echo get_the_title(19); ?></li>
	</ul><section class="section grid padding-right">
		<aside class="sidebar">
			<ul class="sidebar__list">
				<li>
					<a href="https://partsbook.brother.co.jp/public/pub/index/index/en"><?php echo get_the_title(45); ?></a>
				</li>
				<li>
					<a href="https://partsbook.brother.co.jp/public/gt/index/index/en"><?php echo get_the_title('49'); ?></a>
				</li>
			</ul>
		</aside>
		<div class="main">
			<h2 class="section__title"><?php echo get_the_title(19); ?></h2>
			<div class="blocks two-blocks"><a class="blocks__item" href="https://partsbook.brother.co.jp/public/pub/index/index/en">
					<div class="blocks__image-bg" style="background-image: url('<?php echo get_template_directory_uri() ?>/site/assets/i/blocks/1.jpg')"></div>
					<div class="blocks__content">
						<header class="blocks__content-header"><img class="blocks__image_show" src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png"><img class="blocks__image_hover" src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
							<div class="blocsk__titles">
								<h4 class="blocks__brand-title"><?php echo carbon_get_post_meta( 45, 'crb_block_title' . get_lang() ); ?></h4>
								<h3 class="blocks__title"><?php echo carbon_get_post_meta( 45, 'crb_block_subtitle' . get_lang() ); ?></h3>
							</div>
						</header>
						<div class="blocks__text">Whether straight stitch, buttonholer or bar tack, Brother has the right sewing machine for your production line.</div>
					</div></a><a class="blocks__item" href="https://partsbook.brother.co.jp/public/gt/index/index/en">
					<div class="blocks__image-bg" style="background-image: url('<?php echo get_template_directory_uri() ?>/site/assets/i/blocks/2.jpg')"></div>
					<div class="blocks__content">
						<header class="blocks__content-header"><img class="blocks__image_show" src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png"><img class="blocks__image_hover" src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
							<div class="blocsk__titles">
								<h4 class="blocks__brand-title"><?php echo carbon_get_post_meta( 45, 'crb_block_title' . get_lang() ); ?></h4>
								<h3 class="blocks__title"><?php echo carbon_get_post_meta( 49, 'crb_block_title' . get_lang() ); ?></h3>
							</div>
						</header>
						<div class="blocks__text">Discover the Single Platen White ink <br> Direct-to-Garment Printer.</div>
					</div></a></div></div>
	</section>
<?php get_footer(); ?>
