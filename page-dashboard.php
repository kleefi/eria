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
    <form method="post" >
    Company name
    <input type="text" name="company_name" id="" value="<?php echo get_user_meta(wp_get_current_user()->ID,'company_name',true);?>">
    <br>
  <select name="gender" id="">
    <option id="database" value="<?php echo get_user_meta(wp_get_current_user()->ID,'gender',true);?>"><?php echo get_user_meta(wp_get_current_user()->ID,'gender',true);?></option>
    <option value="Mr">Mr</option>
    <option value="Mrs">Mrs</option>
    <option value="Miss">Miss</option>
  </select>
  <br>
  Nama
  <input type="text" name="first_name" id="" value="<?php echo get_user_meta(wp_get_current_user()->ID,'first_name',true);?>">
  <input type="text" name="last_name" id="" value="<?php echo get_user_meta(wp_get_current_user()->ID,'last_name',true);?>">
<br>
Email
<!-- <input type="text" name="" id="" value="<!?php echo wp_get_current_user()->user_email; ?>" > -->
<input type="text" name="email" id="" value="<?php echo get_user_meta(wp_get_current_user()->ID,'email',true);?>">
<br>




<hr>
<select name="s_gender" id="">
    <option id="database" value="<?php echo get_user_meta(wp_get_current_user()->ID,'s_gender',true);?>"><?php echo get_user_meta(wp_get_current_user()->ID,'s_gender',true);?></option>
    <option value="Mr">Mr</option>
    <option value="Mrs">Mrs</option>
    <option value="Miss">Miss</option>
  </select>
  <br>
  Nama
  <input type="text" name="s_first_name" id="" value="<?php echo get_user_meta(wp_get_current_user()->ID,'s_first_name',true);?>">
  <input type="text" name="s_last_name" id="" value="<?php echo get_user_meta(wp_get_current_user()->ID,'s_last_name',true);?>">
<br>
Email
<input type="text" name="s_email" id="" value="<?php echo get_user_meta(wp_get_current_user()->ID,'s_email',true);?>">
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
      update_user_meta( $user_id, 'first_name', $_POST['first_name'] );
      update_user_meta( $user_id, 'last_name', $_POST['last_name'] );
      update_user_meta( $user_id, 'gender', $_POST['gender'] );
      update_user_meta( $user_id, 'email', $_POST['email'] );
      update_user_meta( $user_id, 'website', $_POST['website'] );

      update_user_meta( $user_id, 's_first_name', $_POST['s_first_name'] );
      update_user_meta( $user_id, 's_last_name', $_POST['s_last_name'] );
      update_user_meta( $user_id, 's_gender', $_POST['s_gender'] );
      update_user_meta( $user_id, 's_email', $_POST['s_email'] );
      update_user_meta( $user_id, 's_website', $_POST['s_website'] );

      // echo '<script>alert("oke");</script>';
      header("location:/dashboard/");

  }
?>


<?php } else { ?>
    Klik<a href="/login">Login </a>terlebih dahulu
<?php } ?>
