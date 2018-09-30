<?php
// Displays Comments, use the comments_template() function to add to a post page.
?>
<?php
if ( post_password_required() )
    return;
?>
<div class="comments">
    <?php comment_form(); ?>
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                printf( _nx( '1 comment', '%1$s comment(s)', get_comments_number(), 'comments title', 'InTheBeginning' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 50,
                ) );
            ?>
        </ol>
 
        <?php
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'InTheBeginning' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'InTheBeginning' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'InTheBeginning' ) ); ?></div>
        </nav>
        <?php endif; ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'There are no comments.' , 'InTheBeginning' ); ?></p>
        <?php endif; ?>
 
    <?php endif; ?>
 
</div>