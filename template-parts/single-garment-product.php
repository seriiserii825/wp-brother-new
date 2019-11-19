<div class="single-garment-content">
	<?php if ( have_posts() ): ?>
		<?php the_post(); ?>
		<?php if ( get_the_ID() == 229 ): ?>
<<<<<<< HEAD
			<?php the_content(); ?>
		<?php else: ?>
            <?php require_once __DIR__.'/garment-tabs.php';?>
=======
            <div class="single-product__wrap">
				<?php the_content(); ?>
            </div>
		<?php else: ?>
			<?php require_once __DIR__ . '/garment-tabs.php'; ?>
>>>>>>> ef3827dda84139544f627639d9bec8db200f2d7a
		<?php endif; ?>

	<?php endif; ?>

</div>
