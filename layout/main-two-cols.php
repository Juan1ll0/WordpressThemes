<main>
    <h1><?php echo the_title() . "..."; ?></h1>
    <section class="contexto">
        <article class="contenido">
        <?php
            if ( have_posts() ) {
                while (have_posts()) {
                    the_post();
                }
            }

          $posttext = $post->post_content;

          // Extraer las imagenes y guardarlas en $images
          $regexImages = '~<img [^\>]*\ />~';
          preg_match_all($regexImages, $posttext, $images);

          if (count($images[0])) {
            // Eliminar las imagenes del post.
            $posttext = preg_replace($regexImages, '', $posttext);

            $classExtra = 'single';
            if (count($images[0]) > 1)
                $classExtra = 'multiple';
        ?>
            <div class="post-texto <?php echo $classExtra; ?>">
              <?php echo $posttext; ?>
            </div>

            <div class='post-imagenes'>
              <?php
                  foreach ( $images[0] as $key => $image ) {
                      $regexpAttr = "/(alt|title|src|width|height|class)=(\"[^\"]*\")/i";
                      preg_match_all($regexpAttr, $image, $attr);
                      $attrAltKey = array_keys($attr[1], 'alt')[0];
                      $attrAltValue = str_replace('"', '', $attr[2][$attrAltKey]);

                      if (count($images[0]) > 1)
                          echo '<figure class="'. ($key % 2 == 0 ? 'par' : 'impar') . '">' . $image . '<figcaption>'. $attrAltValue .'</figcaption></figure>';
                      else
                          echo '<figure>' . $image . '<figcaption>'. $attrAltValue .'</figcaption></figure>';
                  }
              ?>
            </div>

        <?php } else { ?>
            <div class="post-texto">
              <?php the_content(); ?>
            </div>
        <?php } ?>

        </article>
    </section>
</main>
