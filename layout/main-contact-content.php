<main>
    <h1><?php echo the_title() . "..."; ?></h1>
    <section class="contexto">
        <h2>Informaci&oacute;n...</h2>
        <article class="contenido">
        <?php
            if ( have_posts() ) {
                while (have_posts()) {
                    the_post();
                }
            }

          $posttext = $post->post_content;

          // Extraer las imagenes y guardarlas en $images
          $regexMap = '/\\[flexiblemap.*\\]/i';
          preg_match_all($regexMap, $posttext, $maps);

          $regexContactForm = '/\\[contact-form-7.*\\]/i';
          preg_match_all($regexContactForm, $posttext, $contactForms);

          if (count($maps[0]) || count($contactForms[0])) {
            // Eliminar las imagenes del post.
            $posttext = preg_replace($regexMap, '', $posttext);
            $posttext = preg_replace($regexContactForm, '', $posttext);

        ?>
            <div class="post-texto multiple">
              <?php
                    echo $posttext;
              ?>
            </div>

            <div class='post-mapa'>
              <?php
                    echo '<figure>';
                    echo do_shortcode($maps[0][0]);
                    echo '</figure>';
              ?>
            </div>

        <?php } else { ?>
            <div class="post-texto single">
              <?php the_content(); ?>
            </div>
        <?php } ?>

        </article>
        <h2>Formulario de contacto</h2>
        <article class="extra">

            <?php echo do_shortcode( $contactForms[0][0] ); ?>
        </article>
    </section>
</main>
