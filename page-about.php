<?php
/*
Template Name: O estúdio
*/
 
get_header(); ?>

<section id="estudio-page" data-aos="zoom-in" data-aos-duration="500">
    <div class="container">
        <?php
        while ( have_posts() ) : the_post();  
            the_content();
        endwhile;
    ?>
    </div>
</section>

<?php
get_footer();