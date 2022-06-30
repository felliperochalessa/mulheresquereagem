<?php /* Template Name: News */ ?>
<?php get_header();
?>
<section class="banner">
  <div class="wrapper banner__wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/novidades-banner.jpg" alt=""
      class="banner__img" />
    <div class="banner__text">
      <h2 class="banner__subtitle">ACOMPANHE</h2>
      <h1 class="banner__title">Nossas novidades</h1>
    </div>
  </div>
</section>
<section class="news">
  <div class="wrapper news__wrapper">
    <div class="news__list">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
      );

      $postlist = new WP_Query($args);

      if ($postlist->have_posts()) :
        while ($postlist->have_posts()) : $postlist->the_post();
      ?>
      <div class="news-card">
        <div class="news-card__header">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
        </div>
        <div class="news-card__body">
          <h3 class="news-card__title">
            <?php the_title(); ?>
          </h3>
          <p class="news-card__description">
            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
          </p>
        </div>
        <div class="news-card__footer">
          <a href="<?php the_permalink(); ?>" class="btn btn--amarelo">Saiba mais</a>
        </div>
      </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else : ?>
      <p>Nenhum post</>
        <?php endif; ?>
    </div>
    <div class="news__button">
      <a href="#" class="btn btn--lilas">Mais notícias</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>