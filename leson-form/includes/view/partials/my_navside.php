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
                                echo get_avatar( $current_user->ID, 37 );
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
            <!-- <li class="wp-first-item wp-not-current-submenu menu-top menu-top-first">
                <a href="/contact" class="wp-first-item menu-top">
                    <div class="wp-menu-arrow"><div></div></div>
                    <div class="wp-menu-image dashicons-before dashicons-admin-home"><br></div>
                    <div class="wp-menu-name">Contact</div>
                </a>
            </li>
            <li class="wp-first-item wp-not-current-submenu menu-top menu-top-first">
                <a href="/company" class="wp-first-item menu-top">
                    <div class="wp-menu-arrow"><div></div></div>
                    <div class="wp-menu-image dashicons-before dashicons-admin-home"><br></div>
                    <div class="wp-menu-name">Company</div>
                </a>
            </li>
            <li class="wp-first-item wp-not-current-submenu menu-top menu-top-first">
                <a href="/addproject" class="wp-first-item menu-top">
                    <div class="wp-menu-arrow"><div></div></div>
                    <div class="wp-menu-image dashicons-before dashicons-admin-home"><br></div>
                    <div class="wp-menu-name">Project</div>
                </a>
            </li> -->
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
