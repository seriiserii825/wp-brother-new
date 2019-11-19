<div class="single-product__wrap">

    <div class="single-product__content">
		<?php if ( have_posts() ): ?>
			<?php the_post(); ?>
			<?php the_content(); ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
    </div>

    <div class="banner-wrap">
		<?php $single_banner = carbon_get_post_meta( get_the_ID(), 'crb_single_product_banner' ); ?>
		<?php if ( $single_banner ): ?>
            <div class="banner">
                <div class="banner__header">
                    <?php echo carbon_get_theme_option( 'crb_single_product_banner_title' . get_lang() ); ?>
                </div>

                <div class="banner__content">
                    <ul>
						<?php foreach ( $single_banner as $item ): ?>
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/site/assets/i/pdf_icon.png'; ?>"
                                     alt="">

                                <a href="<?php echo $item['crb_file']; ?>"
                                   target="_blank"><?php echo $item['name']; ?></a>
                            </li>
						<?php endforeach; ?>
                    </ul>
                </div>
            </div>
		<?php endif; ?>

		<?php $banner_link = carbon_get_post_meta( get_the_ID(), 'crb_product_singel_update_button_link' ); ?>

		<?php if ( $banner_link ): ?>
            <a class="banner-update-link" href="<?php echo $banner_link; ?>"><?php echo carbon_get_theme_option( 'crb_update_button' . get_lang() ); ?></a>
		<?php endif; ?>
    </div>
</div>

<?php $table = carbon_get_post_meta( get_the_ID(), 'crb_product_table' ); ?>

<div class="table-colorized">
    <table>
		<?php $i = 1;
		foreach ( $table as $column ): ?>
            <tr>
				<?php if ( $i == 1 ): ?>
					<?php if ( ! empty( $column[ 'td_1' . get_lang() ] ) ): ?>
                        <th><?php echo $column[ 'td_1' . get_lang() ]; ?></th>
					<?php endif; ?>
					<?php if ( ! empty( $column[ 'td_2' . get_lang() ] ) ): ?>
                        <th><?php echo $column[ 'td_2' . get_lang() ]; ?></th>
					<?php endif; ?>
					<?php if ( ! empty( $column[ 'td_3' . get_lang() ] ) ): ?>
                        <th><?php echo $column[ 'td_3' . get_lang() ]; ?></th>
					<?php endif; ?>
					<?php if ( ! empty( $column[ 'td_4' . get_lang() ] ) ): ?>
                        <th><?php echo $column[ 'td_4' . get_lang() ]; ?></th>
					<?php endif; ?>
					<?php if ( ! empty( $column[ 'td_5' . get_lang() ] ) ): ?>
                        <th><?php echo $column[ 'td_5' . get_lang() ]; ?></th>
					<?php endif; ?>
					<?php if ( ! empty( $column[ 'td_6' . get_lang() ] ) ): ?>
                        <th><?php echo $column[ 'td_6' . get_lang() ]; ?></th>
					<?php endif; ?>
				<?php else: ?>
					<?php if ( ! empty( $column[ 'td_1' . get_lang() ] ) ): ?>
                        <td><?php echo $column[ 'td_1' . get_lang() ]; ?></td>
					<?php endif; ?>

					<?php if ( ! empty( $column[ 'td_2' . get_lang() ] ) ): ?>
                        <td><?php echo $column[ 'td_2' . get_lang() ]; ?></td>
					<?php endif; ?>
					<?php if ( ! empty( $column[ 'td_3' . get_lang() ] ) ): ?>
                        <td><?php echo $column[ 'td_3' . get_lang() ]; ?></td>
					<?php endif; ?>
					<?php if ( ! empty( $column[ 'td_4' . get_lang() ] ) ): ?>
                        <td><?php echo $column[ 'td_4' . get_lang() ]; ?></td>
					<?php endif; ?>
					<?php if ( ! empty( $column[ 'td_5' . get_lang() ] ) ): ?>
                        <td><?php echo $column[ 'td_5' . get_lang() ]; ?></td>
					<?php endif; ?>
					<?php if ( ! empty( $column[ 'td_6' . get_lang() ] ) ): ?>
                        <td><?php echo $column[ 'td_6' . get_lang() ]; ?></td>
					<?php endif; ?>
				<?php endif; ?>
            </tr>
			<?php $i ++; endforeach; ?>
    </table>
</div>

