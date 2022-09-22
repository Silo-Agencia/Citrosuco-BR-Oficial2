<?php require_once 'header.php'; ?>

<?php 
    $uri = $_SERVER['REQUEST_URI'];
    $barramento =  array("/");
    $hifen = array("" );
    $new_uri = str_replace($barramento, $hifen, $uri);
?>

<main id="<?php echo $new_uri ?>" class="<?php echo $new_uri . '-single' ?> noticias">

    <div id="banner" class="banner-single">
        <div id="demo" class="carousel slide" data-ride="carousel">
         <!-- <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul> -->

            <div class="carousel-inner">
                <div class="carousel-item active banner-single-carousel">
                    <img src = "../wp-content/uploads/2021/01/banner-single.png">
                </div>
            </div>
        </div>
    </div>
    <div class="container-single-dicas blog-dicas">
        <?php echo do_shortcode('[the_grid name="noticias"]'); ?>
    </div>

<?php require_once 'footer.php'; ?>