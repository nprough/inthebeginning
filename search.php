<?php get_header(); ?>
<div>
    <div>
    <div><?php get_search_form(); ?></div>
    <?php if ( have_posts() ) : ?>
        <header class="page-header">
            <span class="search-page-title"><?php printf( esc_html__( 'Search Results for: %s', stackstar ), '<span>' . get_search_query() . '</span>' ); ?></span>
        </header>
        <script type="text/javascript">
            function openURL(url) {
                window.open(url, '_self')
            }
        </script>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="search-result" onclick="openURL('<?php the_permalink(); ?>')">
            <span class="search-post-title"><?php the_title(); ?></span>
            <span class="search-post-excerpt"><?php the_excerpt(); ?></span>
        </div>
        <?php endwhile; ?>
    <?php else : ?>
        Nothing found
    <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>