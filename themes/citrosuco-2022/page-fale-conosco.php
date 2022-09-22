<?php get_header(); ?>

<section class="sliderTopo">
    <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-fale.png">
    </div>
</section>

<section>
    <?php echo do_shortcode('[contact-form-7 id="133" title="Formulário de contato 1"]'); ?>
</section>

<?php get_footer();