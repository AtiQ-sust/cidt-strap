<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="row">
					<div class='col-sm-12'  style='background-color:#3197d6; color:#ddd'>
					/Blog/ <?php the_title( '<h1 class="entry-title" style="color:#fff">', '</h1>' ); ?>	
					</div>					
					

	</div>

	<div class="row">
	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
	</div>

		<div class="entry-meta">
			<div>
		<?php echo get_the_category_list(); ?>			
			</div>
			<div>
			<?php understrap_posted_on(); ?>
			</div>
			<div>
		<?php echo get_the_tag_list('<ul class="post-tags"><li>','</li><li>','</li></ul>'); ?>
			</div>

		</div><!-- .entry-meta -->

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php /*understrap_entry_footer();*/ ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
