<?php
    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "purchase";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Tùy chỉnh theme ', 'purchase' ),
        'page_title'           => __( 'Tùy chỉnh theme ', 'purchase' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => 'AIzaSyAjtppy-gG-EcwVl6rs9W53dQ8H1X5tXUs',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'purchase' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'purchase' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'purchase' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'purchase' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'purchase' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'purchase' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'purchase' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'purchase' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'purchase' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'purchase' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'purchase' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*
        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
     */
    // -> START Basic Fields
    // Redux::setSection( $opt_name, array(
    //     'title'  => __( 'Chữ và màu chữ', 'purchase' ),
    //     'id'     => 'font-color',
    //     'icon'   => 'el el-pencil',
    //     'fields' => array(
    //         array(
    //             'id'       => 'typo-main',
    //             'type'     => 'typography',
    //             'title'    => __( 'Thay đổi Font chữ và màu chữ cho website', 'purchase' ),
    //             'output' => 'body',
    //             'text-transform' => true,
    //             'default' => array(
    //                     'font-size' => '18px',
    //                     'font-family' => 'Roboto',
    //                     'color' => '#3E3F36',
    //                     )
    //             ),
    //     )
    // ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Introduce Footer Fixed', 'purchase' ),
        'id'         => 'header-introduce9',
        'icon'       => 'el el-edit',
        'fields'     => array(
            array(
                'id'       => 'text-introduce9-1',
                'type'     => 'editor',
                'title'    => __( 'Title', 'purchase' ),
            ),
            array(
                'id'       => 'text-introduce9-2',
                'type'     => 'editor',
                'title'    => __( 'Text', 'purchase' ),
            ),
        ),
    ) );
// Social Footer
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Facebook,google,twitter...', 'purchase' ),
        'id'         => 'social-network',
        'icon'       => 'el el-facebook',
        'fields'     => array(
            array(
                'id'       => 'facebook-api',
                'type'     => 'text',
                'title'    => __( 'Link Facebook', 'purchase' ),
            ),
            array(
                'id'       => 'twitter-api',
                'type'     => 'text',
                'title'    => __( 'Link Twitter', 'purchase' ),
            ),
            array(
                'id'       => 'google-api',
                'type'     => 'text',
                'title'    => __( 'Link Google', 'purchase' ),
            ),
            array(
                'id'       => 'linkedin-api',
                'type'     => 'text',
                'title'    => __( 'Link Linkedin', 'purchase' ),
            ),
            array(
                'id'       => 'paypal-api',
                'type'     => 'text',
                'title'    => __( 'Link Paypal', 'purchase' ),
            ),
        )
    ) );
// Download
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Download', 'purchase' ),
        'id'         => 'download_guide',
        'icon'       => 'el el-download-alt',
        'fields'     => array(
            array(
                'id' => 'img-download',
                'type' => 'media',
                'url' => true,
                'title'    => __( 'Upload Images Download', 'purchase' ),
            ),
            array(
                'id' => 'a-download',
                'type' => 'editor',
                'url' => true,
                'title'    => __( 'Upload Link Download', 'purchase' ),
            ),
        )
    ) );
// Our purchase Courses In VietNam
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Our purchase Courses In VietNam', 'purchase' ),
        'id'         => 'courses_purchase',
        'icon'       => 'el el-fontsize',
        'fields'     => array(
            array(
                'id' => 'div_courses_purchase',
                'type' => 'editor',
                'url' => true,
            ),
            array(
                'id' => 'img_banner_page',
                'type' => 'media',
                'url' => true,
                'title'    => __( 'Upload Banner Pages ', 'purchase' ),
            ),
        )
    ) );
