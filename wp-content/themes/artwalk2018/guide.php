<?php
/**
* Template Name: guide
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

?>
<?php  get_header(); ?>
<main>
    <h1>Event guide</h1>
    <?php if( have_rows('image') ): ?>
    <?php while( have_rows('image') ): the_row(); 

        // vars
        $img = get_sub_field('img');

        ?>
        <img src="<?php echo $img; ?>" class="guide-img">
    <?php endwhile; endif; ?>
    <a class="download" href="<?php bloginfo('template_url'); ?>/assets/file/awli_eventguide.pdf" download>
        <span>Download</span>
    </a>
</main>
<?php get_footer(); ?>