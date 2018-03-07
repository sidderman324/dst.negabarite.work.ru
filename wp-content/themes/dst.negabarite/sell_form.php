<?php
/*
 * Template name: Форма продажи техники
 */
?>
<?php 
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-admin/includes/image.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-admin/includes/file.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-admin/includes/media.php' );
?>
<?php get_header(); ?>

<div class="breadcrumbs">
  <div class="container breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__current">Продать технику</span>
  </div>
</div>
<div class="container">
  <div class="form__title-wrapper">
    <h2 class="form__title"><?php the_title(); ?></h2>
  </div>
</div>

<?php
$args = array();
$posts = new WP_Query( $args );
while( $posts->have_posts() ) :

  $posts->the_post();

endwhile;
wp_reset_postdata();
?>

<div class="form">
  <div class="container">
    <?php the_content(); ?>
  </div>
</div>


<?php get_footer(); ?>