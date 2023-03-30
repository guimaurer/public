<?php
function ultimos_posts() {
  $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
  );
  $ultimos_posts = new WP_Query($args);
  ob_start();
?>

  <div class="container post-container">
      <h2>Últimas publicações</h2>
      <div class="pagbrasilpost d-flex flex-row">
      <?php while ($ultimos_posts->have_posts()) : $ultimos_posts->the_post(); ?>
          <div class="card mb-3">
          <?php the_post_thumbnail( 'medium', array( 'class' => 'card-img-top' ) ); ?>
              <div class="card-body">
                  <h5 class="card-title"><?php the_title(); ?> </h5>
                  <p class="card-text"><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary">Ver mais</a>
              </div>
          </div>
      <?php endwhile; ?>
      </div>
  </div>

<?php
  wp_reset_query();
  return ob_get_clean();
}

add_shortcode('ultimas_publicacoes', 'ultimos_posts');

?>