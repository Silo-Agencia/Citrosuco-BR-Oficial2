<?php get_header(); ?>

<section class="container-home"></section>
<section class="container-banner">
    <div id="carouselExampleSlidesOnly" class="carousel slide home-carousel" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/02/banner-fale-conosco.jpg" alt="Banner Home">
            </div>
            <!-- <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
            </div> -->
        </div>
    </div>
</section>

<section>
    <?php echo do_shortcode('[contact-form-7 id="133" title="Formulário de contato 1"]'); ?>
</section>

<?php get_footer();