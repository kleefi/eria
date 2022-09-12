<style>
    img.gambar-utama{
        max-width:200px;
    }
</style>
<title> <?php the_title(); ?> - <?php echo get_the_title($_GET['id']);?></title>
<?php
/**
 * Template Name: Edit Produk
 */
if ( is_user_logged_in() ) { 
if( 'POST' == $_SERVER['REQUEST_METHOD']) {
$new_post = array(
        'ID' => $_GET['id'],
        'post_title'    =>  $_POST['title'],
        'post_status'   => 'pending', // Choose: publish, preview, future, draft, etc.
        'post_type'     => 'produk' //'post',page' or use a custom post type if you want to
);
$post_id = wp_update_post($new_post);
// update category
$category_id = $_POST['category'];
$taxonomy = 'category';
wp_set_object_terms( $post_id, $category_id, $taxonomy );


// if no image changing, get value to store meta_key => gambar_utama
if(empty($_FILES['uploadfile']['name'])){
    add_post_meta($post_id, "gambar_utama", $_POST['gambar_utama'], true);
}else{
    if(isset($_FILES['uploadfile']['name'])){
        if ( ! function_exists( 'wp_handle_upload' ) ) {
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }
        $uploadedfile = $_FILES['uploadfile'];
        $upload_overrides = array( 'test_form' => false );
        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
        add_post_meta($post_id, "gambar_utama", $movefile['url'], true);
    
        // if ( $movefile && ! isset( $movefile['error'] ) ) {
        //     echo '<a href="'.$movefile['url'].'">view</a>';
        // } else {
        //     echo $movefile['error'];
        // }
        // die;
    }
}
if(empty($_FILES['poto_1']['name'])){
    add_post_meta($post_id, "poto_1", $_POST['poto_1'], true);
}else{
    if(isset($_FILES['poto_1']['name'])){
        if ( ! function_exists( 'wp_handle_upload' ) ) {
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }
        $uploadedfile = $_FILES['poto_1'];
        $upload_overrides = array( 'test_form' => false );
        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
        add_post_meta($post_id, "poto_1", $movefile['url'], true);
    }
}
if(empty($_FILES['poto_2']['name'])){
    add_post_meta($post_id, "poto_2", $_POST['poto_2'], true);
}else{
    if(isset($_FILES['poto_2']['name'])){
        if ( ! function_exists( 'wp_handle_upload' ) ) {
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }
        $uploadedfile = $_FILES['poto_2'];
        $upload_overrides = array( 'test_form' => false );
        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
        add_post_meta($post_id, "poto_2", $movefile['url'], true);
    }
}
if(empty($_FILES['poto_3']['name'])){
    add_post_meta($post_id, "poto_3", $_POST['poto_3'], true);
}else{
    if(isset($_FILES['poto_3']['name'])){
        if ( ! function_exists( 'wp_handle_upload' ) ) {
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }
        $uploadedfile = $_FILES['poto_3'];
        $upload_overrides = array( 'test_form' => false );
        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
        add_post_meta($post_id, "poto_3", $movefile['url'], true);
    }
}
if(empty($_FILES['poto_4']['name'])){
    add_post_meta($post_id, "poto_4", $_POST['poto_4'], true);
}else{
    if(isset($_FILES['poto_4']['name'])){
        if ( ! function_exists( 'wp_handle_upload' ) ) {
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }
        $uploadedfile = $_FILES['poto_4'];
        $upload_overrides = array( 'test_form' => false );
        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
        add_post_meta($post_id, "poto_4", $movefile['url'], true);
    }
}
if(empty($_FILES['poto_5']['name'])){
    add_post_meta($post_id, "poto_5", $_POST['poto_5'], true);
}else{
    if(isset($_FILES['poto_5']['name'])){
        if ( ! function_exists( 'wp_handle_upload' ) ) {
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }
        $uploadedfile = $_FILES['poto_5'];
        $upload_overrides = array( 'test_form' => false );
        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
        add_post_meta($post_id, "poto_5", $movefile['url'], true);
    }
}

add_post_meta($post_id, "short_description",$_POST['short_description'], true);
add_post_meta($post_id, "long_description", $_POST['long_description'], true);
add_post_meta($post_id, "current_distribution_countries", $_POST['current_distribution_countries'], true);
add_post_meta($post_id, "video_link", $_POST['video_link'], true);
}
?>
   <ul>
    <li><a href="/dashboard">Contact</a></li>
    <li><a href="/perusahaan">Company</a></li>
    <li>Products</li>
    <li><a href="/tambah-produk">Add Product</a></li>
    <li><a href="/daftar-produk">Product List</a></li>
    <li><a href="<?php echo wp_logout_url(); ?>">Logout</a></li>
  </ul>
<form action="" method="post" enctype="multipart/form-data" name="new_post">
    <div class="form-group">
        <label>Title</label>
        <input type='text' class="form-control" required="" name="title" value="<?php echo get_the_title($_GET['id']);?>"/>
    </div>

    <div class="form-group">
        <h3>Active Categories</h3>
            <?php
            $category_detail=get_the_category($_GET['id']);//$post->ID
            
            foreach($category_detail as $cd){
                echo $cd->cat_name;
                echo "<br>";
                }
            ?>

        <h3>Select Categories</h3>
        <?php
            $Parentcatargs = array(
                'orderby' => 'name',
                'order' => 'ASC',
                'use_desc_for_title' => 1,
                'hide_empty' => 0,
                'parent' => 0
            );

            $category = get_categories($Parentcatargs);
            //print_r($category); //Return Array

            foreach ($category as $Parentcat) {
                echo '<input type="radio" name="category[]" id="" value="'.$Parentcat->name.'">';//Get Parent Category Name
                echo $Parentcat->name;
                echo "<br>";
                $childargs = array(
                    'child_of' => $Parentcat->cat_ID,
                    'hide_empty' => 0,
                    'parent' => $Parentcat->cat_ID
                );


                $childcategories = get_categories($childargs);
                //print_r($childcategories); //Return Array
                echo '<ul>';
                foreach ($childcategories as $childcat) {
                    echo '<li>';
                    echo '<input type="checkbox" name="category[]" id="" value="'.$childcat->name.'">'; //Get child Category Name
                    echo $childcat->name;
                    echo '</li>';
                }
                echo "</ul>"; 
            }
        ?>

    </div>

    <div class="form-group">
        <label>Short Description</label>
        <textarea name="short_description" id="" cols="30" rows="10"><?php echo get_post_meta($_GET['id'],'short_description', true);?></textarea>
    </div>
    <div class="form-group">
        <label>Long Description</label>
        <textarea name="long_description" id="" cols="30" rows="10"><?php echo get_post_meta($_GET['id'],'long_description', true);?></textarea>
    </div>
    <div class="form-group">
    <label>Current Distribution Country</label>
        <select name="current_distribution_countries" id="">
            <option value="<?php echo get_post_meta($_GET['id'],'current_distribution_countries', true);?>"><?php echo get_post_meta($_GET['id'],'current_distribution_countries', true);?></option>
            <option value="Domestically (no international trade)">Domestically (no international trade)</option>
            <option value="Asian countries">Asian countries</option>
            <option value="ASEAN countries">ASEAN countries</option>
            <option value="ASEAN +3">ASEAN +3</option>
            <option value="East Asian countries">East Asian countries</option>
            <option value="OECD countries">OECD countries</option>
            <option value="All over the world">All over the world</option>
        </select>
    </div>

    <div class="form-group">
        <label>Gambar Utama</label>
        <img class="gambar-utama" src="<?php echo get_post_meta($_GET['id'],'gambar_utama', true);?>" alt="">
        <input type='hidden' id="file" class="form-control" name="gambar_utama" value="<?php echo get_post_meta($_GET['id'],'gambar_utama', true);?>" />
        <input type='file' id="file" class="form-control" name="uploadfile" />
    </div>

    <div class="form-group">
        <label>Poto 1</label>
        <img class="gambar-utama" src="<?php echo get_post_meta($_GET['id'],'poto_1', true);?>" alt="">
        <input type='hidden' id="file" class="form-control" name="poto_1" value="<?php echo get_post_meta($_GET['id'],'poto_1', true);?>" />
        <input type='file' id="file" class="form-control" name="poto_1" />
    </div>

    <div class="form-group">
        <label>Poto 2</label>
        <img class="gambar-utama" src="<?php echo get_post_meta($_GET['id'],'poto_2', true);?>" alt="">
        <input type='hidden' id="file" class="form-control" name="poto_2" value="<?php echo get_post_meta($_GET['id'],'poto_2', true);?>" />
        <input type='file' id="file" class="form-control" name="poto_2" />
    </div>

    <div class="form-group">
        <label>Poto 3</label>
        <img class="gambar-utama" src="<?php echo get_post_meta($_GET['id'],'poto_3', true);?>" alt="">
        <input type='hidden' id="file" class="form-control" name="poto_3" value="<?php echo get_post_meta($_GET['id'],'poto_3', true);?>" />
        <input type='file' id="file" class="form-control" name="poto_3" />
    </div>

    <div class="form-group">
        <label>Poto 4</label>
        <img class="gambar-utama" src="<?php echo get_post_meta($_GET['id'],'poto_4', true);?>" alt="">
        <input type='hidden' id="file" class="form-control" name="poto_4" value="<?php echo get_post_meta($_GET['id'],'poto_4', true);?>" />
        <input type='file' id="file" class="form-control" name="poto_4" />
    </div>

    <div class="form-group">
        <label>Poto 5</label>
        <img class="gambar-utama" src="<?php echo get_post_meta($_GET['id'],'poto_5', true);?>" alt="">
        <input type='hidden' id="file" class="form-control" name="poto_5" value="<?php echo get_post_meta($_GET['id'],'poto_5', true);?>" />
        <input type='file' id="file" class="form-control" name="poto_5" />
    </div>

    <div class="form-group">
        <label>Video Link</label>
        <input type="text" name="video_link" id="" value="<?php echo get_post_meta($_GET['id'],'video_link', true);?>">
    </div>
    <div class="form-group">
        <input type="submit" value="Save"/>
    </div>
    <input type="hidden" name="action" value="new_post" />
<?php 
    wp_nonce_field( 'new-post' ); 
?>
</form> 
<?php } else { ?>
    Klik<a href="/login">Login </a>terlebih dahulu
<?php } ?>
