<?php
function wpbt_coba_productadd()
{

?>

<?php
if ( is_user_logged_in() ) { 
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post") {
$new_post = array(
        'post_title'    =>  $_POST['title'],
        'post_status'   => 'pending', // Choose: publish, preview, future, draft, etc.
        'post_type'     => 'job' //'post',page' or use a custom post type if you want to
);

$post_id = wp_insert_post($new_post);
// add category
// $category_id = array(1,4);
$category_id = $_POST['category'];
$taxonomy = 'category';
wp_set_object_terms( $post_id, $category_id, $taxonomy );

// close category

// add upload image
if(isset($_FILES['uploadfile']['name'])){
    if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
    }
    $uploadedfile = $_FILES['uploadfile'];
    $upload_overrides = array( 'test_form' => false );
    $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
    // add_post_meta($post_id, "gambar_utama", $movefile['url'], true);
    add_post_meta($post_id, "short_description", $movefile['url'], true);

    // if ( $movefile && ! isset( $movefile['error'] ) ) {
    //     echo '<a href="'.$movefile['url'].'">view</a>';
    // } else {
    //     echo $movefile['error'];
    // }
    // die;
}
if(isset($_FILES['poto_1']['name'])){
    if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
    }
    $uploadedfile = $_FILES['poto_1'];
    $upload_overrides = array( 'test_form' => false );
    $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
    add_post_meta($post_id, "poto_1", $movefile['url'], true);
}
if(isset($_FILES['poto_2']['name'])){
    if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
    }
    $uploadedfile = $_FILES['poto_2'];
    $upload_overrides = array( 'test_form' => false );
    $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
    add_post_meta($post_id, "poto_2", $movefile['url'], true);
}
if(isset($_FILES['poto_3']['name'])){
    if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
    }
    $uploadedfile = $_FILES['poto_3'];
    $upload_overrides = array( 'test_form' => false );
    $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
    add_post_meta($post_id, "poto_3", $movefile['url'], true);
}
if(isset($_FILES['poto_4']['name'])){
    if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
    }
    $uploadedfile = $_FILES['poto_4'];
    $upload_overrides = array( 'test_form' => false );
    $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
    add_post_meta($post_id, "poto_4", $movefile['url'], true);
}
if(isset($_FILES['poto_5']['name'])){
    if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
    }
    $uploadedfile = $_FILES['poto_5'];
    $upload_overrides = array( 'test_form' => false );
    $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
    add_post_meta($post_id, "poto_5", $movefile['url'], true);
}

// add_post_meta($post_id, "short_description", $_POST['short_description'], true);
add_post_meta($post_id, "long_description", $_POST['long_description'], true);
add_post_meta($post_id, "current_distribution_countries", $_POST['current_distribution_countries'], true);
add_post_meta($post_id, "video_link", $_POST['video_link'], true);
// add default template
add_post_meta($post_id, "_wp_page_template", "template-produk.php", true);
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
        <input type='text' class="form-control" required="" name="title" />
    </div>

    <div class="form-group">
        <label>Kategori</label>
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
        <!-- <textarea name="short_description" id="" cols="30" rows="10"></textarea> -->
    </div>
    <div class="form-group">
        <label>Long Description</label>
        <textarea name="long_description" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
    <label>Current Distribution Country</label>
        <select name="current_distribution_countries" id="">
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
        <label>Gambar utama</label>
        <input type='file' id="file" class="form-control" name="uploadfile" />
    </div>


    <div class="form-group">
        <label>Poto 1</label>
        <input type='file' id="file" class="form-control" name="poto_1" />
    </div>
    <div class="form-group">
        <label>Poto 2</label>
        <input type='file' id="file" class="form-control" name="poto_2" />
    </div>
    <div class="form-group">
        <label>Poto 3</label>
        <input type='file' id="file" class="form-control" name="poto_3" />
    </div>
    <div class="form-group">
        <label>Poto 4</label>
        <input type='file' id="file" class="form-control" name="poto_4" />
    </div>
    <div class="form-group">
        <label>Poto 5</label>
        <input type='file' id="file" class="form-control" name="poto_5" />
    </div>

    <div class="form-group">
        <label>Video Link</label>
        <textarea name="video_link" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Save"/>
    </div>
      
    <input type="hidden" name="action" value="new_post" />
<?php wp_nonce_field( 'new-post' ); ?>
</form> 
<?php } else { ?>
    Klik<a href="/login">Login </a>terlebih dahulu
<?php } ?>


<?php

}
