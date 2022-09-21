<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    img.gambar-utama{
        max-width:200px;
    }
</style>
<?php
/*
 * Template Name: Template Produk
 * Template Post Type: produk
 */
?>
<title> <?php the_title(); ?></title>



<h1>Judul : <?php the_title(); ?></h1>
<span>Negara : <?php echo get_user_meta($post->post_author,'company_country',true);?></span>
<p>Kategori : <?php   $category_detail=get_the_category($_GET['id']);//$post->ID
    foreach($category_detail as $cd){
    echo $cd->cat_name;
    echo "<br>";
    }?></p>


<p>Short desc : <?php echo get_post_meta(get_the_ID(),'short_description', true);?></p>

<?php
$a = get_post_meta(get_the_ID(),'gambar_utama', true);
if (empty($a)) {
  echo "<img src='https://www.contentviewspro.com/wp-content/uploads/2017/07/default_image.png'>";
}else{
echo "<img class='gambar-utama' src='".get_post_meta(get_the_ID(),'gambar_utama', true)."'>";
}
    
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:20%;">
  <div class="carousel-inner">

  <?php
    $a = get_post_meta(get_the_ID(),'poto_1', true);
    echo (empty($a)) ? '' : '<div class="carousel-item active">
    <img class="d-block w-100" src="'.get_post_meta(get_the_ID(),"poto_1", true).'">
    </div>';
  ?>
  
  <?php
    $a = get_post_meta(get_the_ID(),'poto_2', true);
    echo (empty($a)) ? '' : '<div class="carousel-item">
    <img class="d-block w-100" src="'.get_post_meta(get_the_ID(),"poto_2", true).'">
    </div>';
  ?>

<?php
    $a = get_post_meta(get_the_ID(),'poto_3', true);
    echo (empty($a)) ? '' : '<div class="carousel-item">
    <img class="d-block w-100" src="'.get_post_meta(get_the_ID(),"poto_3", true).'">
    </div>';
  ?>

<?php
    $a = get_post_meta(get_the_ID(),'poto_4', true);
    echo (empty($a)) ? '' : '<div class="carousel-item">
    <img class="d-block w-100" src="'.get_post_meta(get_the_ID(),"poto_4", true).'">
    </div>';
  ?>

<?php
    $a = get_post_meta(get_the_ID(),'poto_5', true);
    echo (empty($a)) ? '' : '<div class="carousel-item">
    <img class="d-block w-100" src="'.get_post_meta(get_the_ID(),"poto_5", true).'">
    </div>';
  ?>

  

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- <img src="<!?php echo get_post_meta(get_the_ID(),'gambar_utama', true);?>"> -->
<p>Long desc : <?php echo get_post_meta(get_the_ID(),'long_description', true);?></p>
<p>Current Distribution desc : <?php echo get_post_meta(get_the_ID(),'current_distribution_countries', true);?></p>
<p>Video link : <?php echo get_post_meta(get_the_ID(),'video_link', true);?></p>


<h2>About : <?php echo get_user_meta($post->post_author,'company_name',true);?></h2>
<h3>Description : <?php echo get_user_meta($post->post_author,'description',true);?></h3>
<span>Head quarter : <?php echo get_user_meta($post->post_author,'company_city',true);?></span>
<h2>Contact</h2>
<ul>
    <li>Website :<?php echo get_user_meta($post->post_author,'website',true);?></li>
    <li>Linkedin :<?php echo get_user_meta($post->post_author,'company_linkedin',true);?></li>
    <li>Facebook :<?php echo get_user_meta($post->post_author,'company_facebook',true);?></li>
    <li>Instagram :<?php echo get_user_meta($post->post_author,'company_instagram',true);?></li>
    <li>Twitter :<?php echo get_user_meta($post->post_author,'company_twitter',true);?></li>
</ul>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
