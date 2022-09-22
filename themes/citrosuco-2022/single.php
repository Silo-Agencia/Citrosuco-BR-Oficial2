<?php get_header(); ?>

    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>

    <section class="single">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="img-single-noticias">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <section class="container-article">
                        <h1 class="title-noticias"><?php the_title(); ?></h1>
                        <article class="article-noticias"><?php the_content(); ?></article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    
    <?php endwhile; ?>
    <?php endif;?>

<?php get_footer();