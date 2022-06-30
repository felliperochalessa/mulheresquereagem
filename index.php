<?php get_header(); ?>
<main>
  <section class="hero">
    <div class="wrapper hero__wrapper">
      <img class="hero__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.jpg" alt="" />
      <h1 class="hero__title">
        Por um amanhã mais igualitário com mulheres empoderadas.
      </h1>
    </div>
  </section>
  <section class="actions">
    <div class="wrapper actions__wrapper">
      <div class="actions__heading">
        <h5 class="actions__subtitle">CONHEÇA AS</h5>
        <h2 class="actions__title">Nossas ações</h2>
      </div>
      <div class="actions__list">
        <div class="action-card">
          <img class="action-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/cursos.jpg"
            alt="" />
          <h4 class="action-card__text">CURSOS E CAPTAÇÃO</h4>
        </div>
        <div class="action-card">
          <img class="action-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/advocacy.jpg"
            alt="" />
          <h4 class="action-card__text">ADVOCACY</h4>
        </div>
        <div class="action-card">
          <img class="action-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/debates.jpg"
            alt="" />
          <h4 class="action-card__text">DEBATES</h4>
        </div>
        <div class="action-card">
          <img class="action-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/saude.jpg"
            alt="" />
          <h4 class="action-card__text">SAÚDE DA MULHER</h4>
        </div>
        <div class="action-card">
          <img class="action-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/rede.jpg"
            alt="" />
          <h4 class="action-card__text">REDE</h4>
        </div>
      </div>
    </div>
  </section>
  <section class="latest-news">
    <div class="wrapper latest-news__wrapper">
      <div class="latest-news__heading">
        <h5 class="latest-news__subtitle">ACOMPANHE</h5>
        <h2 class="latest-news__title">Nossas novidades</h2>
      </div>
      <div class="latest-news__list">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
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
      <div class="latest-news__button">
        <a href="<?php echo get_permalink(11); ?>" class="btn btn--lilas">Mais notícias</a>
      </div>
    </div>
  </section>
  <section class="cta">
    <div class="wrapper cta__wrapper">
      <img class="cta__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/cta.jpg" alt="" />
      <h2 class="cta__title">
        Você sabia que com apenas 20 reais por mês você contribui para empoderar mulheres a transformarem o mundo?
      </h2>
      <a href="<?php echo get_permalink(17); ?>" class="btn btn--amarelo">Veja como contribuir</a>
    </div>
  </section>
  <section class="partners">
    <div class="wrapper partners__wrapper">
      <div class="partners__heading">
        <h5 class="partners__subtitle">CONHEÇA</h5>
        <h2 class="partners__title">Nossos parceiros</h2>
      </div>
      <div class="partners__list">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro01.png" alt=""
          class="partner-card" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro02.png" alt=""
          class="partner-card" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro03.png" alt=""
          class="partner-card" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro04.png" alt=""
          class="partner-card" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro05.png" alt=""
          class="partner-card" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro06.png" alt=""
          class="partner-card" />
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>