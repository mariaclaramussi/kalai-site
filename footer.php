<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kalai-logo-white.svg"
                    alt="Logo do estúdio">
                <p>Explorando ideias e desafiando o convencional.</p>
                <a href="https://api.whatsapp.com/send/?phone=552139622989&text=Ol%C3%A1,+gostaria+de+mais+informa%C3%A7%C3%B5es+sobre+os+servi%C3%A7os+prestados+pelo+Est%C3%BAdio+Kalai.+Poderia+me+ajudar%2C+por+favor%3F&type=phone_number&app_absent=0"
                    class="contact">Entre em contato</a>
            </div>
            <div class="col-md-6">
                <div class="align-social-media">
                    <a href="https://www.behance.net/estudiokalai" target="_blank"><i
                            class="fa-brands fa-behance"></i></a>
                    <a href="https://www.instagram.com/estudiokalai/" target="_blank"> <i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=552139622989&text=Ol%C3%A1,+gostaria+de+mais+informa%C3%A7%C3%B5es+sobre+os+servi%C3%A7os+prestados+pelo+Est%C3%BAdio+Kalai.+Poderia+me+ajudar%2C+por+favor%3F&type=phone_number&app_absent=0"
                        target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://br.pinterest.com/estdiokalai/" target="_blank"><i
                            class="fa-brands fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</footer>


<?php wp_footer(); ?>

</body>

</html>