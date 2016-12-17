<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="https://www.sapo.vn/favicon.ico" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container-fluid">
        <div class="row">
            <header class="header_shadow">
                <div class="logo_header">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo url."/images/logo.svg" ?>" alt="Logo">
                    </a>
                </div>
                <nav class="primary_navigation" id="main-menu">
                    <a href="javascript:void(0)" class="menu_icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <?php
                        if(has_nav_menu("header_menu"))
                        {
                            wp_nav_menu(array(
                                "theme_location" => "header_menu",
                                "menu_id" => "header_menu",
                                "menu_class" => "header_menu"
                            ));
                        }
                    ?>
                    <div class="try_product">
                        <a href="#" class="hover_btn hover-animation">Dùng thử</a>
                    </div>
                </nav>
            </header>
        </div>
    </div>
