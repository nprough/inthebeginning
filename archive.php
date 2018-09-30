<?php
// This is the archives of your website.
// Shows posts in the format you choose.
?>
<?php get_header(); ?>
<!--<?php wp_get_archives('type=daily'); ?>-->
<!--<?php wp_get_archives('type=monthly'); ?>-->
<!--<?php wp_get_archives('type=yearly'); ?>-->
<?php wp_get_archives('type=postbypost'); ?>
<?php get_footer(); ?>