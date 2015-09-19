<body>
    <div class="container">
        <?php
            get_template_part('/components/head');

            get_template_part('/components/nav-main');

            if (is_page('localizacion'))
                get_template_part('/layout/main-contact', 'content');
            else
                get_template_part('/layout/main-two-cols', 'content');
        ?>

        <?php get_footer(); ?>
    </div>
