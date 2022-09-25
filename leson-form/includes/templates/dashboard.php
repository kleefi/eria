<?php
/**
 * Template Name: Dashboard
 * Template Post Type: page
 * A simple template for blank pages.
 */

?>

<!DOCTYPE html>
<?php ?>
<html class="wp-toolbar" <?php language_attributes(); ?>>
    <head>
        <!-- astra_head_top -->
        <!--?php astra_head_top(); ?-->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <title><?php echo get_the_title();?></title>

        <meta name="description" content="Various documents emphasizing the importance of sharing knowledge and capacity development related to marine plastic debris have been produced by the United Nations, the Association of South East Asian Nations (ASEAN) and others." class="yoast-seo-meta-tag" />
        <link rel="canonical" href="<?php echo network_site_url() ?>" class="yoast-seo-meta-tag" />
        <meta property="og:locale" content="en_US" class="yoast-seo-meta-tag" />
        <meta property="og:type" content="website" class="yoast-seo-meta-tag" />
        <meta property="og:title" content="<?php echo get_the_title();?> - Good Practice" class="yoast-seo-meta-tag" />
        <meta property="og:description" content="Various documents emphasizing the importance of sharing knowledge and capacity development related to marine plastic debris have been produced by the United Nations, the Association of South East Asian Nations (ASEAN) and others." class="yoast-seo-meta-tag" />
        <meta property="og:url" content="<?php echo network_site_url() ?>" class="yoast-seo-meta-tag" />
        <meta property="og:site_name" content="RKC | MPD" class="yoast-seo-meta-tag" />
        <meta property="article:modified_time" content="2022-09-15T09:24:49+00:00" class="yoast-seo-meta-tag" />
        <meta name="twitter:card" content="summary_large_image" class="yoast-seo-meta-tag" />
        <meta name="twitter:label1" content="Est. reading time" class="yoast-seo-meta-tag" />
        <meta name="twitter:data1" content="20 minutes" class="yoast-seo-meta-tag" />
        

        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel="alternate" type="application/rss+xml" title="RKC | MPD &raquo; Feed" href="<?php echo network_site_url( '/feed' ) ?>" />
        <link rel="alternate" type="application/rss+xml" title="RKC | MPD &raquo; Comments Feed" href="<?php echo network_site_url( '/comments/feed') ?>" />
        <link rel="shortcut icon" href="<?php echo network_site_url( '/wp-content/uploads/2022/08/favicon-eria-new.png' ) ?>" type="image/x-icon" />
        <!-- For iPhone -->
        <link rel="apple-touch-icon" href="<?php echo network_site_url( '/wp-content/uploads/2022/08/favicon-eria-new.png' ) ?>">
        <!-- For iPhone Retina display -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo network_site_url( '/wp-content/uploads/2022/08/favicon-eria-new.png' ) ?>">
        <!-- For iPad -->
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo network_site_url( '/wp-content/uploads/2022/08/favicon-eria-new.png' ) ?>">
        <!-- For iPad Retina display -->
        <link rel="apple-touch-icon" sizes="167x167" href="<?php echo network_site_url( '/wp-content/uploads/2022/08/favicon-eria-new.png' ) ?>">
        <meta property="og:title" content="<?php echo get_the_title();?> - Good Practice"/>
		<meta property="og:type" content="article"/>
		<meta property="og:url" content="<?php echo network_site_url() ?>"/>
		<meta property="og:site_name" content="RKC | MPD"/>
		<meta property="og:description" content="Good Practice  Private Sector Platform  Framework &amp; Regulations  Government Initiatives  Scientific Knowledge"/>
        <meta property="og:image" content="<?php echo network_site_url( '/wp-content/uploads/2022/08/logo-ERIA-RKCMPD-new.png' ) ?>"/>

        <!-- wp_head -->
        <!--?php wp_head(); ?-->
        <!-- astra_head_bottom -->
        <!--?php astra_head_bottom(); ?-->
        <link rel="stylesheet" href="https://wpmudev.github.io/shared-ui/assets/css/wordpress.min.css">
        <!-- <link rel="stylesheet" href="https://wpmudev.github.io/shared-ui/assets/css/showcase.min.css"> -->

        <link rel="stylesheet" href="<?php echo network_site_url( '/wp-content/plugins/leson-form/includes/css/dashboard/css/shared-ui.min.css' ) ?>">

        <!-- <link rel="stylesheet" href="https://test-eria/wp-content/themes/astra/styleDashboardEria.css"> -->
        <link rel="stylesheet" href="<?php echo network_site_url( '/wp-content/plugins/leson-form/includes/view/css/styleDashboardEria.css' ) ?>">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.1.2/typicons.min.css" integrity="sha512-/O0SXmd3R7+Q2CXC7uBau6Fucw4cTteiQZvSwg/XofEu/92w6zv5RBOdySvPOQwRsZB+SFVd/t9T5B/eg0X09g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">

    </head>
    <body class="wp-admin wp-core-ui js auto-fold sui-2-12-11 auto-fold admin-bar admin-color-fresh svg">

        

