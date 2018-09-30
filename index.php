<?php get_header(); ?>
<div>
    <?php
        $the_query = new WP_Query( array(
        'category_name' => 'Uncategorized',
        ));
    ?>
    <script type="text/javascript">
        function openURL(url) {
            window.open(url, '_self')
        }
    </script>
    <div>
    <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="row blog-post" onclick="openURL('<?php the_permalink(); ?>')">
        <div class="col-md-12">
            <h2>
                <?php the_title(); ?>
            </h2>
            <p>
                Posted on <?php $the_date = mysql2date( get_option( 'date_format' ), $post->post_date ); echo $the_date; ?> by <?php the_author(); ?>
            </p>
            <div>
                <?php the_excerpt(); ?>
            </div>
            <p>
                <?php $totalcomments = get_comments_number(); echo $totalcomments; ?> comment(s)
            </p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
<?php
get_search_form();
the_widget( 'WP_Widget_Recent_Posts' );
?>
<?php get_footer(); ?>