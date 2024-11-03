<?php
/*
Template Name: Projetos
*/
 
get_header();
?>

<section id="projects">
    <?php 
    $posts = get_posts(array(
        'posts_per_page'    => -1,
        'post_type'         => 'projeto'
    ));
    
if( $posts ): ?>
    <?php foreach( $posts as $key=>$post ): 
            setup_postdata( $post );
        ?>

    <div class="project-container" data-aos="fade-up" data-aos-duration="1500"
        data-aos-offset="<?php echo ($key+1)*100 ?>">
        <div class="images-container">
            <?php if( get_field("capa_do_projeto") ): ?>
            <img class="project-image" src="<?php echo get_field("capa_do_projeto")['url']; ?>"
                alt="<?php echo get_field("capa_do_projeto")['alt']; ?>" />
            <?php endif; ?>
            <?php if( get_field("imagem_1") ): ?>
            <img class="project-image" src="<?php echo get_field("imagem_1")['url']; ?>"
                alt="<?php echo get_field("imagem_1")['alt']; ?>" />
            <?php endif; ?>
            <?php if( get_field("imagem_2") ): ?>
            <img class="project-image" src="<?php echo get_field("imagem_2")['url']; ?>"
                alt="<?php echo get_field("imagem_2")['alt']; ?>" />
            <?php endif; ?>
        </div>

        <div class="overlay-project-content">
            <h2><?php the_title(); ?></h2>
            <div class="project-description-content">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </div>

    <?php endforeach; ?>

    <?php wp_reset_postdata(); ?>

    <?php endif; ?>
</section>

<?php
get_footer();