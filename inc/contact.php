<?php /* Template Name: Contact */ ?>
<?php get_header();
?>
<section class="banner">
  <div class="wrapper banner__wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato-banner.jpg" alt=""
      class="banner__img" />
    <div class="banner__text">
      <h2 class="banner__subtitle">Fale</h2>
      <h1 class="banner__title">Conosco</h1>
    </div>
  </div>
</section>
<section class="contact">
  <div class="wrapper contact__wrapper">
    <div class="box-1">
      <h2 class="contact__title">Fale conosco</h2>

      <div class="contact__contatos">
        <p class="contact__desc">E-mail: contato@mulheresquereagem.com.br</p>
        <p class="contact__desc">Telefone: +55 21 97093-7203 / +55 21 99082-5494</p>
        <p class="contact__desc">Correspondência: Rua Tingua, 327 - Rocha Miranda, Rio de Janeiro, RJ CEP 21540-480</p>

      </div>
      <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="45" title="Fale conosco"]'); ?>
      </div>
    </div>
    <div class="box-2">

      <iframe class="google-map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4372.297433994457!2d-43.346831731821474!3d-22.852463208788848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x996338dc12c8bd%3A0xec14c27a227812d5!2sR.%20P%C3%A3o%20de%20A%C3%A7%C3%BAcar%2C%20340%20-%20Rocha%20Miranda%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2021540-530!5e0!3m2!1spt-PT!2sbr!4v1656012657796!5m2!1spt-PT!2sbr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
  </div>
</section>

<?php get_footer(); ?>