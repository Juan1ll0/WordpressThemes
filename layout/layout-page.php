<body>
    <div class="container">
        <?php include (TEMPLATEPATH . '/components/head.php'); ?>

        <?php include (TEMPLATEPATH . '/components/nav-main.php'); ?>

        <?php
            if (is_page('localizacion'))
                get_template_part('/layout/main-contact', 'content');
            else
                get_template_part('/layout/main-content-two-cols', 'content');
        ?>

        <?php get_footer(); ?>
    </div>
