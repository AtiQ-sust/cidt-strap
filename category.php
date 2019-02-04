<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part('templates/global/hero', 'none' ); ?>
<?php endif; ?>

<div class="xwrapper" id="wrapper-index">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="no-class">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php /*get_template_part( 'templates/global/left-sidebar-check', 'none' );*/ ?>

			<main class="site-main" id="main">
				<div class="row">
					<div class='col-sm-12'  style='background-color:#3197d6; color:#ddd'>
					/Category/ <h1 style='color:#fff;margin-bottom:5px;'><?php single_cat_title(); ?></h1>
					<?php the_archive_description( '<div class="taxonomy-description"><p>', '</p></div>' );	?>		
					</div>
				</div>
				<?php 
				$arr = array(
					'post_type' 		=> 'post',
					'posts_per_page' 	=> 4,
					'orderby' 			=> 'date',
					'order'				=> 'DESC',
					'post_status'		=> 'publish'
				);
				//$query = new WP_Query($arr);				
				if (have_posts() ) : ?>

					<?php /* Start the Loop */ 
					$row_type = 1; 
					$is_row_full = true; 
					$col_current = 1;
					?>

					<?php 
					while ( have_posts() ) : 
						the_post(); 
						//$GLOBALS['row_type'] = $row_type;
						if ($row_type == 1) {
							if ($col_current == 1){
							?>
							<div class="row">
								<div class="col-sm-12">
									<?php $GLOBALS['row_type'] = $row_type; get_template_part( 'templates/loop/content', 'post-list' ); ?>
								</div>
							</div>
							<?php
								$row_type = 2; $col_current = 1; $is_row_full = true;
							}
						}
						elseif($row_type == 2){
							if ($col_current == 1){
							?>
							<div class="row">
								<div class="col-sm-8">
									<?php $GLOBALS['row_type'] = $row_type; get_template_part( 'templates/loop/content', 'post-list' ); ?>
								</div>
							<?php
								$col_current++; $is_row_full = false;
							}
							elseif($col_current==2){
							?>
								<div class="col-sm-4">
									<?php $GLOBALS['row_type'] = $row_type; get_template_part( 'templates/loop/content', 'post-list' ); ?>
								</div>
							</div>
							<?php
								$row_type = 3; $col_current = 1; $is_row_full = true;
							}
						}
						elseif($row_type == 3){
							if ($col_current == 1){
							?>
							<div class="row">
								<div class="col-sm-4">
									<?php $GLOBALS['row_type'] = $row_type; get_template_part( 'templates/loop/content', 'post-list' ); ?>
								</div>
							<?php
								$col_current++; $is_row_full = false;
							}
							elseif($col_current==2){
							?>
								<div class="col-sm-8">
									<?php $GLOBALS['row_type'] = $row_type; get_template_part( 'templates/loop/content', 'post-list' ); ?>
								</div>
							</div>
							<?php
								$row_type = 4; $col_current = 1; $is_row_full = true;
							}
						}
						elseif($row_type == 4){
							if ($col_current == 1){
							?>
							<div class="row">
								<div class="col-sm-4">
									<?php $GLOBALS['row_type'] = $row_type; get_template_part( 'templates/loop/content', 'post-list' ); ?>
								</div>
							<?php
								$col_current++; $is_row_full = false;
							}
							elseif($col_current==2){
							?>
								<div class="col-sm-4">
									<?php $GLOBALS['row_type'] = $row_type; get_template_part( 'templates/loop/content', 'post-list' ); ?>
								</div>
							<?php
								$col_current++; $is_row_full = false;
							}
							elseif($col_current==3){
							?>
								<div class="col-sm-4">
									<?php $GLOBALS['row_type'] = $row_type; get_template_part( 'templates/loop/content', 'post-list' ); ?>
								</div>
							</div>
							<?php
								$row_type = 1; $col_current = 1; $is_row_full = true;
							}
						}
						
					endwhile; 
					
					if ($is_row_full == false){
						?>
							</div>
						<?php
					}
					?>

				<?php else : ?>

					<?php get_template_part( 'templates/loop/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php get_sidebar( 'right' ); ?>

		<?php endif; ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
