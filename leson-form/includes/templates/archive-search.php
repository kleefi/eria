    <?php
    /*
    Template Name: Search Page
    */
    ?>

    <?php
    // Do not allow directly accessing this file.
    if ( ! defined( 'ABSPATH' ) ) {
        exit( 'Direct script access denied.' );
    }
    ?>

    <!-- STARTR HEADER -->
    <?php get_header(); ?>

    <style>
        html:not(.avada-has-site-width-percent) #main {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
        #main .fusion-row {
            max-width: 100% !important;
        }
        body.has-sidebar #content {
            width: 100% !important;
        }
    </style>
    <!-- END HEADER -->

    <!-- START CONTENT -->

    <?php
        $args = array(
            'numberposts'	=> -1,
            'post_type'		=> 'job',
            'meta_query'	=> array(
                'relation'		=> 'OR',
                array(
                    'key'		=> 'country_search',
                    'value'		=> get_search_query(),
                    'compare'	=> 'LIKE'
                ),
                array(
                    'key'		=> 'long_description',
                    'value'		=> get_search_query(),
                    'compare'	=> 'LIKE'
                )
            )
        );

        // query
        $the_query = new WP_Query( $args );
    ?>

    <!-- the loop -->
    <section id="content" class="full-width">
        <div class="post-content">
            <div class="fusion-fullwidth fullwidth-box fusion-builder-row-2 fusion-flex-container fusion-parallax-none nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="background-color: rgba(0,0,0,0.2);background-image: url('<?php echo network_site_url( '/wp-content/uploads/2022/08/bg-private-sector.jpg' ) ?>');background-position: center top;background-repeat: no-repeat;background-blend-mode: darken;border-width: 0px 0px 0px 0px;border-color:#e2e2e2;border-style:solid;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;">
                <div class="fusion-builder-row fusion-row fusion-flex-align-items-center" style="max-width:1248px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                    <div class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion_builder_column_1_1 1_1 fusion-flex-column">
                        
                        <div class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column" style="background-position: left top; background-repeat: no-repeat; background-size: cover; padding: 0px; min-height: 0px;">
                            <style type="text/css">
                                @media only screen and (max-width:1024px) {.fusion-title.fusion-title-2{margin-top:-20px!important; margin-right:0px!important;margin-bottom:15px!important;margin-left:0px!important;}}@media only screen and (max-width:640px) {.fusion-title.fusion-title-2{margin-top:10px!important; margin-right:0px!important;margin-bottom:10px!important; margin-left:0px!important;}}
                            </style>
                            <div class="fusion-title title fusion-title-2 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-one fusion-border-below-title" style="text-shadow:3px 3px 10px rgba(0,0,0,0.8);;margin-top:-20px;margin-right:0px;margin-bottom:15px;margin-left:0px;">
                                <h1 class="title-heading-center" style="margin:0;color:#ffffff;">
                                    <?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?>
                                </h1>
                            </div>
                        </div>
                        
                        <style type="text/css">
                            .fusion-body .fusion-builder-column-1{width:100% !important;margin-top : 0px;margin-bottom : 20px;}.fusion-builder-column-1 > .fusion-column-wrapper {padding-top : 0px !important;padding-right : 0px !important;margin-right : 1.92%;padding-bottom : 0px !important;padding-left : 0px !important;margin-left : 1.92%;}@media only screen and (max-width:1024px) {.fusion-body .fusion-builder-column-1{width:100% !important;order : 0;}.fusion-builder-column-1 > .fusion-column-wrapper {margin-right : 1.92%;margin-left : 1.92%;}}@media only screen and (max-width:640px) {.fusion-body .fusion-builder-column-1{width:100% !important;order : 0;}.fusion-builder-column-1 > .fusion-column-wrapper {margin-right : 1.92%;margin-left : 1.92%;}}</style></div></div><style type="text/css">.fusion-body .fusion-flex-container.fusion-builder-row-2{ padding-top : 8%;margin-top : 0px;padding-right : 30px;padding-bottom : 8%;margin-bottom : 0px;padding-left : 30px;}
                        </style>
                    </div>
                </div>
            </div>

            <div class="fusion-fullwidth fullwidth-box fusion-builder-row-3 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="padding: 5% 5rem;">
                <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start">

                    <div class="col-md-3">
                        <div class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column" style="padding: 0px 20px;">
                            <div id="search-2" class="widget widget_search" style="border-style: solid;border-color:transparent;border-width:0px;">
                                <div class="heading">
                                    <h4 class="widget-title">SEARCH</h4>
                                </div>
                                <form role="search" class="searchform fusion-search-form  fusion-search-form-clean" method="get" action="<?php echo home_url( '/' ); ?>">
                                    <div class="fusion-search-form-content">
                                        <div class="fusion-search-field search-field">
                                            <label>
                                                <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
                                                <input type="search" value="" name="s" class="s" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" required="" aria-required="true" aria-label="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
                                                <input type="hidden" name="post_type" value="job" />
                                            </label>
                                        </div>
                                        <div class="fusion-search-button search-button">
                                            <input type="submit" class="fusion-search-submit searchsubmit" aria-label="Search" value="">
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <h3 class="custom-tab-left-title">Filter</h3>

                            <style type="text/css">
                                /* Accordion styles */
                                .bt-tabs {
                                    /* border-radius: 8px; */
                                    overflow: hidden;
                                    /* box-shadow: 0 4px 4px -2px rgba(0, 0, 0, 0.5); */
                                }

                                .bt-tab {
                                    width: 100%;
                                    color: #559ab0;
                                    overflow: hidden;
                                }
                                .bt-tab {
                                    border-bottom: 1.5px solid #1f3163;
                                }
                                .bt-tab:first-child {
                                    border-top: 1.5px solid #1f3163;
                                    border-bottom: 1.5px solid #1f3163;
                                }
                                .bt-tab:last-child {
                                    /* border-top: 1.5px solid #1f3163; */
                                    border-bottom: 1.5px solid #1f3163;
                                }
                                .bt-tab-label {
                                    display: flex;
                                    justify-content: space-between;
                                    padding: 2px 10px;
                                    background: transparent;
                                    /* background: #2c3e50; */
                                    font-weight: bold;
                                    cursor: pointer;
                                    /* position: relative; */
                                    /* Icon */
                                }
                                .bt-tab-label:hover {
                                    background: #559ab0;
                                    color: #fff;
                                }
                                .bt-tab-label:hover .bt-tab-link {
                                    color: #fff;
                                    text-decoration: underline;
                                }
                                .bt-tab-label::after {
                                    content: '❯';
                                    width: 40px;
                                    height: 40px;
                                    text-align: center;
                                    transition: all 0.35s;
                                    display: flex;
                                    align-content: center;
                                    justify-content: center;
                                    align-items: center;
                                }
                                .bt-tab-link {
                                    width: 100%;
                                    display: flex;
                                    align-items: center;
                                    justify-content: flex-start;
                                    align-content: center;
                                }
                                .bt-tab-content {
                                    max-height: 0;
                                    padding: 0 1em;
                                    color: #2c3e50;
                                    background: white;
                                    transition: all 0.35s;
                                }
                                .bt-tab-close {
                                    display: flex;
                                    justify-content: flex-end;
                                    padding: 1em;
                                    font-size: 0.75em;
                                    background: #2c3e50;
                                    cursor: pointer;
                                }
                                .bt-tab-close:hover {
                                    background: #559ab0;
                                }

                                input.bt-input-check {
                                    position: absolute;
                                    opacity: 0;
                                    z-index: -1;
                                }
                                input.bt-input-check:checked + .bt-tab-label {
                                    background: #559ab0;
                                    color: #fff;
                                }
                                input.bt-input-check:checked + .bt-tab-label .bt-tab-link {
                                    color: #fff;
                                }
                                input.bt-input-check:checked + .bt-tab-label::after {
                                    transform: rotate(90deg);
                                    /* position: absolute; */
                                    /* top: 13px; */
                                    /* right: 15px; */
                                }
                                input.bt-input-check:checked ~ .bt-tab-content {
                                    max-height: 100vh;
                                    padding: 8px 8px;
                                }
                                ul.bt_list_categori-ul2 {
                                    padding: 0;
                                    margin: 0;
                                }
                                li.bt_list_categori-li2 {
                                    padding: 0;
                                    list-style: none;
                                }
                                a.bt_list_categori-link2 {
                                    width: 100%;
                                    display: block;
                                    padding: 6px 15px;
                                    overflow-wrap: break-word;
                                }
                                a.bt_list_categori-link2:hover {
                                    background-color: #66a7db;
                                    color: #fff;
                                }
                            </style>
                            
                            <div class="bt-tabs">
                                <?php
                                    $args = array(
                                        'orderby' => 'name',
                                        'order' => 'ASC',
                                        'use_desc_for_title' => 1,
                                        'hide_empty' => 0,
                                        'parent' => '0',
                                        'taxonomy'                 => 'categori',
                                        'type'                     => 'job',
                                        'child_of'                 => 0,
                                    );

                                    $cats = get_categories($args);

                                    foreach($cats as $Parentcat) {
                                        $a = $Parentcat->name;
                                        ?>
                                            <div class="bt-tab">
                                                <input type="checkbox" class="bt-input-check" id="chck-<?php echo esc_attr( $Parentcat->term_id ); ?>">
                                                <label class="bt-tab-label" for="chck-<?php echo esc_attr( $Parentcat->term_id ); ?>">
                                                    <a href="<?php echo get_category_link( $Parentcat->term_id ) ?>" class="bt-tab-link">
                                                        <?php echo $Parentcat->name; ?>
                                                    </a>
                                                </label>

                                                <div class="bt-tab-content">
                                                    <ul class="bt_list_categori-ul2">
                                                        <?php

                                                            $childargs = array(
                                                                'child_of' => $Parentcat->cat_ID,
                                                                'hide_empty' => 0,
                                                                'parent' => $Parentcat->cat_ID,
                                                                'taxonomy' => 'categori'
                                                            );
                                                            $childcategories = get_categories($childargs);

                                                            foreach($childcategories as $childcat) {

                                                                ?>
                                                                    <li class="bt_list_categori-li2">
                                                                        <a href="<?php echo get_category_link( $childcat->term_id ) ?>" class="bt_list_categori-link2">
                                                                            <?php echo $childcat->name; ?>
                                                                        </a>
                                                                    </li>
                                                                <?php
                                                                
                                                            }
                                                        ?>
                                                    </ul>
                                                </div>

                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>


                            <style>
                                .bt_list_categori {}
                                .bt_list_categori .bt_list_categori-ul {
                                    padding: 0px;
                                    list-style: none;
                                }
                                .bt_list_categori .bt_list_categori-ul .bt_list_categori-li {}
                                .bt_list_categori .bt_list_categori-ul .bt_list_categori-li .bt_list_categori-link {
                                    width: 100%;
                                    display: block;
                                    /* border-top: 1.5px solid #1f3163; */
                                    border-bottom: 1.5px solid #1f3163;
                                    padding: 10px 0px;
                                }
                                .bt_list_categori .bt_list_categori-ul .bt_list_categori-li:first-child .bt_list_categori-link {
                                    width: 100%;
                                    display: block;
                                    border-top: 1.5px solid #1f3163;
                                    border-bottom: 1.5px solid #1f3163;
                                    padding: 10px 0px;
                                }
                                .bt_list_categori .bt_list_categori-ul .bt_list_categori-li:last-child .bt_list_categori-link {
                                    width: 100%;
                                    display: block;
                                    /* border-top: 1.5px solid #1f3163; */
                                    border-bottom: 1.5px solid #1f3163;
                                    padding: 10px 0px;
                                }
                                .bt_list_categori .bt_list_categori-ul .bt_list_categori-li .bt_list_categori-link:hover {
                                    color: #fff;
                                    background-color: #559ab0;
                                    padding: 10px 20px;
                                }
                            </style>

                            <h3 class="custom-tab-left-title" style="margin-top: 40px;">Location</h3>
                            <div class="bt_list_categori">
                                <ul class="bt_list_categori-ul">
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Brunei&post_type=job' ) ?>" class="bt_list_categori-link">Brunei</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Cambodia&post_type=job' ) ?>" class="bt_list_categori-link">Cambodia</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=China&post_type=job' ) ?>" class="bt_list_categori-link">China</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Indonesia&post_type=job' ) ?>" class="bt_list_categori-link">Indonesia</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Japan&post_type=job' ) ?>" class="bt_list_categori-link">Japan</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Lao&post_type=job' ) ?>" class="bt_list_categori-link">Lao PDR</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Malaysia&post_type=job' ) ?>" class="bt_list_categori-link">Malaysia</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Myanmar&post_type=job' ) ?>" class="bt_list_categori-link">Myanmar</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Korea&post_type=job' ) ?>" class="bt_list_categori-link">Republic of Korea</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Singapore&post_type=job' ) ?>" class="bt_list_categori-link">Singapore</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Thailand&post_type=job' ) ?>" class="bt_list_categori-link">Thailand</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Philippines&post_type=job' ) ?>" class="bt_list_categori-link">Philippines</a>
                                    </li>
                                    <li class="bt_list_categori-li">
                                        <a href="<?php echo network_site_url( '/?s=Vietnam&post_type=job' ) ?>" class="bt_list_categori-link">Vietnam</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-9">
                        <div class="fusion-blog-shortcode fusion-blog-shortcode-1 fusion-blog-archive fusion-blog-layout-grid-wrapper fusion-blog-pagination" style="padding: 0px 20px;">
                            <style type="text/css">
                                .fusion-blog-shortcode-1 .fusion-blog-layout-grid .fusion-post-grid{
                                    padding:10px;
                                    height: 460px;
                                }
                                .fusion-blog-shortcode-1 .fusion-posts-container{
                                    margin-left: -10px !important; 
                                    margin-right:-10px !important;
                                }
                                .fusion-post-content > .blog-shortcode-post-title {
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                }
                                .fusion-blog-shortcode-1 h2 a {
                                    color: #1f3163!important;
                                    letter-spacing: 1px!important;
                                }
                            </style>
                            <div class="fusion-posts-container fusion-posts-container-pagination fusion-blog-layout-grid fusion-blog-layout-grid-3 isotope fusion-blog-equal-heights">

                                <?php if( $the_query->have_posts() ): ?>

                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                

                                    <article class="fusion-post-grid post-1408 post type-post status-publish format-standard has-post-thumbnail hentry category-japan category-reduce">
                                        <div class="fusion-post-wrapper" style="background-color:rgba(255,255,255,0);border:none;"> 
                                            <style>
                                                .fusion-post-wrapper img {
                                                    height: 180px;
                                                    object-fit: cover;
                                                }
                                            </style>
                                            <?php
                                                $gambar = get_post_meta( get_the_ID(), 'gambar_utama', true );
                                                // $link = the_permalink();
                                                if (empty($gambar)) {
                                                    // echo '<a href="'.the_permalink().'" ></a>';
                                                    echo '<img alt="'.get_the_title().'" style="width:100%;" src="https://media.istockphoto.com/vectors/no-image-vector-symbol-missing-available-icon-no-gallery-for-this-vector-id1128826884?k=20&m=1128826884&s=170667a&w=0&h=_cx7HW9R4Uc_OLLxg2PcRXno4KERpYLi5vCz-NEyhi0=">';
                                                }else{
                                                    // echo '<a href="'.the_permalink().'" ></a>';
                                                    echo '<img alt="'.get_the_title().'" style="width:100%;" src="'.$gambar.'">';
                                                    // echo '';
                                                }
                                            ?>
                                            <div class="fusion-post-content-wrapper" style="padding:20px 0px 0px 0px;">
                                                <div class="fusion-post-content post-content">
                                                    <p class="fusion-single-line-meta">
                                                        <span class="vcard" style="display: none;">
                                                            <span class="fn">
                                                                <a href="https://dewanstudio.biz/SIT/eria/author/admin-eria/" title="Posts by Admin-Eria" rel="author">Admin-Eria</a>
                                                            </span>
                                                        </span>
                                                        <span class="updated" style="display:none;">2022-09-01T10:20:38+07:00</span>
                                                        <span class="updated" style="display:none;"><?php the_date();?></span>
                                                        <p>
                                                            <?php
                                                                $category_detail=get_the_terms($_GET['id'], 'categori');//$post->ID
                                                                if(empty($category_detail)){
                                                                    echo 'Uncategorized';
                                                                }else{
                                                                $myArray = array();
                                                                    foreach($category_detail as $cd){
                                                                    $myArray[] = '<a href="'.get_category_link( $cd->term_id ).'" target="_blank">'.ucfirst($cd->name).'</a>';
                                                                    // $cetak_nama_link = $cd->term_id.'';
                                                                    // $cetak_nama = $cd->name.', ';
                                                                    // echo '<a href="'.get_category_link( $cetak_nama_link ).'" target="_blank">'.$cetak_nama.'</a>';
                                                                    // rtrim($cetak_nama,"");
                                                                }
                                                                echo implode( ', ', $myArray );
                                                            }
                                                            ?>
                                                        </p>
                                                        <!-- <a href="https://dewanstudio.biz/SIT/eria/category/location/japan/" rel="category tag">Japan</a>,  -->
                                                        <!-- <a href="https://dewanstudio.biz/SIT/eria/category/filter/reduce/" rel="category tag">Reduce</a> -->
                                                        <!-- <span class="fusion-inline-sep">|</span> -->
                                                    </p>
                                                    <h2 class="blog-shortcode-post-title entry-title">
                                                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                                    </h2>
                                                    <div class="fusion-content-sep sep-double sep-solid" style="border-color:#e2e2e2;"></div>
                                                    <div class="fusion-post-content-container">
                                                        <p> <?php echo get_user_meta($post->post_author,'company_name',true);?> </p>
                                                        <p style="visibility:hidden;"><span data-detail="<?php echo get_user_meta($post->post_author,'company_city',true);?>" ><?php echo get_user_meta($post->post_author,'company_city',true);?></span>, <span data-detail="<?php echo get_user_meta($post->post_author,'company_country',true);?>" ><?php echo get_user_meta($post->post_author,'company_country',true);?></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-clearfix"></div>

                                            <!-- <h5 style="padding-bottom:10px;">  </h5>
                                            <h4 class="readmore less">  </h4>
                                            <p>
                                                <?php   $category_detail=get_the_category($_GET['id']);//$post->ID
                                                    foreach($category_detail as $cd){
                                                    echo $cd->cat_name;
                                                    echo ",";
                                                }?>
                                            </p>
                                            <span style="display:block;">Company Name </span><br>
                                            <a class="btn-download" href="">Read More</a> -->
                                            
                                        </div>

                                    </article>
                                    <style>
                                        .wp-pagenavi {
                                            clear: both;
                                            display: flex;
                                        }
                                        .wp-pagenavi .pages {
                                            display: none;
                                        }
                                        .wp-pagenavi span.current {
                                            font-weight: bold;
                                            background-color: #559ab0;
                                            border-color: #e2e2e2;
                                            color: #fff;
                                        }
                                        .wp-pagenavi a, .wp-pagenavi span {
                                            text-decoration: none;
                                            border: 1px solid #BFBFBF;
                                            padding: 3px 5px;
                                            margin: 2px;
                                            width: 30px;
                                            height: 30px;
                                            margin-left: calc((30px)/ 10);
                                            margin-right: calc((30px)/ 10);
                                            line-height: 30px;
                                            display: flex;
                                            align-content: center;
                                            justify-content: center;
                                            align-items: center;
                                            border-color: #e2e2e2;
                                        }
                                        .wp-pagenavi a.last {
                                            width: auto;
                                        }
                                    </style>

                                <?php endwhile; ?>

                                <?php else : ?>
                                    <div class="" style="margin-top: 50px;display: flex;flex-direction: column;align-content: center;align-items: center;">
                                        <img src="<?php echo network_site_url( '/wp-content/uploads/2022/09/bs_no_data.png' ) ?>" alt="Sorry, no posts matched your criteria." srcset="<?php echo network_site_url( '/wp-content/uploads/2022/09/bs_no_data.png' ) ?>" width="170px">
                                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="fusion-clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fusion-fullwidth fullwidth-box fusion-builder-row-4 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="background-color: #ffffff;background-position: center center;background-repeat: no-repeat;border-width: 0px 0px 0px 0px;border-color:#e2e2e2;border-style:solid;">
                <div class="fusion-builder-row fusion-row fusion-flex-align-items-center" style="max-width:1248px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                    <div class="fusion-layout-column fusion_builder_column fusion-builder-column-4 fusion_builder_column_1_1 1_1 fusion-flex-column">
                        <div class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column" style="background-position: left top; background-repeat: no-repeat; background-size: cover; padding: 0px; min-height: 0px;">
                            <div style="text-align:left;">
                                <span class=" fusion-imageframe imageframe-none imageframe-1 hover-type-none" style="width:100%;max-width:400px;">
                                    <img width="562" height="128" title="logo-rkc-mpd-high-new" src="https://dewanstudio.biz/SIT/eria/wp-content/uploads/2022/08/logo-rkc-mpd-high-new.png" class="img-responsive wp-image-716" srcset="https://dewanstudio.biz/SIT/eria/wp-content/uploads/2022/08/logo-rkc-mpd-high-new-200x46.png 200w, https://dewanstudio.biz/SIT/eria/wp-content/uploads/2022/08/logo-rkc-mpd-high-new-400x91.png 400w, https://dewanstudio.biz/SIT/eria/wp-content/uploads/2022/08/logo-rkc-mpd-high-new.png 562w" sizes="(max-width: 640px) 100vw, 562px">
                                </span>
                            </div>
                        </div>
                        <style type="text/css">.fusion-body .fusion-builder-column-4{width:100% !important;margin-top : 0px;margin-bottom : 20px;}.fusion-builder-column-4 > .fusion-column-wrapper {padding-top : 0px !important;padding-right : 0px !important;margin-right : 1.92%;padding-bottom : 0px !important;padding-left : 0px !important;margin-left : 1.92%;}@media only screen and (max-width:1024px) {.fusion-body .fusion-builder-column-4{width:100% !important;order : 0;}.fusion-builder-column-4 > .fusion-column-wrapper {margin-right : 1.92%;margin-left : 1.92%;}}@media only screen and (max-width:640px) {.fusion-body .fusion-builder-column-4{width:100% !important;order : 0;}.fusion-builder-column-4 > .fusion-column-wrapper {margin-right : 1.92%;margin-left : 1.92%;}}</style>
                    </div>
                </div>
                <style type="text/css">.fusion-body .fusion-flex-container.fusion-builder-row-4{ padding-top : 30px;margin-top : 0px;padding-right : 30px;padding-bottom : 0px;margin-bottom : 0px;padding-left : 30px;}</style>
            </div>
            
            <!-- <?php fusion_link_pages(); ?> -->
        </div>
    </section>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

    <!-- END CONTENT -->

    <!-- START SIDEBAR -->

    <!-- START SIDEBAR -->

    <!-- START FOOTER -->
    <?php get_footer(); ?>
    <!-- END FOOTER -->
