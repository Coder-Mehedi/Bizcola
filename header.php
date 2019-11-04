<?php require_once 'include/acf_header_query.php'; ?>

<!DOCTYPE html>
<html class="no-js" lang="la">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BizCola</title>

    <?php wp_head() ?>
</head>

<body>
    <!-- ========= preloader area Start =========== -->
    <div id="preloader">
        <div class="loader">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/loader.gif" alt="preloader">
        </div>
    </div>
    <!-- ========= preloader area End =========== -->
    <!-- ============ Header area start ============-->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav" role="navigation">
                        <!-- Mobile menu toggle button (hamburger/x icon) -->
                        <input id="main-menu-state" type="checkbox" />
                        <label class="main-menu-btn" for="main-menu-state">
                            <span class="main-menu-btn-icon"></span>
                        </label>
                        <div class="nav-brand">
                            <a href="<?php bloginfo( 'url' ) ?>"><img src="<?php echo $theme_logo_setup['url'] ? $theme_logo_setup['url'] : ""; ?>" alt=""></a>
                        </div>
                        <!-- Sample menu definition -->

                        <?php wp_nav_menu( array(
                            'theme_location'  => 'menu-1',
                            'menu_class'      => 'sm sm-clean',
                            'menu_id'         => 'main-menu',
                          
                        ) ); ?>
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--========= header area end ========== -->