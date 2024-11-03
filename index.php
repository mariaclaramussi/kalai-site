<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up" data-aos-duration="1500">
                <h1>Explorando ideias <br />e desafiando o convencional.</h1>
                <h2>Marcas para pequenos empreendedores.</h2>
            </div>
        </div>
    </div>
</section>

<section class="effect-paragraph">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="100">
                <h2>
                    Um bom design não apenas <br />comunica, ele cativa e conecta.
                </h2>


                <?php
                    $posts = get_posts(array(
                        'posts_per_page'    => 1,
                        'post_type'         => 'apresentacao'
                        ));
                    if( $posts ): ?>
                <?php foreach( $posts as $post ): 
                        setup_postdata( $post );
                    ?>

                <span data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="200"><?php the_content(); ?></span>
                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<section id="services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Serviços</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="100">
                    <div class="align-itens-title">
                        <span>01</span>
                        <h4>Identidade <br />visual</h4>
                    </div>

                    <ul>
                        <li>Pesquisa</li>
                        <li>Estratégia</li>
                        <li>Universo de marca</li>
                        <li>Aplicações</li>
                    </ul>
                    <a href="<?php echo get_site_url(); ?>/servicos" target="_blank" rel="noopener noreferrer"
                        class="black-button">Saiba mais</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="100">
                    <div class="align-itens-title">
                        <span>02</span>
                        <h4>Naming</h4>
                    </div>

                    <ul>
                        <li>Pesquisa</li>
                        <li>Palavras-chave</li>
                        <li>Disponibilidade</li>
                        <li>Registro de marca</li>
                    </ul>

                    <a href="<?php echo get_site_url(); ?>/servicos" target="_blank" rel="noopener noreferrer"
                        class="black-button">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="owl-carousel projects-pics">
        <?php 
                $posts = get_posts(array(
                    'posts_per_page'    => 1,
                    'post_type'         => 'galeria_de_projeto'
                ));
                $images = acf_photo_gallery('imagens_de_projeto', $posts[0]->ID);
           if( count($images) ): ?>
        <?php foreach($images as $image): 
            $id = $image['id'];    
            $full_image_url= $image['full_image_url'];
        ?>
        <div class="item">
            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
        </div>
        <?php endforeach; endif; ?>
    </div>
</section>

<section id="statements-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Depoimentos</h3>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel statements">
                <?php 
                    $posts = get_posts(array(
                        'posts_per_page'    => -1,
                        'post_type'         => 'depoimento'
                    ));
                    
                if( $posts ): ?>
                <?php foreach( $posts as $post ): 
                    setup_postdata( $post );
                ?>
                <div class="item">
                    <div class="card">
                        <div class="align-author-info">
                            <?php if( get_field("imagem_de_perfil") ): ?>
                            <img src="<?php echo get_field("imagem_de_perfil")['url']; ?>"
                                alt="<?php echo get_field("imagem_de_perfil")['alt']; ?>" />
                            <?php endif; ?>
                            <h4><?php the_title(); ?></h4>
                        </div>
                        <p><?php echo get_field("depoimento") ?></p>
                        <a target="_blank" href="<?php echo esc_attr( get_field('link_do_projeto') ); ?>"
                            class="black-button">Ver
                            projeto</a>
                    </div>
                </div>
                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();