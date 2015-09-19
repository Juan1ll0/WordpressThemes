<body>
    <div class="container">
    <?php
        get_template_part('/layout/header');

        get_template_part('/components/nav-main');

        get_template_part('/layout/main-two-cols', 'content');

        get_template_part('/layout/footer');
    ?>
    </div>
</body>
</html>
