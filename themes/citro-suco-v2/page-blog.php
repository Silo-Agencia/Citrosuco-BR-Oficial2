<?php require_once 'header.php'; ?>

<?php 
    $uri = $_SERVER['REQUEST_URI'];
    $barramento =  array("/");
    $hifen = array("" );
    $new_uri = str_replace($barramento, $hifen, $uri);
?>

<main id="<?php echo $new_uri ?>" class="<?php echo $new_uri . '-single' ?> noticias">

    
    <div class="container-single-dicas blog-dicas">
        <?php echo do_shortcode('[the_grid name="blog"]'); ?>
    </div>

<?php require_once 'footer.php'; ?>