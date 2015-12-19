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
        
    
        <footer class="entry-footer">
            <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list( __( ', ', 'my-simone' ) );
                    if ( $categories_list && my_simone_categorized_blog() ) :
                ?>
                <span class="cat-links">
                    <?php printf( __( 'Posted in %1$s', 'my-simone' ), $categories_list ); ?>
                </span>
                <?php endif; // End if categories ?>
    
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list( '', __( ', ', 'my-simone' ) );
                    if ( $tags_list ) :
                ?>
                <span class="tags-links">
                    <?php printf( __( 'Tagged %1$s', 'my-simone' ), $tags_list ); ?>
                </span>
                <?php endif; // End if $tags_list ?>
            <?php endif; // End if 'post' == get_post_type() ?>
    
            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'my-simone' ), __( '1 Comment', 'my-simone' ), __( '% Comments', 'my-simone' ) ); ?></span>
            <?php endif; ?>
    
        </footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
