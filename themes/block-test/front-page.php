<?php
/**
 * The main template file
 * Template Name: Homepage
 *
 * @package block_test
 */

get_header();
?>



<div class="page-name">
    <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content', 'page' );
        endwhile; // End of the loop.
    ?>
</div>


<?php

get_footer();
?>