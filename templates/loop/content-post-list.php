<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<div class="xrow">
			<?php
			$thumb_size = "";
			$row_type = $GLOBALS["row_type"];
			//echo "ROW TYPE IS: ". $row_type;

			switch ($row_type){
				case 1:
					$thumb_size = "full";
					break;
				case 2:
					$thumb_size = "large";
					break;
				case 3:
					$thumb_size = "large";
					break;
				case 4:
					$thumb_size = "medium";
					break;
			}
			if ($thumb_size=='full'){
				//echo "Thumb_size is $thumb_size";
				echo "<div class='row'>" . get_the_post_thumbnail( $post->ID, /*$thumb_size*/ 'full' ) . "</div>"; 
			}
			else{
				//echo "Other Thumb_size is $thumb_size";
				echo get_the_post_thumbnail( $post->ID, $thumb_size ); 
			}
			?>

			
		</div>		
			<?php echo get_the_category_list(); ?>
			
			<header class="entry-header">

				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>' ); ?>

				<?php echo get_the_tag_list('<ul class="post-tags"><li>','</li><li>','</li></ul>'); ?>
				
				<?php if ( 'post' == get_post_type() ) : ?>

					<div class="entry-meta">
						<?php understrap_posted_on(); ?>
					</div><!-- .entry-meta -->

				<?php endif; ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
			
				<?php
				the_excerpt();
				?>

				<?php /*
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
				*/ ?>

			</div><!-- .entry-content -->

			<footer class="entry-footer">

				<?php /* understrap_entry_footer(); */?>

			</footer><!-- .entry-footer -->

	
	
</article><!-- #post-## -->
