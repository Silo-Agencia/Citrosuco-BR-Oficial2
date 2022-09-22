<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php the_title(); ?></title>
        <link rel="prefetch" href="<?php echo get_template_directory_uri(); ?>/assets/img/loading.gif" />
    </head>
    <body id="<?php echo "page-".$page_id ?>" class="bg-white <?php echo "page".$page_id ?>">
        <section class="single-img">
            <?php if (get_field('url')): ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/info/<?php the_field('url'); ?>" />
            <?php else: ?>
                <img src="<?php the_field('imagem'); ?>" />
            <?php endif; ?>
        </section>
    </body>
    <style type="text/css">
        * {
            -webkit-user-select: none;
            user-select: none;
            pointer-events: none;
        }
        body {
            margin: 0px;
        }
        .load {
            display: none;
        }
        .single-img img {
            max-width: 100%;
            width: 100%;
        }
    </style>
    <script type="text/javascript">
        const img = document.querySelector('img')
        img.ondragstart = () => {
            return false;
        };
    </script>
</html>
<?php endwhile; ?>
<?php endif;?>