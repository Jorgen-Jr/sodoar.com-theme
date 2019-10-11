<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('common/head.php') ; ?>
    </head>
<body <?php bender_body_class(); ?>>
<div >

    <!-- header ad 728x60-->
    <div class="ads_header">
    <?php echo osc_get_preference('header-728x90', 'bender'); ?>
    <!-- /header ad 728x60-->
    </div>
    <div class="clear"></div>

    <div class="custom-header-container col-xs-12 col-md-12 col-sm-12">
            <div class="header-wrapper container col-12 col-md-12 col-sm-12">
                <div class="left-header col-xs-3 col-md-3 col-sm-3">
                    <div class="site-logo">
                        <a href="./" target="_self">
                            <img src="<?php echo osc_current_web_theme_url('custom/') ; ?>img/Logo/logo-cabecalho.png" align="right" class="img-fluid img-logo">
                            <img src="<?php echo osc_current_web_theme_url('custom/') ; ?>img/Logo/logo-cabecalho-mobile.png" class="img-fluid img-logo-mobile">
                        </a>
                    </div>
                </div>
            
                <div class="mid-header col-xs-6 col-md-6 col-sm-6">
                    <form action="<?php echo osc_base_url(true); ?>" method="get" <?php /* onsubmit="javascript:return doSearch();" */?>>

                        <div class="input-group-prepend search-box">
                            <input type="hidden" name="page" value="search"/>
                            
                            <div class="input-group input-search-box">
                                <input type="text" name="sPattern" id="query" class="form-control search-text" value="" placeholder="<?php echo osc_esc_html(__(osc_get_preference('keyword_placeholder', 'bender'), 'bender')); ?>" />

                                <?php  if ( osc_count_categories() ) { ?>
                                    <div class="search-categories">
                                        <?php osc_categories_select('sCategory', null, __('Select a category', 'bender')) ; ?>
                                    </div>
                                <?php  } ?>

                                <div class="input-group-btn">
                                    <button class="btn btn-outline-secondary btn-search"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="message-search"></div>
                    </form>
                </div>

                <div class="right-header col-xs-3 col-md-3 col-sm-3">
                    <div class="btn-mobile-div">
                        <button class="btn btn-outline-secondary btn-mobile" data-toggle="collapse" href="#collapse-user-box-mobile" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <div class="user-box">
                        <div class="user-account">
                                <img src="<?php echo osc_current_web_theme_url('custom/') ; ?>img/icons/user-icon.png" class="user-acount-img">
                            <div class="user-account-links">
                                <?php if( osc_is_web_user_logged_in() ) { ?>
                                    <a href="<?php echo osc_user_dashboard_url(); ?>"><b>Perfil</b></a> <span>|</span>
                                    <a href="<?php echo osc_item_post_url_in_category() ; ?>">Publicar</a> <br>
                                    <a href="<?php echo osc_user_logout_url(); ?>">Sair</a>
                                <?php } else { ?>
                                    <a href="<?php echo osc_user_login_url(); ?>"><b>Entrar</b></a> <span>|</span>
                                    <a href="<?php echo osc_register_account_url() ; ?>">Cadastre-se</a> <br>

                                    <?php if( osc_users_enabled() || ( !osc_users_enabled() && !osc_reg_user_post() )) { ?>
                                        <a href="<?php echo osc_item_post_url_in_category() ; ?>">Publicar</a>
                                    <?php } ?>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="collapse" id="collapse-user-box-mobile">
                <div class="user-account-mobile">
                    <ul class="user-menu-mobile">

                    <?php if( osc_is_web_user_logged_in() ) { ?>
                        <li href="<?php echo osc_user_dashboard_url(); ?>">
                            <img src="<?php echo osc_current_web_theme_url('custom/') ; ?>img/icons/user-icon.png" class="user-acount-img-mobile img-fluid">
                                    <a href="<?php echo osc_user_dashboard_url(); ?>"><b>Minha Conta</b></a>
                        </li>
                        <li href="<?php echo osc_item_post_url_in_category() ; ?>">
                            <img src="<?php echo osc_current_web_theme_url('custom/') ; ?>img/icons/new-publish-icon.png" class="user-acount-img-mobile img-fluid">
                                    <a href="<?php echo osc_item_post_url_in_category() ; ?>">Publicar</a> <br>
                        </li>
                        <li  href="<?php echo osc_user_logout_url(); ?>">
                            <img src="<?php echo osc_current_web_theme_url('custom/') ; ?>img/icons/dashboard-icon.png" class="user-acount-img-mobile img-fluid">
                                    <a href="<?php echo osc_user_logout_url(); ?>">Sair</a>
                        </li>
                        
                        <?php } else { ?>
                                <li  href="<?php echo osc_user_login_url(); ?>">
                                    <img src="<?php echo osc_current_web_theme_url('custom/') ; ?>img/icons/user-icon.png" class="user-acount-img-mobile img-fluid">
                                    <a href="<?php echo osc_user_login_url(); ?>"><b>Entrar</b></a>
                                </li>
                                <li  href="<?php echo osc_register_account_url() ; ?>">
                                    <img src="<?php echo osc_current_web_theme_url('custom/') ; ?>img/icons/new-user-icon.png" class="user-acount-img-mobile img-fluid">
                                    <a href="<?php echo osc_register_account_url() ; ?>">Cadastre-se</a> <br>
                                </li>

                                <?php if( osc_users_enabled() || ( !osc_users_enabled() && !osc_reg_user_post() )) { ?>

                                <li  href="<?php echo osc_item_post_url_in_category() ; ?>">
                                    <img src="<?php echo osc_current_web_theme_url('custom/') ; ?>img/icons/new-publish-icon.png" class="user-acount-img-mobile img-fluid">
                                    <a href="<?php echo osc_item_post_url_in_category() ; ?>">Publicar</a>
                                </li>
                            <?php } ?>
                        <?php }; ?>
                    </ul>
                </div>
        </div>
    </div>

    <div class="wrapper">
    
    <script>
        $(document).ready(function() {
            checkCookie(); //Verifica se é um novo usuário
        });

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

        //Checa se é o primeiro acesso do usuário.
        function checkCookie() {
            var isNewVisitor = getCookie("isNewVisitor");
            var isLoggedOn = getCookie("isLoggedOn");
            if(isNewVisitor == "" || isNewVisitor == null || isLoggedOn == "false") {
                window.location.replace("./lp/");
            }
        }
    </script>

</div>


<?php osc_show_widgets('header'); ?>
<div class="wrapper wrapper-flash">
    <?php
        $breadcrumb = osc_breadcrumb('&raquo;', false, get_breadcrumb_lang());
        if( $breadcrumb !== '') { ?>
        <div class="breadcrumb">
            <?php echo $breadcrumb; ?>
            <div class="clear"></div>
        </div>
    <?php
        }
    ?>
    <?php osc_show_flash_message(); ?>
</div>
<?php osc_run_hook('before-content'); ?>
<div class="wrapper" id="content">
    <?php osc_run_hook('before-main'); ?>
    <div id="main">
        <?php osc_run_hook('inside-main'); ?>
