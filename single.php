<?php get_header();
?>
<section class="post">
  <div class="wrapper post__wrapper">
    <img class="post__img" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h2 class="post__title"><?php the_title(); ?></h2>
    <p class="post__text"><?php the_content(); ?></p>

  </div>
</section>

<?php get_footer(); ?>