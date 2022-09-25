<?php
function wpbt_coba_contact()
{
?>


<?php if ( is_user_logged_in() ) { ?>

<header class="sui-header">
    <h1 class="sui-header-title">
        <?php echo get_the_title(); ?> Details
    </h1>
</header>
            
<article class="sui-box">
    <div class="sui-box-body">
        <!-- FORM KONTEN CONTACT -->
        <form method="post" >

            <div class="sui-row">
                <div class="sui-col-md-12">
                    <h2>First Contact Person</h2>
                </div>

                <div class="sui-col-md-3">
                    <div class="sui-form-field">
                        <?php 
                            //get dropdown saved value
                            $current_selections_first_title = get_user_meta( wp_get_current_user()->ID, 'first_contact_title', true ); 
                        ?>
                        <label class="sui-label" for="first_contact_title">Title</label>
                        <select id="first_contact_title" name="first_contact_title" class="">
                            <!-- <option id="database" value="<?php echo get_user_meta(wp_get_current_user()->ID,'gender',true);?>"><?php echo get_user_meta(wp_get_current_user()->ID,'gender',true);?></option> -->
                            <option value="" disabled selected>Please choose title</option>
                            <option value="Mr" <?php if($current_selections_first_title == 'Mr') echo 'selected'; ?> >Mr</option>
                            <option value="Mrs" <?php if($current_selections_first_title == 'Mrs') echo 'selected'; ?> >Mrs</option>
                            <option value="Ms" <?php if($current_selections_first_title == 'Ms') echo 'selected'; ?> >Ms</option>
                        </select>
                    </div>
                </div>

                <div class="sui-col-md-9">
                    <div class="sui-form-field">
                        <label for="first_contact_name" class="sui-label">Name</label>
                        <input
                            placeholder="Name"
                            id="first_contact_name"
                            class="sui-form-control"
                            name="first_contact_name"
                            value="<?php echo get_user_meta(wp_get_current_user()->ID,'first_contact_name',true);?>"
                            aria-labelledby="label-unique-id"
                            aria-describedby="error-unique-id description-unique-id"
                        />
                        <span id="error-unique-id" class="sui-error-message" style="display: none;" role="alert"></span>
                        <span id="description-unique-id" class="sui-description">Please appoint a contact person from the company who will handle this application and directly communicate with us. The name of this person will not be disclosed.</span>
                    </div>
                </div>

                <div class="sui-col-md-12">
                    <div class="sui-form-field">
                        <label for="first_contact_email" class="sui-label">Email</label>
                        <input
                            placeholder="Email"
                            id="first_contact_email"
                            class="sui-form-control"
                            name="first_contact_email"
                            value="<?php echo get_user_meta(wp_get_current_user()->ID,'first_contact_email',true);?>"
                            aria-labelledby="label-unique-id"
                            aria-describedby="error-unique-id description-unique-id"
                        />
                        <span id="error-unique-id" class="sui-error-message" style="display: none;" role="alert"></span>
                        <span id="description-unique-id" class="sui-description">Please provide an email address of the appointed contact person. This email will not be disclosed.</span>
                    </div>
                </div>
            </div>

            <div class="sui-row">
                <div class="sui-col-md-12">
                    <h2>Second Contact Person</h2>
                </div>
                <div class="sui-col-md-3">
                    <div class="sui-form-field">

                        <label class="sui-label" for="second_contact_title">Title</label>
                        <?php 
                            //get dropdown saved value
                            $current_selections_second_title = get_user_meta( wp_get_current_user()->ID, 'second_contact_title', true ); 
                        ?>
                        <select id="second_contact_title" name="second_contact_title" class="" data-placeholder="Gender">
                            <!-- <option id="database" value="<?php echo get_user_meta(wp_get_current_user()->ID,'s_gender',true);?>"><?php echo get_user_meta(wp_get_current_user()->ID,'s_gender',true);?></option> -->
                            <option value="" disabled selected>Please choose title</option>
                            <option value="Mr" <?php if($current_selections_second_title == 'Mr') echo 'selected'; ?> >Mr</option>
                            <option value="Mrs" <?php if($current_selections_second_title == 'Mrs') echo 'selected'; ?> >Mrs</option>
                            <option value="Ms" <?php if($current_selections_second_title == 'Ms') echo 'selected'; ?> >Ms</option>
                        </select>
                    </div>
                </div>

                <div class="sui-col-md-9">
                    <div class="sui-form-field">
                        <label for="second_contact_name" class="sui-label">Name</label>
                        <input
                            placeholder="Name"
                            id="second_contact_name"
                            class="sui-form-control"
                            name="second_contact_name"
                            value="<?php echo get_user_meta(wp_get_current_user()->ID,'second_contact_name',true);?>"
                            aria-labelledby="label-unique-id"
                            aria-describedby="error-unique-id description-unique-id"
                        />
                        <span id="error-unique-id" class="sui-error-message" style="display: none;" role="alert"></span>
                        <span id="description-unique-id" class="sui-description">Please appoint a contact person from your company, if any, whose name will be shown on the website.</span>
                    </div>
                </div>

                <div class="sui-col-md-12">
                    <div class="sui-form-field">
                        <label for="second_contact_email" class="sui-label">Email</label>
                        <input
                            placeholder="Email"
                            id="second_contact_email"
                            class="sui-form-control"
                            name="second_contact_email"
                            value="<?php echo get_user_meta(wp_get_current_user()->ID,'second_contact_email',true);?>"
                            aria-labelledby="label-unique-id"
                            aria-describedby="error-unique-id description-unique-id"
                        />
                        <span id="error-unique-id" class="sui-error-message" style="display: none;" role="alert"></span>
                        <span id="description-unique-id" class="sui-description">Please provide an email address of the appointed contact person or the corporate media contact. Please be aware that this email will be shown on the website.</span>
                    </div>
                </div>
            </div>

            <input type="submit" name="insert" value="Save" class="sui-button sui-button-lg">

        </form>
        <?php
            if(isset($_POST['insert'])){
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                    global $wpdb;
                    $user_id = wp_get_current_user()->ID;

                    // update_user_meta( $user_id, 'company_name', $_POST['company_name'] );
                    // update_user_meta( $user_id, 'first_name', $_POST['first_name'] );
                    // update_user_meta( $user_id, 'last_name', $_POST['last_name'] );
                    // update_user_meta( $user_id, 'gender', $_POST['gender'] );
                    // update_user_meta( $user_id, 'email', $_POST['email'] );
                    // update_user_meta( $user_id, 'website', $_POST['website'] );

                    update_user_meta( $user_id, 'first_contact_title', $_POST['first_contact_title'] );
                    update_user_meta( $user_id, 'first_contact_name', $_POST['first_contact_name'] );
                    update_user_meta( $user_id, 'first_contact_email', $_POST['first_contact_email'] );

                    // update_user_meta( $user_id, 's_first_name', $_POST['s_first_name'] );
                    // update_user_meta( $user_id, 's_last_name', $_POST['s_last_name'] );
                    // update_user_meta( $user_id, 's_gender', $_POST['s_gender'] );
                    // update_user_meta( $user_id, 's_email', $_POST['s_email'] );
                    // update_user_meta( $user_id, 's_website', $_POST['s_website'] );

                    update_user_meta( $user_id, 'second_contact_title', $_POST['second_contact_title'] );
                    update_user_meta( $user_id, 'second_contact_name', $_POST['second_contact_name'] );
                    update_user_meta( $user_id, 'second_contact_email', $_POST['second_contact_email'] );
                    //header("location:/dashboard-members/contact/");
                    echo "<script>
					alert('Data saved');
					window.location.href='/SIT/eria/dashboard-members/contact/';
					</script>";

            }
        ?>
        <!-- END FORM KONTEN CONTACT -->
    </div>
</article>

<article class="sui-box">
    <div class="sui-box-body">
        <div class="">

            Halaman dashboard<br><a href="<?php echo wp_logout_url(); ?>">Logout</a>

            <?php 
                global $wpdb;
                $rows = $wpdb->get_results( "SELECT * FROM {$wpdb->posts} WHERE post_type='post'" );
                
            ?>
            <?php } else { ?>
                Klik<a href="<?php echo network_site_url( '/login-member' ) ?>">Login </a>terlebih dahulu
            <?php } ?>
        </div>
    </div>
</article>

<?php
}
?>
