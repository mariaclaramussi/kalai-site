<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/ec34bba31e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header
        class="header <?php if(is_page_template('page-about.php') || is_page_template('page-projetos.php') || is_page_template('page-servicos.php')): ?><?php echo 'white-background'?><?php else: ?><?php echo 'clear-background'?><?php endif; ?>">
        <div class="container">
            <div class="row">
                <div class="align-items-desktop">
                    <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kalai-logo.svg"
                            alt="Logo do estúdio">
                    </a>

                    <input class="menu-btn" type="checkbox" id="menu-btn" />
                    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

                    <div class="menu">
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/o-estudio">O estúdio</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/servicos">Serviços</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/projetos">Projetos</a></li>
                            <li><a id="faq-anchor" href="<?php echo get_site_url(); ?>/servicos/#faq">FAQ</a></li>
                            <li><a href="https://n2nix0rn.forms.app/orcamento" target="_blank"
                                    class="black-button">Solicite um <br />orçamento</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <a class="fixed-wpp-btn <?php if(is_page_template('page-about.php') || is_page_template('page-projetos.php') || is_page_template('page-servicos.php')): ?><?php echo ''?><?php else: ?><?php echo 'hide'?><?php endif; ?>"
        href="https://api.whatsapp.com/send/?phone=552139622989&text=Ol%C3%A1,+gostaria+de+mais+informa%C3%A7%C3%B5es+sobre+os+servi%C3%A7os+prestados+pelo+Est%C3%BAdio+Kalai.+Poderia+me+ajudar%2C+por+favor%3F&type=phone_number&app_absent=0"
        target="_blank" class="whatsapp-button">
        <i class="fa-brands fa-whatsapp"></i></a>