<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title> <?php the_title(); ?></title>
<?php
/**
 * Template Name: Daftar Produk
 */
?>

<?php
if ( is_user_logged_in() ) { 
  echo '<ul>
  <li><a href="/dashboard">Contact</a></li>
  <li><a href="/perusahaan">Company</a></li>
  <li>Products</li>
  <li><a href="/tambah-produk">Add Product</a></li>
  <li><a href="/daftar-produk">Product List</a></li>
  <li><a href="'.wp_logout_url().'">Logout</a></li>
</ul>
<div class="container">          
<table class="table">
  <thead>
    <tr>
      <th>Title</th>
      <th>Company</th>
      <th>Submitted Date</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>';
$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'produk',
    'post_status' => 'publish, pending',
    'posts_per_page' => 5,
    'paged' => $paged,
    'author' => get_current_user_id()
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>



    <tr>
        <td><?php the_title(); ?></td>
        <td><?php echo get_user_meta( wp_get_current_user()->ID, 'company_name', true );?></td>
        <td><?php echo get_the_date();?></td>
        <td><?php echo get_post_status();?></td>
        <td><a href="/edit-produk/?id=<?php echo get_the_ID();?>">Edit</a></td>
      </tr>



        <?php
    endwhile;
    echo '</tbody>
    </table>
    </div>';
    wp_pagenavi(
        array(
            'query' => $arr_posts,
        )
    );
endif;?>

<?php } else { ?>
    Klik<a href="/login">Login </a>terlebih dahulu
<?php } ?>
