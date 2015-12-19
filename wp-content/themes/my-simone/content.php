<?php
/**
 * @package my-simone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="index-box">
        <header class="entry-header">
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    
            <?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
                <?php my_simone_posted_on(); ?>
                <?php 
					if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { 
						echo '<span class="comments-link">';
						comments_popup_link( __( 'Leave a comment', 'my-simone' ), __( '1 Comment', 'my-simone' ), __( '% Comments', 'my-simone' ) );
						echo '</span>';
					}
				?>
                <?php edit_post_link( __( 'Edit', 'my-simone' ), '<span class="edit-link">', '</span>' ); ?>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->
    
        
        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div><!-- .entry-content -->
        
    
        
        <footer class="entry-footer continue-reading">
            <?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading ', 'my-simone') . get_the_title() . '" rel="bookmark">Continue Reading<i class="fa fa-arrow-circle-o-right"></i></a>'; ?>
        </footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
