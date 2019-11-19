<?php
/**
 * Template Name: Contacts
 */
?>
<?php get_header(); ?>

<ul class="breadcrumbs">
    <li><?php echo get_the_title(26); ?></li>
</ul>
<section class="section padding-right">
	<?php if (have_posts()): ?>
		<?php the_post(); ?>
        <div class="main">
            <h2 class="section__title"><?php echo carbon_get_the_post_meta('crb_contacts_title'.get_lang()) ?></h2>
            <div class="main-content">
                <?php the_content(); ?>
            </div>
        </div>
	<?php endif; ?>
</section>
<?php get_footer(); ?>
