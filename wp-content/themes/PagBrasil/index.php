<?php get_template_part( 'template-parts/content/head' ); ?>
<?php get_template_part( 'template-parts/content/header' ); ?>

<?php
if (is_front_page()) {
  get_template_part('template-parts/content/slider');
} else {
  get_template_part('template-parts/content/hero');
}
?>

  

  <div class="container my-5">
    <?php the_content(); ?>
  </div>

  <?php get_template_part( 'template-parts/content/footer' ); ?>