<div id="adminmenumain" role="navigation" aria-label="Main menu">
    <div id="adminmenuback"></div>
    <div id="adminmenuwrap">
        <ul id="adminmenu">
            <li>
                <a href="">
                    <img src="https://dewanstudio.biz/SIT/eria/wp-content/uploads/2022/08/logo-rkc-mpd.png" alt="">
                </a>
            </li>
            <li>
                <div class="profile_show" style="">
                    <?php 
                        if ( is_user_logged_in() ) {
                            $current_user = wp_get_current_user();
                            if ( ($current_user instanceof WP_User) ) {
                                //echo get_avatar( $current_user->ID, 37 );
echo '<img class="gambar-utama" style="max-width:40px;border-radius:100px;" src="'.get_user_meta(wp_get_current_user()->ID,'avatar',true).'" alt="">';
                            }
                        }
                    ?>
                    
                    <div class="profile_name_email">
                        <div class="display_name">
                            <?php echo wp_get_current_user()->display_name; ?>
                        </div>
                        <div class="user_email">
                            <?php echo wp_get_current_user()->user_email; ?>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!--?php 
            $menu_ID = '65';
            // http://example.com/wp-admin/nav-menus.php?action=edit&menu=65
            $menu_args = array('menu' => $menu_ID );
            wp_nav_menu( $menu_args );   
        ?--> 
        <?php
            $menu_name = 'my-custom-menu1';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
        ?>

        <nav>
            <ul id="adminmenu" class="main-nav">
                <?php
                $count = 0;
                $submenu = false;

                foreach( $menuitems as $item ):

                    $link = $item->url;
                    $title = $item->title;
                    // item does not have a parent so menu_item_parent equals 0 (false)
                    if ( !$item->menu_item_parent ):

                    // save this id for later comparison with sub-menu items
                    $parent_id = $item->ID;
                ?>
                <li class="wp-first-item wp-not-current-submenu menu-top menu-top-first bt_menu">
                    <a href="<?php echo $link; ?>" class="wp-first-item menu-top">
                        <div class="wp-menu-arrow"><div></div></div>
                        <div class="wp-menu-image dashicons-before dashicons-admin-home"><br></div>
                        <div class="wp-menu-name"><?php echo $title; ?></div>
                    </a>

                <?php endif; ?>

                    <?php if ( $parent_id == $item->menu_item_parent ): ?>

                        <?php if ( !$submenu ): $submenu = true; ?>
                        
                        <ul class="wp-submenu wp-submenu-wrap">
                            <?php endif; ?>

                                <li class="">
                                    <a href="<?php echo $link; ?>" class="submenu-title"><?php echo $title; ?></a>
                                </li>

                            <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                        </ul>
                        <?php $submenu = false; endif; ?>

                    <?php endif; ?>

                <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                </li>                           
                <?php $submenu = false; endif; ?>

            <?php $count++; endforeach; ?>

            </ul>
        </nav>

    </div>
