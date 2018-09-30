<?php
// When opening a post, this is the page that will display the post.
?>
<?php get_header(); ?>
<div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div>
        <h2><?php the_title(); ?></h2>
    </div>
    <div>
        <?php the_content(); ?>
    </div>
    <?php
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>