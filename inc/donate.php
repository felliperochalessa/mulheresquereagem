<?php /* Template Name: Donate */ ?>
<?php get_header();
?>
<section class="banner">
  <div class="wrapper banner__wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contribua-banner.jpg" alt=""
      class="banner__img" />
    <div class="banner__text">
      <h2 class="banner__subtitle">FAÇA SUA</h2>
      <h1 class="banner__title">Contribuição</h1>
    </div>
  </div>
</section>
<section class="donate">
  <div class="wrapper donate__wrapper">
    <div class="donate__heading">
      <h2 class="donate__title">Aqui sua doação empodera</h2>
      <p class="donate_desc">
        Todas as doações são 100% empregadas nas ações com nossas mulheres.Aqui sua doação empodera mulheres.
      </p>
    </div>
    <div class="donate__list">
      <div class="donate__deposito">
        <h3 class="donate__deposito--title">Depósito em conta</h3>
        <p class="donate__deposito--subtitle">Você pode fazer um depósito na nossa conta corrente:</p>
        <p class="donate__deposito--text">BANCO CORA - 403 AGENCIA 0001 CONTA CORRENTE 2160611-2</p>
        <p class="donate__deposito--text">PIX CNPJ 43.777.078/0001-20</p>
      </div>
      <div class="donate__paypal">
        <h3 class="donate__paypal--title">Doação pelo Paypal</h3>
        <p class="donate__paypal--subtitle">A doação por paypal é simples e rápida.</p>

        <form action="https://www.paypal.com/donate" method="post" target="_top">
          <input type="hidden" name="hosted_button_id" value="2RNPAQWA7NJTG" />
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit"
            title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
          <img alt="" border="0" src="https://www.paypal.com/en_BR/i/scr/pixel.gif" width="1" height="1" />
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>