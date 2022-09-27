<?php
/**
 * Template Name: Detail Product
 * Template Post Type: Post
 * A simple template for blank pages.
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

<?php

	function add_custom_meta_des() {
		?>
			<meta property="og:image" itemprop="image primaryImageOfPage" content="<?php get_post_meta( $post->ID,'gambar_utama', true); ?>">
		<?php

	#Single Page Meta Description
	if( is_single() ){

		$des = get_post_meta( get_the_id(), 'description', true);

		if( ! empty( $des )  ){
			$meta_des = esc_html($des);
			// echo '<meta name="description" content="' . $meta_des . '" />';
			echo '<meta name="twitter:description" property="og:description" itemprop="description" content="' . $meta_des . '">';
		}

		$img = get_post_meta( get_the_id(), 'gambar_utama', true);

		if( ! empty( $img )  ){

			$meta_img = esc_html($img);

			echo '<meta property="og:image" content="' . $meta_img . '">';

			echo '<meta property="og:image" itemprop="image primaryImageOfPage" content="' . $meta_img . '">';

			echo '<meta name="twitter:title" property="og:title" itemprop="name" content="' . $meta_img . '">';

			echo '<meta name="twitter:image" content="' . $meta_img . '">';
		}
	}}
	add_action( 'wp_head', 'add_custom_meta_des' );

?>
<!-- END HEADER -->

<!-- START CONTENT -->
<section id="content" class="full-width">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php echo fusion_render_rich_snippets_for_pages(); // phpcs:ignore WordPress.Security.EscapeOutput ?>
			<!-- <?php avada_singular_featured_image(); ?> -->

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
										PRIVATE SECTOR PLATFORM
									</h1>
								</div>
								<div style="display:flex;justify-content: center;gap: 16px;">
									<style type="text/css">
										.fusion-button.button-BT .fusion-button-text, 
										.fusion-button.button-BT i {color:#1f3163;}
										.fusion-button.button-BT .fusion-button-icon-divider{border-color:#1f3163;}
										.fusion-button.button-BT:hover .fusion-button-text, 
										.fusion-button.button-BT:hover i,
										.fusion-button.button-BT:focus .fusion-button-text, 
										.fusion-button.button-BT:focus i,
										.fusion-button.button-BT:active .fusion-button-text, 
										.fusion-button.button-BT:active{color:#ffffff;}
										.fusion-button.button-BT:hover .fusion-button-icon-divider, 
										.fusion-button.button-BT:hover .fusion-button-icon-divider, 
										.fusion-button.button-BT:active .fusion-button-icon-divider{border-color:#1f3163;}
										.fusion-button.button-BT:hover, 
										.fusion-button.button-BT:focus, 
										.fusion-button.button-BT:active{border-color:#ffffff;}
										.fusion-button.button-BT {border-color:#ffffff;border-radius:5px;}
										.fusion-button.button-BT{background: #ffffff;}
										.fusion-button.button-BT:hover,
										.button-BT:focus,
										.fusion-button.button-BT:active{background: #1f3163;}
									</style>
									<a class="fusion-button button-flat fusion-button-default-size button-custom button-BT fusion-button-default-span fusion-button-default-type" target="_self" href="register-member">
										<span class="fusion-button-text">REGISTER</span>
									</a>
									<a class="fusion-button button-flat fusion-button-default-size button-custom button-BT fusion-button-default-span fusion-button-default-type" target="_self" href="login-member">
										<span class="fusion-button-text">LOGIN</span>
									</a>
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
							<div class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column">
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
										/* border-top: 2px solid #1f3163; */
										border-bottom: 2px solid #1f3163;
										padding: 10px 0px;
									}
									.bt_list_categori .bt_list_categori-ul .bt_list_categori-li:first-child .bt_list_categori-link {
										width: 100%;
										display: block;
										border-top: 2px solid #1f3163;
										border-bottom: 2px solid #1f3163;
										padding: 10px 0px;
									}
									.bt_list_categori .bt_list_categori-ul .bt_list_categori-li:last-child .bt_list_categori-link {
										width: 100%;
										display: block;
										/* border-top: 2px solid #1f3163; */
										border-bottom: 2px solid #1f3163;
										padding: 10px 0px;
									}
									.bt_list_categori .bt_list_categori-ul .bt_list_categori-li .bt_list_categori-link:hover {
										color: #fff;
										background-color: #559ab0;
										padding: 10px 20px;
									}
								</style>
								<!-- <div class="bt_list_categori">
									<ul class="bt_list_categori-ul">

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
												// 'hierarchical'             => 1,
											);

											$cats = get_categories($args);

											foreach($cats as $cat) {
												?>
													<li class="bt_list_categori-li">
														<a href="<?php echo get_category_link( $cat->term_id ) ?>"  class="bt_list_categori-link">
															<?php echo $cat->name; ?>
														</a>
													</li>
												<?php
											}
										?>

									</ul>
								</div> -->

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
							<div class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column">

								<div class="fusion-title title fusion-title-3 fusion-sep-none fusion-title-text fusion-title-size-one fusion-border-below-title">
									<h1 class="title-heading-left">
										<strong><?php echo get_the_title();?></strong>
									</h1>
								</div>

								<div class="fusion-title title fusion-title-4 fusion-sep-none fusion-title-text fusion-title-size-four fusion-border-below-title">

									<h4 class="title-heading-left">
										<?php
											$category_detail=get_the_terms($_GET['id'], 'categori');//$post->ID
											$myArray = array();
												foreach($category_detail as $cd){
												$myArray[] = '<a href="'.get_category_link( $cd->term_id ).'" target="_blank">'.ucfirst($cd->name).'</a>';
												// $cetak_nama_link = $cd->term_id.'';
												// $cetak_nama = $cd->name.', ';
												// echo '<a href="'.get_category_link( $cetak_nama_link ).'" target="_blank">'.$cetak_nama.'</a>';
												// rtrim($cetak_nama,"");
											}
											echo implode( ', ', $myArray );
										?>
									</h4>
								</div>
								
								<div class="fusion-separator fusion-full-width-sep" style="align-self: center;margin-left: auto;margin-right: auto;margin-top:20px;width:100%;"></div>

								<div class="fusion-text fusion-text-1">
									<div class="pt-3 text-muted font-thin mb-0">
										<!-- <div class="btmore"><!?php the_content(); ?></div> -->

										<!-- <!?php
										
										function new_excerpt_more($more) {
											global $post;
											return '... <a class="reveal-full-content"  action-id ="' . $post->ID .'" href="#">Read more</a>';
										}
										add_filter('excerpt_more', 'new_excerpt_more');

										?> -->
										<div id="excerpt-content" class="excerpt-content" action-id="<?php the_ID(); ?>">
											<!-- <!?php the_excerpt(); ?> -->
                                            <?php 
                                            $content = get_the_content();
                                            $content = strip_tags($content);
                                            echo substr($content, 0, 300);
                                            ?>
                                            <p id="readmore" class="reveal-full-content" href="#" onclick="showMore()" style=" display: inline; color: #559ab0; cursor: pointer; ">Read more</p>
                                            <!-- <a id="readmore" class="reveal-full-content" href="#" onclick="showMore()">Read more</a> -->
										</div>
										<div id="full-content" class="full-content" action-id="<?php the_ID(); ?>" style="display: none;">
											<?php the_content(); ?>
                                            <!-- <a id="readless" class="reveal-full-content" href="#" onclick="showLess()">Read less</a> -->
                                            <p id="readless" class="reveal-full-content" href="#" onclick="showLess()" style=" display: inline; color: #559ab0; cursor: pointer; ">Read less</p>
										</div>
										
										<style>
											.morecontent span {
												display: none;
											}
											.morelink {
												display: block;
											}
										</style>
										<!-- <p class="btmore"><!?php echo get_post_meta( $post->ID,'long_description', true );?></p> -->
									</div>
									
									<div class="fusion-separator fusion-full-width-sep" style="align-self: center;margin-left: auto;margin-right: auto;margin-top:70px;width:100%;"></div>

									<script type="text/javascript">
										document.addEventListener("DOMContentLoaded", function(event) { 
											jQuery( '#slider-pro-3-1412' ).sliderPro({
												//width
														width: 1000,
														
												//height
														autoHeight: true,
														
												//auto play
														autoplay:  true,
												autoplayOnHover: 'none',
																		autoplayDelay: 5000,
												
												
												arrows: true,
												buttons: false,
												smallSize: 500,
												mediumSize: 1000,
												largeSize: 3000,
												fade: true,
												
												//thumbnail
												thumbnailArrows: true,
												thumbnailWidth: 120,
												thumbnailHeight: 120,
																thumbnailsPosition: 'bottom',
																centerImage: true,
												imageScaleMode: 'cover',
												allowScaleUp: true,
														startSlide: 0,
												loop: true,
												slideDistance: 5,
												autoplayDirection: 'normal',
												touchSwipe: true,
												fullScreen: true,
											});
										});
									</script>
									<style>
										/* Layout 3 */
										/* border */
										#slider-pro-3-1412 .sp-selected-thumbnail {
											border: 4px solid #000000;
										}

										/* font + color */
										.title-in  {
											font-family: Arial !important;
											color: #FFFFFF !important;
											background-color: #000000 !important;
											opacity: 0.7 !important;
										}
										.desc-in  {
											font-family: Arial !important;
											color: #FFFFFF !important;
											background-color: #00000 !important;
											opacity: 0.7 !important;
										}

										/* bullets color */
										.sp-button  {
											border: 2px solid #000000 !important;
										}
										.sp-selected-button  {
											background-color: #000000 !important;
										}

										/* pointer color - bottom */
										.sp-selected-thumbnail::before {
											border-bottom: 5px solid #000000 !important;
										}
										.sp-selected-thumbnail::after {
											border-bottom: 13px solid #000000 !important;
										}

										/* pointer color - top */

										/* full screen icon */
										.sp-full-screen-button::before {
											color: #FFFFFF !important;
										}

										/* hover navigation icon color */
										.sp-next-arrow::after, .sp-next-arrow::before {
											background-color: #FFFFFF !important;
										}
										.sp-previous-arrow::after, .sp-previous-arrow::before {
											background-color: #FFFFFF !important;
										}

										#slider-pro-3-1412 .title-in {
											color: #FFFFFF !important;
											font-weight: bolder;
											text-align: center;
										}

										#slider-pro-3-1412 .title-in-bg {
											background: rgba(255, 255, 255, 0.7); !important;
											white-space: unset !important;
											max-width: 90%;
											min-width: 40%;
											transform: initial !important;
											-webkit-transform: initial !important;
											font-size: 14px !important;
										}

										#slider-pro-3-1412 .desc-in {
											color: #FFFFFF !important;
											text-align: center;
										}
										#slider-pro-3-1412 .desc-in-bg {
											background: rgba(#00000, 0.7) !important;
											white-space: unset !important;
											width: 80% !important;
											min-width: 30%;
											transform: initial !important;
											-webkit-transform: initial !important;
											font-size: 13px !important;
										}

										@media (max-width: 640px) {
											#slider-pro-3-1412 .hide-small-screen {
												display: none;
											}
										}

										@media (max-width: 860px) {
											#slider-pro-3-1412 .sp-layer {
												font-size: 18px;
											}
											
											#slider-pro-3-1412 .hide-medium-screen {
												display: none;
											}
										}
										.slides-not-found {
											background-color: #a92929;
											border-radius: 5px;
											color: #fff;
											font-family: initial;
											text-align: center;
											padding:12px;
										}
										/* Custom CSS */
									</style>
									<div class="bt_slider_product">
										<div id="slider-pro-3-1412" class="slider-pro">
											<!---- slides div start ---->
											<div class="sp-slides">
												<?php
													$bt_slider = get_post_meta(get_the_ID(),'gambar_utama', true);
													echo (empty($bt_slider)) ? '' : '<div class="sp-slide">
													<img class="sp-image" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'gambar_utama', true).'" />
												</div>';
												?>
												<?php
													$bt_slider_item = get_post_meta(get_the_ID(),'poto_1', true);
													echo (empty($bt_slider_item)) ? '' : '<div class="sp-slide">
													<img class="sp-image" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'poto_1', true).'" />
												</div>';
												?>
												<?php
													$bt_slider_item = get_post_meta(get_the_ID(),'poto_2', true);
													echo (empty($bt_slider_item)) ? '' : '<div class="sp-slide">
													<img class="sp-image" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'poto_2', true).'" />
												</div>';
												?>
												<?php
													$bt_slider_item = get_post_meta(get_the_ID(),'poto_3', true);
													echo (empty($bt_slider_item)) ? '' : '<div class="sp-slide">
													<img class="sp-image" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'poto_3', true).'" />
												</div>';
												?>
												<?php
													$bt_slider_item = get_post_meta(get_the_ID(),'poto_4', true);
													echo (empty($bt_slider_item)) ? '' : '<div class="sp-slide">
													<img class="sp-image" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'poto_4', true).'" />
												</div>';
												?>
												<?php
													$bt_slider_item = get_post_meta(get_the_ID(),'poto_5', true);
													echo (empty($bt_slider_item)) ? '' : '<div class="sp-slide">
													<img class="sp-image" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'poto_5', true).'" />
												</div>';
												?>
											</div>
											<!---- slides div end ---->
											<!-- slides thumbnails div start -->
											<div class="sp-thumbnails">
												<?php
													$bt_slider_thumbnail = get_post_meta(get_the_ID(),'gambar_utama', true);
													echo (empty($bt_slider_thumbnail)) ? '' : '<img class="sp-thumbnail" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'gambar_utama', true).'" />';
												?>
												<?php
													$bt_slider_thumbnail = get_post_meta(get_the_ID(),'poto_1', true);
													echo (empty($bt_slider_thumbnail)) ? '' : '<img class="sp-thumbnail" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'poto_1', true).'" />';
												?>
												<?php
													$bt_slider_thumbnail = get_post_meta(get_the_ID(),'poto_2', true);
													echo (empty($bt_slider_thumbnail)) ? '' : '<img class="sp-thumbnail" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'poto_2', true).'" />';
												?>
												<?php
													$bt_slider_thumbnail = get_post_meta(get_the_ID(),'poto_3', true);
													echo (empty($bt_slider_thumbnail)) ? '' : '<img class="sp-thumbnail" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'poto_3', true).'" />';
												?>
												<?php
													$bt_slider_thumbnail = get_post_meta(get_the_ID(),'poto_4', true);
													echo (empty($bt_slider_thumbnail)) ? '' : '<img class="sp-thumbnail" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'poto_4', true).'" />';
												?>
												<?php
													$bt_slider_thumbnail = get_post_meta(get_the_ID(),'poto_5', true);
													echo (empty($bt_slider_thumbnail)) ? '' : '<img class="sp-thumbnail" alt="'.get_the_title().'" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/images/blank.gif" data-src="'.get_post_meta( $post->ID,'poto_5', true).'" />';
												?>
											</div>
											<!-- slides thumbnails div end -->
										</div>
									</div>

									<div class="fusion-separator fusion-full-width-sep" style="align-self: center;margin-left: auto;margin-right: auto;margin-top:70px;width:100%;"></div>

									<div class="bt_file_additional">
										<h3 class="bt_heading_h3">Additional information</h3>
										<div class="" style="display:flex;gap: 16px;">
											<?php
												$bt_file_additional = get_post_meta(get_the_ID(),'poto_additional', true);
												echo (empty($bt_file_additional)) ? '-' : '<a href="'.get_post_meta( $post->ID,'poto_additional', true).'" target="_blank" class="d-block file_additional_item" rel="noopener noreferrer"><div class="row"><div class="col-md-11"><div class="bt_file_additional_content"><div class="bt_file_additional_content_img me-3"><img src="https://dewanstudio.biz/SIT/eria/wp-content/uploads/2022/09/icon-pdf.png" alt="eria"></div><div class="bt_file_additional_text"><div class="bt_file_additional_title"><p>Download PDF</p></div></div></div></div></div></a>';
											?>
											<?php
												$bt_file_additional = get_post_meta(get_the_ID(),'txtVideoLink', true);
												echo (empty($bt_file_additional)) ? '-' : '<a href="'.get_post_meta( $post->ID,'txtVideoLink', true).'" target="_blank" class="d-block file_additional_item" rel="noopener noreferrer"><div class="row"><div class="col-md-11"><div class="bt_file_additional_content"><div class="bt_file_additional_content_img me-3"><img src="https://dewanstudio.biz/SIT/eria/wp-content/uploads/2022/09/video-icon-1.png" alt="eria"></div><div class="bt_file_additional_text"><div class="bt_file_additional_title"><p>View Video</p></div></div></div></div></div></a>';
											?>
										</div>
										<!-- <a href="<?php echo get_post_meta( $post->ID,'poto_additional', true);?>" target="_blank" class="d-block file_additional_item" rel="noopener noreferrer">
											<div class="row">
												<div class="col-md-11">
													<div class="bt_file_additional_content">
														<div class="bt_file_additional_content_img me-3">
															<img src="https://dewanstudio.biz/SIT/eria/wp-content/uploads/2022/09/icon-pdf.png" alt="eria">
														</div>
														<div class="bt_file_additional_text">
															<div class="bt_file_additional_title">
																<p><?php echo get_post_meta( $post->ID,'poto_additional', true);?></p>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-1">
													<div class="bt_file_additional_cta">
														<span class="btn bt_file_additional_cta_see shadow-none border-0 p-0"><i class="fas fa-external-link-alt"></i></span>
													</div>
												</div>
											</div>
										</a> -->

									</div>
								</div>
								
								<style>
									.bt_file_additional {}
									.bt_file_additional .bt_heading_h3 {}
									.bt_file_additional .file_additional_item {
										padding: 15px;
										background-color: white;
										border: 1px solid #E7E7E7;
										border-radius: 0.75rem;
										margin-bottom: 10px;
										cursor: pointer;
										display: flex;
										transition: none 0s ease 0s;
									}
									.bt_file_additional .file_additional_item:hover {
										color: white;
										background-color: rgb(121, 97, 242);
									}
									.bt_file_additional .file_additional_item .bt_file_additional_content {
										display: inline-flex;
									}
									.bt_file_additional_content .bt_file_additional_content_img {
										margin-right: 1rem!important;
									}
									.bt_file_additional_content .bt_file_additional_content_img img {
										width: 35px;
									}
									.bt_file_additional_content .bt_file_additional_text {
										display: flex;
									}
									.bt_file_additional_content .bt_file_additional_text .bt_file_additional_title {
										font-family: Poppins;
										font-style: normal;
										font-weight: 600;
										font-size: 16px;
										line-height: 26px;
										--color-text-primary-light: #262626;
										color: var(--color-text-primary-light);
										display: flex;
										align-items: center;
										width: max-content;
									}
									.bt_file_additional_content p {
										margin: 0px;
									}
									.bt_file_additional_cta {
										text-align: right;
									}
									.bt_file_additional_cta span {
										font-family: Poppins;
										font-style: normal;
										font-weight: 600;
										font-size: 12px;
										line-height: 22px;
										color: var(--color-company-yellow);
										border: 1px solid var(--color-company-yellow);
										border-radius: 5px;
										padding: 5px 12.5px;
									}
									.bt_file_additional_cta span.bt_file_additional_cta_see {
										font-family: Poppins;
										font-style: normal;
										font-weight: 600;
										font-size: 12px;
										line-height: 22px;
										color: var(--color-company-yellow);
										border: 1px solid var(--color-company-yellow);
										border-radius: 5px;
										padding: 5px 12.5px;
									}
								</style>

								<div class="fusion-separator fusion-full-width-sep" style="align-self: center;margin-left: auto;margin-right: auto;margin-top:70px;width:100%;"></div>

								<div class="">
									<div class="">
										<h2 class="title-heading-left">Company Information</h2>
									</div>

									<div class="">
										<h4 class="title-heading-left title-heading-tag" style="font-family:'SF Pro Display Bold';font-weight:400;margin:0;color:#1f3163;" data-detail="<?php echo get_user_meta($post->post_author,'company_name',true);?>" >
											<strong><?php echo get_user_meta($post->post_author,'company_name',true);?></strong>
										</h4>
									</div>

									<div class="fusion-text fusion-text-2">
										<p data-detail="<?php echo get_user_meta($post->post_author,'company_profile',true);?>" ><?php echo get_user_meta($post->post_author,'company_profile',true);?></p>
									</div>


									<div class="fusion-text fusion-text-3">
										<p>Headquarter : <span data-detail="<?php echo get_user_meta($post->post_author,'company_city',true);?>" ><?php echo get_user_meta($post->post_author,'company_city',true);?></span>, <span data-detail="<?php echo get_user_meta($post->post_author,'company_country',true);?>" ><?php echo get_user_meta($post->post_author,'company_country',true);?></span></p>
									</div>

									<div class="">
										<h4 class="title-heading-left title-heading-tag">
											<strong>Contact</strong>
										</h4>
									</div>
									<div class="fusion-text fusion-text-3">
										
										<p><?php echo get_user_meta($post->post_author,'first_contact_title',true);?> <?php echo get_user_meta($post->post_author,'first_contact_name',true);?></p>

										<p>E : <a href="mailto:<?php echo get_user_meta($post->post_author,'first_contact_email',true);?>"><?php echo get_user_meta($post->post_author,'first_contact_email',true);?></a></p>

										<p>W : <a href="<?php echo get_user_meta($post->post_author,'website',true);?>"><?php echo get_user_meta($post->post_author,'website',true);?></a></p>
									</div>
									
									<h4 class="title-heading-left title-heading-tag">
										<strong>Follow Us</strong>
									</h4>
									<div class="fusion-social-networks boxed-icons">
										<div class="fusion-social-networks-wrapper">
											<?php
												$bt_sosmed = get_user_meta($post->post_author,'company_linkedin', true);
												echo (empty($bt_sosmed)) ? '' : '<a class="fusion-social-network-icon fusion-tooltip fusion-facebook fusion-icon-linkedin" style="border-radius:50px;padding:8px;font-size:16px;color: #fff;background-color: #3a6cb4;border-color: #3a6cb4;" data-placement="top" data-title="Linkedin Page '.get_user_meta( $post->post_author,'company_name', true).'" data-toggle="tooltip" title="Linkedin Page '.get_user_meta( $post->post_author,'company_name', true).'" target="_blank" rel="noopener noreferrer nofollow" href="'.get_user_meta( $post->post_author,'company_linkedin', true).'" data-original-title="Linkedin Page '.get_user_meta( $post->post_author,'company_name', true).'"></a>';
											?>
											<?php
												$bt_sosmed = get_user_meta($post->post_author,'company_facebook', true);
												echo (empty($bt_sosmed)) ? '' : '<a class="fusion-social-network-icon fusion-tooltip fusion-facebook fusion-icon-facebook" style="border-radius:50px;padding:8px;font-size:16px;color: #fff;background-color: #3a6cb4;border-color: #3a6cb4;" data-placement="top" data-title="Facebook Page '.get_user_meta( $post->post_author,'company_name', true).'" data-toggle="tooltip" title="Facebook Page '.get_user_meta( $post->post_author,'company_name', true).'" aria-label="Facebook Page '.get_user_meta( $post->post_author,'company_name', true).'" target="_blank" rel="noopener noreferrer nofollow" href="'.get_user_meta( $post->post_author,'company_facebook', true).'" data-original-title="Facebook Page '.get_user_meta( $post->post_author,'company_name', true).'"></a>';
											?>
											<?php
												$bt_sosmed = get_user_meta($post->post_author,'company_instagram', true);
												echo (empty($bt_sosmed)) ? '' : '<a class="fusion-social-network-icon fusion-tooltip fusion-instagram fusion-icon-instagram" style="border-radius:50px;padding:8px;font-size:16px;color: #fff;background-color: #3a6cb4;border-color: #3a6cb4;" data-placement="top" data-title="Instagram Page '.get_user_meta( $post->post_author,'company_name', true).'" data-toggle="tooltip" title="Instagram Page '.get_user_meta( $post->post_author,'company_name', true).'" aria-label="Instagram Page '.get_user_meta( $post->post_author,'company_name', true).'" target="_blank" rel="noopener noreferrer nofollow" href="'.get_user_meta( $post->post_author,'company_instagram', true).'" data-original-title="Instagram Page '.get_user_meta( $post->post_author,'company_name', true).'"></a>';
											?>
											<?php
												$bt_sosmed = get_user_meta($post->post_author,'company_twitter', true);
												echo (empty($bt_sosmed)) ? '' : '<a class="fusion-social-network-icon fusion-tooltip fusion-twitter fusion-icon-twitter" style="border-radius:50px;padding:8px;font-size:16px;color: #fff;background-color: #3a6cb4;border-color: #3a6cb4;" data-placement="top" data-title="Twitter Page '.get_user_meta( $post->post_author,'company_name', true).'" data-toggle="tooltip" title="Twitter Page '.get_user_meta( $post->post_author,'company_name', true).'" aria-label="Twitter Page '.get_user_meta( $post->post_author,'company_name', true).'" target="_blank" rel="noopener noreferrer nofollow" href="'.get_user_meta( $post->post_author,'company_twitter', true).'" data-original-title="Twitter Page '.get_user_meta( $post->post_author,'company_name', true).'"></a>';
											?>
										</div>
									</div>
									
								</div>

								<div class="fusion-separator fusion-full-width-sep" style="align-self: center;margin-left: auto;margin-right: auto;margin-top:70px;width:100%;"></div>

							</div>
						</div>
					</div>
				</div>
				
				<?php fusion_link_pages(); ?>
			</div>

			
			<?php if ( ! post_password_required( $post->ID ) ) : ?>
				<?php if ( Avada()->settings->get( 'comments_pages' ) ) : ?>
					<?php comments_template(); ?>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	<?php endwhile; ?>
