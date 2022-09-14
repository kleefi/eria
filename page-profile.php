<title> <?php the_title(); ?></title>
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<?php if ( is_user_logged_in() ) { ?>
    <div class="row">
  <div class="column" style="background-color:#aaa;">
  <h3><?php echo wp_get_current_user()->user_firstname; ?> <?php echo wp_get_current_user()->user_lastname; ?></h3>
  <p><?php echo wp_get_current_user()->user_email; ?></p>
  <ul>
    <li><a href="/dashboard">Contact</a></li>
    <li><a href="/perusahaan">Company</a></li>
    <li>Products</li>
    <li><a href="/tambah-produk">Add Product</a></li>
    <li><a href="/daftar-produk">Product List</a></li>
    <li><a href="<?php echo wp_logout_url(); ?>">Logout</a></li>
  </ul>
  
  </div>
  <div class="column" style="background-color:#bbb;">

  <form action="" method="post" enctype="multipart/form-data">
    <p>Company : <?php echo get_user_meta(wp_get_current_user()->ID,'company_name',true);?></p>
    <p>Email : <?php echo get_user_meta(wp_get_current_user()->ID,'email',true);?></p>
  <img class="gambar-utama" style="width:200px;" src="<?php echo get_user_meta(wp_get_current_user()->ID,'photo_profile',true);?>" alt="">
    <input type='hidden' id="file" class="form-control" name="photo_profile" value="<?php echo get_user_meta(wp_get_current_user()->ID,'photo_profile',true);?>" />
  <input type='file' id="file" class="form-control" name="uploadfile" />
  <br>
  Company name
  <input type="text" name="company_name" id="" value="<?php echo get_user_meta(wp_get_current_user()->ID,'company_name',true);?>">
<br>
Email
  <input type="text" name="email" id="" value="<?php echo get_user_meta(wp_get_current_user()->ID,'email',true);?>">
<br>
Website
<input type="text" name="website" id="" value="<?php echo get_user_meta(wp_get_current_user()->ID,'website',true);?>">
<br>
Country
<select name="company_country" id="">
    <option value="<?php echo get_user_meta(wp_get_current_user()->ID,'company_country',true);?>"><?php echo get_user_meta(wp_get_current_user()->ID,'company_country',true);?></option>
    <option value="Indonesia">Indonesia</option>
    <option value="Malaysia">Malaysia</option>
</select>
<br>
Company Profile
<textarea name="company_profile" id="" cols="30" rows="10"><?php echo get_user_meta(wp_get_current_user()->ID,'description',true);?></textarea>
<br>


<!-- <input type="text" name="company_linkedin" id="" value="<!?php echo get_user_meta(wp_get_current_user()->ID,'company_linkedin',true);?>" hidden>
<input type="text" name="company_facebook" id="" value="<!?php echo get_user_meta(wp_get_current_user()->ID,'company_facebook',true);?>" hidden>
<input type="text" name="company_instagram" id="" value="!?php echo get_user_meta(wp_get_current_user()->ID,'company_instagram',true);?>" hidden>
<input type="text" name="company_twitter" id="" value="<!?php echo get_user_meta(wp_get_current_user()->ID,'company_twitter',true);?>" hidden> -->
<br>
<input type="submit" name="insert" value="Save">
</form>


  </div>
</div>
<?php
if(isset($_POST['insert'])){
if ($_SERVER["REQUEST_METHOD"] == "POST")
      global $wpdb;
      $user_id = wp_get_current_user()->ID;

      update_user_meta( $user_id, 'company_name', $_POST['company_name'] );
      update_user_meta( $user_id, 'email', $_POST['email'] );
    //   update_user_meta( $user_id, 'company_city', $_POST['company_city'] );
      update_user_meta( $user_id, 'company_country', $_POST['company_country'] );
      update_user_meta( $user_id, 'description', $_POST['company_profile'] );
      update_user_meta( $user_id, 'website', $_POST['website'] );
    //   update_user_meta( $user_id, "photo_profile", 'hilang' );
    //   update_user_meta( $user_id, 'company_linkedin', $_POST['company_linkedin'] );
    //   update_user_meta( $user_id, 'company_facebook', $_POST['company_facebook'] );
    //   update_user_meta( $user_id, 'company_instagram', $_POST['company_instagram'] );
    //   update_user_meta( $user_id, 'company_twitter', $_POST['company_twitter'] );


    if(isset($_FILES['uploadfile']['name'])){
        if ( ! function_exists( 'wp_handle_upload' ) ) {
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }
        $uploadedfile = $_FILES['uploadfile'];
        $upload_overrides = array( 'test_form' => false );
        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
        update_user_meta($user_id, "photo_profile", $movefile['url'] );
    
        if ( $movefile && ! isset( $movefile['error'] ) ) {
            echo '<a href="'.$movefile['url'].'">view</a>';
        } else {
            echo $movefile['error'];
        }
        // die;
    }
      // echo '<script>alert("oke");</script>';
      header("location:/profile/");

  }
?>


<?php } else { ?>
    Klik<a href="/login">Login </a>terlebih dahulu
<?php } ?>