</div>

        

        <div id="wpcontent">
            <main class="sui-wrap">
                <nav class="navbar-custom-menu navbar navbar-expand-lg m-0">
                    <div class="sidebar-toggle-icon" id="sidebarCollapse">
                        sidebar toggle<span></span>
                    </div><!--/.sidebar toggle icon-->
                    <div class="d-flex flex-grow-1">
                        <ul class="navbar-nav flex-row align-items-center ml-auto">
                            &nbsp;&nbsp;&nbsp;
                            <li class="nav-item dropdown user-menu sui-dropdown">
                                <a class="nav-link dropdown-toggle sui-dropdown-anchor" href="#" data-toggle="dropdown" aria-label="Dropdown">
                                    <!-- <i class="typcn typcn-user-add-outline"></i> -->
                                    <?php 
                                        if ( is_user_logged_in() ) {
                                            $current_user = wp_get_current_user();
                                            if ( ($current_user instanceof WP_User) ) {
                                                //echo get_avatar( $current_user->ID, 24 );
echo '<img class="gambar-utama" style="max-width:40px;border-radius:100px;" src="'.get_user_meta(wp_get_current_user()->ID,'avatar',true).'" alt="">';
                                            }
                                        }
                                    ?>
                                </a>
                                <ul>
                                    <li>
                                        <div class="user-header">
                                            <div class="img-user">
                                                <?php 
                                                    if ( is_user_logged_in() ) {
                                                        $current_user = wp_get_current_user();
                                                        if ( ($current_user instanceof WP_User) ) {
                                                            //echo get_avatar( $current_user->ID, 37 );
echo '<img class="gambar-utama" src="'.get_user_meta(wp_get_current_user()->ID,'avatar',true).'" alt="">';
                                                        }
                                                    }
                                                ?>
                                            </div><!-- img-user -->
                                            <h6><?php echo wp_get_current_user()->display_name; ?></h6>
                                            <span><?php echo wp_get_current_user()->user_email; ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink( get_page_by_title( 'Profile' ) ); ?>" class="">
                                        <!-- <a href="/dashboard-members/profile" class=""> -->
                                            <i class="typcn typcn-user-outline"></i>My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink( get_page_by_title( 'Password Change' ) ); ?>" class="">
                                            <i class="typcn typcn-cog-outline"></i> Password Change
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo wp_logout_url(); ?>" class="">
                                            <i class="typcn typcn-key-outline"></i>Sign Out
                                        </a>
                                        <!-- <button><span class="sui-icon-trash" aria-hidden="true"></span> Button with icon</button> -->
                                    </li>
                                </ul>
                                <!-- <ul class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-header d-sm-none">
                                        <a href="" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                                    </div>
                                    <div class="user-header">
                                        <div class="img-user">
                                            <?php 
                                                if ( is_user_logged_in() ) {
                                                    $current_user = wp_get_current_user();
                                                    if ( ($current_user instanceof WP_User) ) {
                                                        //echo get_avatar( $current_user->ID, 37 );
echo '<img class="gambar-utama" style="max-width:40px;" src="'.get_user_meta(wp_get_current_user()->ID,'avatar',true).'" alt="">';
                                                    }
                                                }
                                            ?>
                                        </div>
                                        <h6><?php echo wp_get_current_user()->display_name; ?></h6>
                                        <span><?php echo wp_get_current_user()->user_email; ?></span>
                                    </div>
                                    <a href="https://solutions.rkcmpd-eria.org/admin/profile" class="dropdown-item">
                                        <i class="typcn typcn-user-outline"></i>My Profile
                                    </a>
                                    <a href="https://solutions.rkcmpd-eria.org/admin/profile/change_password" class="dropdown-item">
                                        <i class="typcn typcn-cog-outline"></i> Password Change
                                    </a>
                                    <a href="<?php echo wp_logout_url(); ?>" class="dropdown-item">
                                        <i class="typcn typcn-key-outline"></i>Sign Out
                                    </a>
                                </ul> -->
                            </li>
                            <!-- <li class="sui-dropdown">
                                <button class="sui-button-icon sui-dropdown-anchor" aria-label="Dropdown">
                                    <span class="sui-icon-widget-settings-config" aria-hidden="true"></span>
                                </button>
                                <ul>
                                    <li><button>CTA Button</button></li>
                                    <li><a href="http://external-link.com/" target="_blank">External link</a></li>
                                    <li><button><span class="sui-icon-trash" aria-hidden="true"></span> Button with icon</button></li>
                                </ul>
                            </li> -->
                        </ul><!--/.navbar nav-->
                    </div>
                </nav>

                <div role="main" id="wpbody">
                    <div id="wpbody-content" style="overflow: hidden;">
                        <main class="sui-wrap">
    
                            
<!-- <article class="sui-box">
    <div class="sui-box-body"> -->
        <!-- START CONTENT -->
<?php the_content(); ?>
        <!-- END CONTENT -->
    <!-- </div>
</article> -->

                            

                        </main>
                    </div>
                </div>
            </main>
        </div>
        
        <?php
            $footer_text = apply_filters( 'wpmudev_branding_footer_text', 'Made with <i>love</i> by Leson Form BT' );
            echo "<div class='sui-footer'>$footer_text</div>";
        ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <script src="https://wpmudev.github.io/shared-ui/assets/js/clipboard.min.js"></script>

        <!-- <script src="https://wpmudev.github.io/shared-ui/assets/js/shared-ui.min.js?ver=2.12.11"></script> -->

        <script src="<?php echo network_site_url( '/wp-content/plugins/leson-form/includes/css/dashboard/js/shared-ui.min.js' ) ?>"></script>
        
        <script src="https://wpmudev.github.io/shared-ui/assets/js/showcase.min.js?ver=2.12.11"></script>
        
        

        <script>
        $('.bt_menu').hover(
            function(){ $(this).addClass('opensub') },
            function(){ $(this).removeClass('opensub') }
        )
        </script>

        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

        <script>
            $(document).ready( function () {
                $('#projectList').DataTable( {
                    searching:      true,
                    ordering:       true,
                    scrollY:        false,
                    scrollX:        false,
                    scrollCollapse: false,
                    paging:         true,
                    fixedHeader:    true,
                    fixedColumns:   {
                        left: 1,
                        right: 1
                    },
                    order: [[3, 'desc']],
                    responsive: true,
                    "columnDefs": [
                        { 
                            "width": "300px", 
                            "targets": 1 
                        }
                    ]
                } );
            } );

            $(document).ready(function() {
                var now = new Date();
                var hours = now.getHours();
                var msg;

                if (hours >= 6 && hours < 12) msg = "Good Morning";
                else if (hours >= 12 && hours < 17) msg = "Good Afternoon";
                else if (hours >= 17 && hours < 22) msg = "Good Evening";
                else msg = "Good Night";
                $('.day-message').text(msg);
            });
        </script>
    </body>
</html>