</section>
<!-- END CONTENT -->

<!-- START FOOTER -->
<?php
function bt_custom_css() {
	?>
		<link rel="stylesheet" id="wpfrank-uris-slider-css-css" href="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/css/slider-pro.css?ver=6.0.2" type="text/css" media="all">
		<style>
		/* // your css code goes here */
		html:not(.avada-has-site-width-percent) #main {
			padding: 0;
		}
		#main .fusion-row {
			max-width: 100%;
		}
		</style>
	<?php
}
add_action('wp_footer', 'bt_custom_css');
?>
<?php
function bt_add_javascript() {
	?>
		<script type="text/javascript" src="https://dewanstudio.biz/SIT/eria/wp-content/plugins/ultimate-responsive-image-slider/assets/js/jquery.sliderPro.js?ver=1.5.0" id="wpfrank-uris-jquery-sliderPro-js-js"></script>
	<?php
}
add_action('wp_footer', 'bt_add_javascript' );
?>
<?php
function bt_custom_javascript() {
	?>
		<script type="text/javascript">
			// your javascript code goes here
			jQuery( document ).ready( function() {
				// Configure/customize these variables.
				var showChar = 100;  // How many characters are shown by default
				var ellipsestext = "...";
				var moretext = "Show more >";
				var lesstext = "Show less";
				

				$('.btmore').each(function() {
					var content = $(this).html();
			
					if(content.length > showChar) {
			
						var c = content.substr(0, showChar);
						var h = content.substr(showChar, content.length - showChar);
			
						var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
			
						$(this).html(html);
					}
			
				});
			
				$(".morelink").click(function(){
					if($(this).hasClass("less")) {
						$(this).removeClass("less");
						$(this).html(moretext);
					} else {
						$(this).addClass("less");
						$(this).html(lesstext);
					}
					$(this).parent().prev().toggle();
					$(this).prev().toggle();
					return false;
				});
			});
		</script>
	<?php
}
add_action('wp_footer', 'bt_custom_javascript', 100 );
?>
<style>
/* html:not(.avada-has-site-width-percent) #main {
	padding: 0;
}
#main .fusion-row {
	max-width: 100%;
} */
</style>
<script>
    var a = document.getElementById("excerpt-content");
    var b = document.getElementById("full-content");

    function showMore(){
        a.style.display = "none";
        b.style.display = "block";
    }
    function showLess(){
        a.style.display = "block";
        b.style.display = "none";
    }
</script>
<?php get_footer(); ?>
<!-- END FOOTER -->
