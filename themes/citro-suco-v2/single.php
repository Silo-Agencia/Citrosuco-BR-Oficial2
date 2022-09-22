<?php require_once 'header.php'; ?>

<?php 
    $uri = $_SERVER['REQUEST_URI'];
    $barramento =  array("/");
    $hifen = array("" );
    $new_uri = str_replace($barramento, $hifen, $uri);
?>

<main id="<?php echo $new_uri ?>" class="<?php echo $new_uri . '-single' ?> empreendimentos">
    <?php 

    if(have_posts()):
        while(have_posts()):
            the_post();
    ?>
    <div class="container-single-noticias">
        <section>
            <div class="img-single-noticias">
                <?php the_post_thumbnail(); ?>
            </div>
        </section>
        <section class="container-article">
            <h1 class="title-noticias"><?php the_title(); ?></h1>
            <article class="article-noticias"><?php the_content(); ?></article>
        </section>
    </div>
    
    <?php
            endwhile;
        endif;
    ?>

<?php require_once 'footer.php'; ?>