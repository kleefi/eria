<?php
$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'job',
    'post_status' => 'publish',
   // 'category_name' => 'reduce',
    'posts_per_page' => 5,
    'paged' => $paged,
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>


    <div class="row-artikel">

    <div class="col-4"> 
    <?php
    $gambar = get_post_meta( get_the_ID(), 'gambar_utama', true );
    if (empty($gambar)) {
     echo '<img style="width:20%;" src="https://media.istockphoto.com/vectors/no-image-vector-symbol-missing-available-icon-no-gallery-for-this-vector-id1128826884?k=20&m=1128826884&s=170667a&w=0&h=_cx7HW9R4Uc_OLLxg2PcRXno4KERpYLi5vCz-NEyhi0=">';
    }else{
    echo '<img style="width:20%;" src="'.$gambar.'">';
    }
    ?>
    
    </div>

      <div class="col-8">
        <h5 style="padding-bottom:10px;"> <?php the_date();?> </h5>
        <h4 class="readmore less"> <?php the_title(); ?> </h4>
        <p> Kategori : <?php   $category_detail=get_the_category($_GET['id']);//$post->ID
    foreach($category_detail as $cd){
    echo $cd->cat_name;
    echo ",";
    }?></p>
        <span style="display:block;">Company Name <?php echo get_user_meta($post->post_author,'company_name',true);?></span><br>
			<a class="btn-download" href="<?php the_permalink();?>">Read More</a>
      </div>

      
      
    </div>


        <?php
    endwhile;
    wp_pagenavi(
        array(
            'query' => $arr_posts,
        )
    );
endif;?>
