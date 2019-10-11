</div><!-- content -->
<?php osc_run_hook('after-main'); ?>
</div>
<!-- <div id="responsive-trigger"></div> -->
<!-- footer -->

<div class="clear"></div>

<?php osc_show_widgets('footer');?>

<footer id="footer-custom" class="footer-custom">
    <div class="container">
        <div class="row-footer">
            <!-- INICIO Info e Links -->
            <div class="col-md-12 col-lg-8">
                <div class="row-footer">
                    <div class="col-md-12 col-lg-6">
                        <div class="footer-widget footer-right-widget">
                            <div class="section-heading">
                                <h3>Links Úteis</h3>
                            </div>
                            <ul>
                            <?php if( osc_users_enabled() ) { ?>
                                <?php if( osc_is_web_user_logged_in() ) { ?>
                                    <li>
                                        <a href="<?php echo osc_user_dashboard_url(); ?>">Minha Conta</a>
                                    </li>
                                <?php } else { ?>
                                    <li>
                                        <a href="<?php echo osc_user_login_url(); ?>">Entrar</a>
                                    </li>
                                    <?php if(osc_user_registration_enabled()) { ?>
                                        <li>
                                            <a href="<?php echo osc_register_account_url(); ?>">Cadastre-se</a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                                <?php } ?>
                                <?php if( osc_users_enabled() || ( !osc_users_enabled() && !osc_reg_user_post() )) { ?>
                                <li>
                                    <a href="<?php echo osc_item_post_url_in_category(); ?>">Criar Publicação</a>
                                </li>
                                <?php } ?>
                                <?php if( osc_is_web_user_logged_in() ) { ?>
                                        <li>
                                            <a href="<?php echo osc_user_logout_url(); ?>">Sair</a>
                                        </li>
                                <?php } ?>

                            </ul>
                            <ul>
                                <li>
                                    <a href="<?php echo osc_contact_url(); ?>">Nos Contate</a>
                                </li>
                                <li>
                                    <a onclick="setIsNewVisitorCookie()" href="./lp/">Sobre Nós</a>
                                </li>
                                <!-- <li>
                                    <a href="#">Nossa Equipe</a>
                                </li> -->
                            </ul>
                        </div>
                        <!-- FIM Footer Widget -->
                    </div>
                    <!-- FIM col -->
                    <div class="col-md-12 col-lg-6">
                        <div class="footer-widget">
                            <div class="section-heading">
                                <h3>Sobre Nós</h3>
                            </div>
                            <p>
                                Somos uma organização cujo o objetivo é prover uma ferramenta onde todos possam realizar doações, ou buscar por doações sem fins lucrativos. Visando a sustentabilidade.
                            </p>
                        </div>
                        <!-- FIM footer widget -->
                    </div>
                    <!-- FIM Col -->
                </div>
                <!-- FIM Row -->
            </div>
            <!-- FIM Info e Links  -->

            <!-- INICIO Logo e Sobre -->
            <div class="col-md-12 col-lg-4">
                <div class="footer-custom-box-info">
                    <div style="width:115px; margin:auto;">
                        <a href="index.html" class="footer-logo">
                            <img src="<?php echo osc_current_web_theme_url('custom/') ; ?>/img/Logo/logo-footer.png" style="width:115px;" alt="footer_logo" class="img-fluid">
                        </a>
                    </div>
                    <p class="footer-info-text">
                        Somos uma organização cujo o objetivo é prover uma ferramenta onde todos possam realizar doações.
                    </p>
                </div>
                <!-- FIM Footer info -->
                <!-- <div class="footer-awarad">
                    <img src="images/icon/best.png" alt="">
                    <p>Melhor Site de Doações do Espírito Santo.</p>
                </div> -->
            </div>
            <!-- FIM Logo e Sobre -->

        </div>
        <!-- FIM Widget Row -->
    </div>
    <!-- FIM Contact Container -->

    <script>
function createCookie(cName, cValue, cExpDay){
  var d = new Date();
  d.setTime(d.getTime() + (cExpDay*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cName + "=" + cValue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function setIsNewVisitorCookie() {
    createCookie("isNewVisitor", true, 1);
}
</script>

    <div class="copyright">
        <div class="container">
            <div class="row-footer">
                <div class="col-md-6">
                    <span>Copyright © 2019, Todos Os Direitos Reservados</span>
                </div>
                <!-- FIM Col -->
                <div class="col-md-6">
                    <div class="copyright-menu">
                        <ul>
                            <li>
                                <a href="./">Início</a>
                            </li>
                            <li>
                                <a href="#">Termos de Privacidade</a>
                            </li>
                            <li>
                                <a href="<?php echo osc_contact_url(); ?>">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- FIM col -->
            </div>
            <!-- FIM Row -->
        </div>
        <!-- FIM Copyright Container -->
    </div>
    <!-- FIM Copyright -->
</footer>

<?php osc_run_hook('footer'); ?>

</body>
</html>
