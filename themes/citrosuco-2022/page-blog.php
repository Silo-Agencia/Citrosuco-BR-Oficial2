<?php get_header(); ?>

<section class="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <?php echo do_shortcode('[the_grid name="blog"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();