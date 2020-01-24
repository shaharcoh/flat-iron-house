<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">



	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

		<footer class="entry-footer">
			<div class="row">
			<?php if(get_field('custom_footer', 'options')): ?>
			<?php while(has_sub_field('custom_footer', 'options')): ?>
			<div class="col-md-4 footer-col social-media-col">
				<?php if( have_rows('social_media') ): ?>
				<?php while( have_rows('social_media') ): the_row(); ?>
					<?php $icon = get_sub_field('social_media_icon'); ?>
					<?php $url = get_sub_field('social_media_url'); ?>
					<a href="<?php echo $url ?>"><img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>"></a>
					<?php endwhile; ?>
                    <?php endif; ?>
				</div>
			
			<div class="col-md-4 footer-col">
				<?php $logo = get_sub_field('footer_logo'); ?>
				<img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>">
				</div>

			<div class="col-md-4 footer-col">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				</div>
				<?php endwhile; ?>
            	<?php endif; ?>
			</div>

			</div>

			
		</footer><!-- .entry-footer -->

</article><!-- #post-## -->
