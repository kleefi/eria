<?php
function wpbt_coba_profile()
{
?>

<?php if ( is_user_logged_in() ) { ?>

<header class="sui-header">
    <h1 class="sui-header-title">
        <?php echo get_the_title(); ?>
    </h1>
</header>

                                
                                <article class="sui-row">

                                    <div class="sui-col-md-3">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="sui-box">
                                                <div class="sui-box-header">
                                                    <h2 class="sui-box-title">Update Foto Profile</h2>
                                                </div>
                                                <div class="sui-box-body">
<?php
	$get_avatar = get_user_meta(wp_get_current_user()->ID,'avatar',true);
	if(!strpos($get_avatar,'http')){
		// echo get_avatar( $user_id, 96, $default, $alt );
        echo '<img class="gambar-utama" style="max-width:180px;" src="https://dewanstudio.biz/SIT/eria/wp-content/uploads/2022/09/default.png" alt="avatar">';
	}else{
		echo '<img class="gambar-utama" style="max-width:180px;" src="'.get_user_meta(wp_get_current_user()->ID,'avatar',true).'" alt="ss">';
	}
?>
<!-- <!?php echo get_avatar( $user_id, 96, $default, $alt ); ?> -->
<!-- <img class="gambar-utama" style="width:200px;" src="<!?php echo get_user_meta(wp_get_current_user()->ID,'avatar',true);?>" alt=""> -->
<input type='hidden' id="file" class="form-control" name="avatar" value="<?php echo get_user_meta(wp_get_current_user()->ID,'avatar',true);?>" />
<input type='file' id="file" class="form-control" name="uploadfile" />
<input type="submit" name="sub" value="Update Image" class="sui-button sui-button-lg">

                                                    </div>
                                                </div>
                                            </form>
<?php

    global $current_user;
    $user_id = get_current_user_id();
    $user_last = get_user_meta($user_id);


    if(isset($_POST['sub']))
    {
        $fname=$_FILES['uploadfile']['name'];
        $ftype=$_FILES['uploadfile']['type']; 
    }
    if(isset($_FILES['uploadfile']['name'])){
        if ( ! function_exists( 'wp_handle_upload' ) ) {
            // require_once( ABSPATH . 'wp-admin/includes/image.php' );
            require_once( ABSPATH . '/wp-admin/includes/image.php' );
            require_once( ABSPATH . 'wp-admin/includes/image.php' );
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
            require_once( ABSPATH . 'wp-admin/includes/media.php' );
            // Set the mime_type
            // $this->mime_type = $_FILES[self::$input_field]['name'];
            // Save and run the magic on avatars
            // $this->save_avatar( $_FILES[self::$input_field]['tmp_name'], 200 );
        }

        $uploadedfile = $_FILES['uploadfile'];

        $upload_overrides = array( 'test_form' => false );

        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );

        update_user_meta($user_id, "avatar", $movefile['url'] );

        if ( $movefile && ! isset( $movefile['error'] ) ) {
            //echo '<a target="_blank" href="'.$movefile['url'].'">view</a>';
            echo "<script>
				alert('Data saved');
				window.location.href='/SIT/eria/dashboard-members/profile/';
			</script>";
        } else {
            echo $movefile['error'];
        }
        // die;
    }

?>
                                        </div>

                                        <div class="sui-col-md-9">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="sui-box">
                                                    <div class="sui-box-header">
                                                        <h2 class="sui-box-title">Update Profile</h2>
                                                    </div>
                                                    <div class="sui-box-body">
                                                        <div class="sui-row">
                                                            <div class="sui-col-md-6">
                                                                <div class="sui-form-field">
                                                                    <label class="sui-label" for="company_name">Company Name</label>
                                                                    <input class="sui-form-control" id="company_name" name="company_name" value="<?php echo get_user_meta(wp_get_current_user()->ID,'company_name',true);?>">
                                                                    <!-- <span class="sui-description">Type your full name.</span> -->
                                                                </div>
                                                                <div class="sui-form-field">
                                                                    <label class="sui-label" for="website">Company Website</label>
                                                                    <input class="sui-form-control" id="website" name="website" value="<?php echo get_user_meta(wp_get_current_user()->ID,'website',true);?>">
                                                                </div>
                                                            </div>
                                                            <div class="sui-col-md-6">
                                                                <!-- <p>Email : <?php echo wp_get_current_user()->user_email; ?></p> -->
                                                                <!-- <input type="email" value="<?php echo esc_attr( wp_get_current_user()->user_email ); ?>"> -->
                                                                <div class="sui-form-field">
                                                                    <label class="sui-label" for="email">Email</label>
                                                                    <!-- <input type="email" name="email" id="email" aria-describedby="email-description" value="<?php echo get_user_meta(wp_get_current_user()->ID,'email',true);?>" class="sui-form-control"> -->
                                                                    <input type="email" name="email" id="email" aria-describedby="email-description" value="<?php echo esc_attr( wp_get_current_user()->user_email ); ?>" class="sui-form-control">
                                                                </div>
                                                                <div class="sui-form-field">
                                                                    <?php 
                                                                        //get dropdown saved value
                                                                        $current_selections = get_user_meta( wp_get_current_user()->ID, 'company_country', true ); 
                                                                    ?>
                                                                    <label class="sui-label" for="company_country">Country</label>
                                                                    <select class="sui-select" data-theme="search" name="company_country" id="company_country">
                                                                        <option value="" disabled selected>Please select choose country</option>
                                                                        <option value="Afghanistan, Islamic Emirate of" <?php if($current_selections == 'Afghanistan, Islamic Emirate of') echo 'selected'; ?> >Afghanistan, Islamic Emirate of</option>
                                                                        <option value="Albania" <?php if($current_selections == 'Albania') echo 'selected'; ?> >Albania</option>
                                                                        <option value="Algeria" <?php if($current_selections == 'Algeria') echo 'selected'; ?> >Algeria</option>
                                                                        <option value="American Samoa" <?php if($current_selections == 'American Samoa') echo 'selected'; ?> >American Samoa</option>
                                                                        <option value="Andorra" <?php if($current_selections == 'Andorra') echo 'selected'; ?> >AndorrA</option>
                                                                        <option value="Angola" <?php if($current_selections == 'Angola') echo 'selected'; ?> >Angola</option>
                                                                        <option value="Anguilla" <?php if($current_selections == 'Anguilla') echo 'selected'; ?> >Anguilla</option>
                                                                        <option value="Antarctica" <?php if($current_selections == 'Antarctica') echo 'selected'; ?> >Antarctica</option>
                                                                        <option value="Antigua and Barbuda" <?php if($current_selections == 'Antigua and Barbuda') echo 'selected'; ?> >Antigua and Barbuda</option>
                                                                        <option value="Argentina" <?php if($current_selections == 'Argentina') echo 'selected'; ?> >Argentina</option>
                                                                        <option value="Armenia" <?php if($current_selections == 'Armenia') echo 'selected'; ?> >Armenia</option>
                                                                        <option value="Aruba" <?php if($current_selections == 'Aruba') echo 'selected'; ?> >Aruba</option>
                                                                        <option value="Australia" <?php if($current_selections == 'Australia') echo 'selected'; ?> >Australia</option>
                                                                        <option value="Austria" <?php if($current_selections == 'Austria') echo 'selected'; ?> >Austria</option>
                                                                        <option value="Azerbaijan" <?php if($current_selections == 'Azerbaijan') echo 'selected'; ?> >Azerbaijan</option>
                                                                        <option value="Bahamas" <?php if($current_selections == 'Bahamas') echo 'selected'; ?> >Bahamas</option>
                                                                        <option value="Bahrain" <?php if($current_selections == 'Bahrain') echo 'selected'; ?> >Bahrain</option>
                                                                        <option value="Bangladesh" <?php if($current_selections == 'Bangladesh') echo 'selected'; ?> >Bangladesh</option>
                                                                        <option value="Barbados" <?php if($current_selections == 'Barbados') echo 'selected'; ?> >Barbados</option>
                                                                        <option value="Belarus" <?php if($current_selections == 'Belarus') echo 'selected'; ?> >Belarus</option>
                                                                        <option value="Belgium" <?php if($current_selections == 'Belgium') echo 'selected'; ?> >Belgium</option>
                                                                        <option value="Belize" <?php if($current_selections == 'Belize') echo 'selected'; ?> >Belize</option>
                                                                        <option value="Benin" <?php if($current_selections == 'Benin') echo 'selected'; ?> >Benin</option>
                                                                        <option value="Bermuda" <?php if($current_selections == 'Bermuda') echo 'selected'; ?> >Bermuda</option>
                                                                        <option value="Bhutan" <?php if($current_selections == 'Bhutan') echo 'selected'; ?> >Bhutan</option>
                                                                        <option value="Bolivia" <?php if($current_selections == 'Bolivia') echo 'selected'; ?> >Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina" <?php if($current_selections == 'Bosnia and Herzegovina') echo 'selected'; ?> >Bosnia and Herzegovina</option>
                                                                        <option value="Botswana" <?php if($current_selections == 'Botswana') echo 'selected'; ?> >Botswana</option>
                                                                        <option value="Bouvet Island" <?php if($current_selections == 'Bouvet Island') echo 'selected'; ?> >Bouvet Island</option>
                                                                        <option value="Brazil" <?php if($current_selections == 'Brazil') echo 'selected'; ?> >Brazil</option>
                                                                        <option value="British Indian Ocean Territory" <?php if($current_selections == 'British Indian Ocean Territory') echo 'selected'; ?> >British Indian Ocean Territory</option>
                                                                        <option value="Brunei Darussalam" <?php if($current_selections == 'Brunei Darussalam') echo 'selected'; ?> >Brunei Darussalam</option>
                                                                        <option value="Bulgaria" <?php if($current_selections == 'Bulgaria') echo 'selected'; ?> >Bulgaria</option>
                                                                        <option value="Burkina Faso" <?php if($current_selections == 'Burkina Faso') echo 'selected'; ?> >Burkina Faso</option>
                                                                        <option value="Burundi" <?php if($current_selections == 'Burundi') echo 'selected'; ?> >Burundi</option>
                                                                        <option value="Cambodia" <?php if($current_selections == 'Cambodia') echo 'selected'; ?> >Cambodia</option>
                                                                        <option value="Cameroon" <?php if($current_selections == 'Cameroon') echo 'selected'; ?> >Cameroon</option>
                                                                        <option value="Canada" <?php if($current_selections == 'Canada') echo 'selected'; ?> >Canada</option>
                                                                        <option value="Cape Verde" <?php if($current_selections == 'Cape Verde') echo 'selected'; ?> >Cape Verde</option>
                                                                        <option value="Cayman Islands" <?php if($current_selections == 'Cayman Islands') echo 'selected'; ?> >Cayman Islands</option>
                                                                        <option value="Central African Republic" <?php if($current_selections == 'Central African Republic') echo 'selected'; ?> >Central African Republic</option>
                                                                        <option value="Chad" <?php if($current_selections == 'Chad') echo 'selected'; ?> >Chad</option>
                                                                        <option value="Chile" <?php if($current_selections == 'Chile') echo 'selected'; ?> >Chile</option>
                                                                        <option value="People's Republic of Tiongkok" <?php if($current_selections == "People's Republic of Tiongkok") echo 'selected'; ?> >People's Republic of Tiongkok</option>
                                                                        <option value="Christmas Island" <?php if($current_selections == 'Christmas Island') echo 'selected'; ?> >Christmas Island</option>
                                                                        <option value="Cocos (Keeling) Islands" <?php if($current_selections == 'Cocos (Keeling) Islands') echo 'selected'; ?> >Cocos (Keeling) Islands</option>
                                                                        <option value="Colombia" <?php if($current_selections == 'Colombia') echo 'selected'; ?> >Colombia</option>
                                                                        <option value="Comoros" <?php if($current_selections == 'Comoros') echo 'selected'; ?> >Comoros</option>
                                                                        <option value="Congo" <?php if($current_selections == 'Congo') echo 'selected'; ?> >Congo</option>
                                                                        <option value="Democratic Republic of the Congo" <?php if($current_selections == 'Democratic Republic of the Congo') echo 'selected'; ?> >Democratic Republic of the Congo</option>
                                                                        <option value="Cook Islands" <?php if($current_selections == 'Cook Islands') echo 'selected'; ?> >Cook Islands</option>
                                                                        <option value="Costa Rica" <?php if($current_selections == 'Costa Rica') echo 'selected'; ?> >Costa Rica</option>
                                                                        <option value="Côte d'Ivoire" <?php if($current_selections == "Côte d'Ivoire") echo 'selected'; ?> >Côte d'Ivoire</option>
                                                                        <option value="Croatia" <?php if($current_selections == 'Croatia') echo 'selected'; ?> >Croatia</option>
                                                                        <option value="Cuba" <?php if($current_selections == 'Cuba') echo 'selected'; ?> >Cuba</option>
                                                                        <option value="Cyprus" <?php if($current_selections == 'Cyprus') echo 'selected'; ?> >Cyprus</option>
                                                                        <option value="Czech Republic" <?php if($current_selections == 'Czech Republic') echo 'selected'; ?> >Czech Republic</option>
                                                                        <option value="Denmark" <?php if($current_selections == 'Denmark') echo 'selected'; ?> >Denmark</option>
                                                                        <option value="Djibouti" <?php if($current_selections == 'Djibouti') echo 'selected'; ?> >Djibouti</option>
                                                                        <option value="Dominica" <?php if($current_selections == 'Dominica') echo 'selected'; ?> >Dominica</option>
                                                                        <option value="Dominican Republic" <?php if($current_selections == 'Dominican Republic') echo 'selected'; ?> >Dominican Republic</option>
                                                                        <option value="Ecuador" <?php if($current_selections == 'Ecuador') echo 'selected'; ?> >Ecuador</option>
                                                                        <option value="Egypt" <?php if($current_selections == 'Egypt') echo 'selected'; ?> >Egypt</option>
                                                                        <option value="El Salvador" <?php if($current_selections == 'El Salvador') echo 'selected'; ?> >El Salvador</option>
                                                                        <option value="Equatorial Guinea" <?php if($current_selections == 'Equatorial Guinea') echo 'selected'; ?> >Equatorial Guinea</option>
                                                                        <option value="Eritrea" <?php if($current_selections == 'Eritrea') echo 'selected'; ?> >Eritrea</option>
                                                                        <option value="Estonia" <?php if($current_selections == 'Estonia') echo 'selected'; ?> >Estonia</option>
                                                                        <option value="Ethiopia" <?php if($current_selections == 'Ethiopia') echo 'selected'; ?> >Ethiopia</option>
                                                                        <option value="Falkland Islands (Islas Malvinas)" <?php if($current_selections == 'Falkland Islands (Islas Malvinas)') echo 'selected'; ?> >Falkland Islands (Islas Malvinas)</option>
                                                                        <option value="Faroe Islands" <?php if($current_selections == 'Faroe Islands') echo 'selected'; ?> >Faroe Islands</option>
                                                                        <option value="Fiji" <?php if($current_selections == 'Fiji') echo 'selected'; ?> >Fiji</option>
                                                                        <option value="Finland" <?php if($current_selections == 'Finland') echo 'selected'; ?> >Finland</option>
                                                                        <option value="France" <?php if($current_selections == 'France') echo 'selected'; ?> >France</option>
                                                                        <option value="French Guiana" <?php if($current_selections == 'French Guiana') echo 'selected'; ?> >French Guiana</option>
                                                                        <option value="French Polynesia" <?php if($current_selections == 'French Polynesia') echo 'selected'; ?> >French Polynesia</option>
                                                                        <option value="French Southern and Antarctic Lands" <?php if($current_selections == 'French Southern and Antarctic Lands') echo 'selected'; ?> >French Southern and Antarctic Lands</option>
                                                                        <option value="Gabon" <?php if($current_selections == 'Gabon') echo 'selected'; ?> >Gabon</option>
                                                                        <option value="Gambia" <?php if($current_selections == 'Gambia') echo 'selected'; ?> >Gambia</option>
                                                                        <option value="Georgia" <?php if($current_selections == 'Georgia') echo 'selected'; ?> >Georgia</option>
                                                                        <option value="Germany" <?php if($current_selections == 'Germany') echo 'selected'; ?> >Germany</option>
                                                                        <option value="Ghana" <?php if($current_selections == 'Ghana') echo 'selected'; ?> >Ghana</option>
                                                                        <option value="Gibraltar" <?php if($current_selections == 'Gibraltar') echo 'selected'; ?> >Gibraltar</option>
                                                                        <option value="Greece" <?php if($current_selections == 'Greece') echo 'selected'; ?> >Greece</option>
                                                                        <option value="Greenland" <?php if($current_selections == 'Greenland') echo 'selected'; ?> >Greenland</option>
                                                                        <option value="Grenada" <?php if($current_selections == 'Grenada') echo 'selected'; ?> >Grenada</option>
                                                                        <option value="Guadeloupe" <?php if($current_selections == 'Guadeloupe') echo 'selected'; ?> >Guadeloupe</option>
                                                                        <option value="Guam" <?php if($current_selections == 'Guam') echo 'selected'; ?> >Guam</option>
                                                                        <option value="Guatemala" <?php if($current_selections == 'Guatemala') echo 'selected'; ?> >Guatemala</option>
                                                                        <option value="Guernsey" <?php if($current_selections == 'Guernsey') echo 'selected'; ?> >Guernsey</option>
                                                                        <option value="Guinea" <?php if($current_selections == 'Guinea') echo 'selected'; ?> >Guinea</option>
                                                                        <option value="Guinea-Bissau" <?php if($current_selections == 'Guinea-Bissau') echo 'selected'; ?> >Guinea-Bissau</option>
                                                                        <option value="Guyana" <?php if($current_selections == 'Guyana') echo 'selected'; ?> >Guyana</option>
                                                                        <option value="Haiti" <?php if($current_selections == 'Haiti') echo 'selected'; ?> >Haiti</option>
                                                                        <option value="Heard Island and McDonald Islands" <?php if($current_selections == 'Heard Island and McDonald Islands') echo 'selected'; ?> >Heard Island and McDonald Islands</option>
                                                                        <option value="Vatican City" <?php if($current_selections == 'Vatican City') echo 'selected'; ?> >Vatican City</option>
                                                                        <option value="Honduras" <?php if($current_selections == 'Honduras') echo 'selected'; ?> >Honduras</option>
                                                                        <option value="Hong Kong, Province of China" <?php if($current_selections == 'Hong Kong, Province of China') echo 'selected'; ?> >Hong Kong, Province of China</option>
                                                                        <option value="Hungary" <?php if($current_selections == 'Hungary') echo 'selected'; ?> >Hungary</option>
                                                                        <option value="Iceland" <?php if($current_selections == 'Iceland') echo 'selected'; ?> >Iceland</option>
                                                                        <option value="India" <?php if($current_selections == 'India') echo 'selected'; ?> >India</option>
                                                                        <option value="Indonesia" <?php if($current_selections == 'Indonesia') echo 'selected'; ?> >Indonesia</option>
                                                                        <option value="Islamic Republic of Iran" <?php if($current_selections == 'Islamic Republic of Iran') echo 'selected'; ?> >Islamic Republic of Iran</option>
                                                                        <option value="Iraq" <?php if($current_selections == 'Iraq') echo 'selected'; ?> >Iraq</option>
                                                                        <option value="Ireland" <?php if($current_selections == 'Ireland') echo 'selected'; ?> >Ireland</option>
                                                                        <option value="Isle of Man" <?php if($current_selections == 'Isle of Man') echo 'selected'; ?> >Isle of Man</option>
                                                                        <option value="Zionist Israel" <?php if($current_selections == 'Zionist Israel') echo 'selected'; ?> >Zionist Israel</option>
                                                                        <option value="Italy" <?php if($current_selections == 'Italy') echo 'selected'; ?> >Italy</option>
                                                                        <option value="Jamaica" <?php if($current_selections == 'Jamaica') echo 'selected'; ?> >Jamaica</option>
                                                                        <option value="Japan" <?php if($current_selections == 'Japan') echo 'selected'; ?> >Japan</option>
                                                                        <option value="Jersey" <?php if($current_selections == 'Jersey') echo 'selected'; ?> >Jersey</option>
                                                                        <option value="Jordan" <?php if($current_selections == 'Jordan') echo 'selected'; ?> >Jordan</option>
                                                                        <option value="Kazakhstan" <?php if($current_selections == 'Kazakhstan') echo 'selected'; ?> >Kazakhstan</option>
                                                                        <option value="Kenya" <?php if($current_selections == 'Kenya') echo 'selected'; ?> >Kenya</option>
                                                                        <option value="Kiribati" <?php if($current_selections == 'Kiribati') echo 'selected'; ?> >Kiribati</option>
                                                                        <option value="North Korea, Democratic People's Republic of Korea" <?php if($current_selections == "North Korea, Democratic People's Republic of Korea") echo 'selected'; ?> >North Korea, Democratic People's Republic of Korea</option>
                                                                        <option value="South Korea, Republic of Korea" <?php if($current_selections == 'South Korea, Republic of Korea') echo 'selected'; ?> >South Korea, Republic of Korea</option>
                                                                        <option value="Kuwait" <?php if($current_selections == 'Kuwait') echo 'selected'; ?> >Kuwait</option>
                                                                        <option value="Kyrgyzstan" <?php if($current_selections == 'Kyrgyzstan') echo 'selected'; ?> >Kyrgyzstan</option>
                                                                        <option value="Laos, Lao People'S Democratic Republic" <?php if($current_selections == "Laos, Lao People'S Democratic Republic") echo 'selected'; ?> >Laos, Lao People'S Democratic Republic</option>
                                                                        <option value="Åland Islands" <?php if($current_selections == 'Åland Islands') echo 'selected'; ?> >Åland Islands</option>
                                                                        <option value="Latvia" <?php if($current_selections == 'Latvia') echo 'selected'; ?> >Latvia</option>
                                                                        <option value="Lebanon" <?php if($current_selections == 'Lebanon') echo 'selected'; ?> >Lebanon</option>
                                                                        <option value="Lesotho" <?php if($current_selections == 'Lesotho') echo 'selected'; ?> >Lesotho</option>
                                                                        <option value="Liberia" <?php if($current_selections == 'Liberia') echo 'selected'; ?> >Liberia</option>
                                                                        <option value="Libya" <?php if($current_selections == 'Libya') echo 'selected'; ?> >Libya</option>
                                                                        <option value="Liechtenstein" <?php if($current_selections == 'Liechtenstein') echo 'selected'; ?> >Liechtenstein</option>
                                                                        <option value="Lithuania" <?php if($current_selections == 'Lithuania') echo 'selected'; ?> >Lithuania</option>
                                                                        <option value="Luxembourg" <?php if($current_selections == 'Luxembourg') echo 'selected'; ?> >Luxembourg</option>
                                                                        <option value="Macao" <?php if($current_selections == 'Macao') echo 'selected'; ?> >Macao</option>
                                                                        <option value="North Macedonia" <?php if($current_selections == 'North Macedonia') echo 'selected'; ?> >North Macedonia</option>
                                                                        <option value="Madagascar" <?php if($current_selections == 'Madagascar') echo 'selected'; ?> >Madagascar</option>
                                                                        <option value="Malawi" <?php if($current_selections == 'Malawi') echo 'selected'; ?> >Malawi</option>
                                                                        <option value="Malaysia" <?php if($current_selections == 'Malaysia') echo 'selected'; ?> >Malaysia</option>
                                                                        <option value="Maldives" <?php if($current_selections == 'Maldives') echo 'selected'; ?> >Maldives</option>
                                                                        <option value="Mali" <?php if($current_selections == 'Mali') echo 'selected'; ?> >Mali</option>
                                                                        <option value="Malta" <?php if($current_selections == 'Malta') echo 'selected'; ?> >Malta</option>
                                                                        <option value="Marshall Islands" <?php if($current_selections == 'Marshall Islands') echo 'selected'; ?> >Marshall Islands</option>
                                                                        <option value="Martinique" <?php if($current_selections == 'Martinique') echo 'selected'; ?> >Martinique</option>
                                                                        <option value="Mauritania" <?php if($current_selections == 'Mauritania') echo 'selected'; ?> >Mauritania</option>
                                                                        <option value="Mauritius" <?php if($current_selections == 'Mauritius') echo 'selected'; ?> >Mauritius</option>
                                                                        <option value="Mayotte" <?php if($current_selections == 'Mayotte') echo 'selected'; ?> >Mayotte</option>
                                                                        <option value="Mexico" <?php if($current_selections == 'Mexico') echo 'selected'; ?> >Mexico</option>
                                                                        <option value="Micronesia" <?php if($current_selections == 'Kyrgyzstan') echo 'selected'; ?> >Micronesia</option>
                                                                        <option value="Moldova" <?php if($current_selections == 'Moldova') echo 'selected'; ?> >Moldova</option>
                                                                        <option value="Monaco" <?php if($current_selections == 'Monaco') echo 'selected'; ?> >Monaco</option>
                                                                        <option value="Mongolia" <?php if($current_selections == 'Mongolia') echo 'selected'; ?> >Mongolia</option>
                                                                        <option value="Montenegro" <?php if($current_selections == 'Montenegro') echo 'selected'; ?> >Montenegro</option>
                                                                        <option value="Montserrat" <?php if($current_selections == 'Montserrat') echo 'selected'; ?> >Montserrat</option>
                                                                        <option value="Morocco" <?php if($current_selections == 'Morocco') echo 'selected'; ?> >Morocco</option>
                                                                        <option value="Mozambique" <?php if($current_selections == 'Mozambique') echo 'selected'; ?> >Mozambique</option>
                                                                        <option value="Myanmar" <?php if($current_selections == 'Myanmar') echo 'selected'; ?> >Myanmar</option>
                                                                        <option value="Namibia" <?php if($current_selections == 'Namibia') echo 'selected'; ?> >Namibia</option>
                                                                        <option value="Nauru" <?php if($current_selections == 'Nauru') echo 'selected'; ?> >Nauru</option>
                                                                        <option value="Nepal" <?php if($current_selections == 'Nepal') echo 'selected'; ?> >Nepal</option>
                                                                        <option value="Netherlands" <?php if($current_selections == 'Netherlands') echo 'selected'; ?> >Netherlands</option>
                                                                        <option value="Netherlands Antilles" <?php if($current_selections == 'Netherlands Antilles') echo 'selected'; ?> >Netherlands Antilles</option>
                                                                        <option value="New Caledonia" <?php if($current_selections == 'New Caledonia') echo 'selected'; ?> >New Caledonia</option>
                                                                        <option value="New Zealand" <?php if($current_selections == 'New Zealand') echo 'selected'; ?> >New Zealand</option>
                                                                        <option value="Nicaragua" <?php if($current_selections == 'Nicaragua') echo 'selected'; ?> >Nicaragua</option>
                                                                        <option value="Niger" <?php if($current_selections == 'Niger') echo 'selected'; ?> >Niger</option>
                                                                        <option value="Nigeria" <?php if($current_selections == 'Nigeria') echo 'selected'; ?> >Nigeria</option>
                                                                        <option value="Niue" <?php if($current_selections == 'Niue') echo 'selected'; ?> >Niue</option>
                                                                        <option value="Norfolk Island" <?php if($current_selections == 'Norfolk Island') echo 'selected'; ?> >Norfolk Island</option>
                                                                        <option value="Northern Mariana Islands" <?php if($current_selections == 'Northern Mariana Islands') echo 'selected'; ?> >Northern Mariana Islands</option>
                                                                        <option value="Norway" <?php if($current_selections == 'Norway') echo 'selected'; ?> >Norway</option>
                                                                        <option value="Oman" <?php if($current_selections == 'Oman') echo 'selected'; ?> >Oman</option>
                                                                        <option value="Pakistan" <?php if($current_selections == 'Pakistan') echo 'selected'; ?> >Pakistan</option>
                                                                        <option value="Palau" <?php if($current_selections == 'Palau') echo 'selected'; ?> >Palau</option>
                                                                        <option value="Palestine," <?php if($current_selections == 'Palestine') echo 'selected'; ?> >Palestine</option>
                                                                        <option value="Panama" <?php if($current_selections == 'Panama') echo 'selected'; ?> >Panama</option>
                                                                        <option value="Papua New Guinea" <?php if($current_selections == 'Papua New Guinea') echo 'selected'; ?> >Papua New Guinea</option>
                                                                        <option value="Paraguay" <?php if($current_selections == 'Paraguay') echo 'selected'; ?> >Paraguay</option>
                                                                        <option value="Peru" <?php if($current_selections == 'Peru') echo 'selected'; ?> >Peru</option>
                                                                        <option value="Philippines" <?php if($current_selections == 'Philippines') echo 'selected'; ?> >Philippines</option>
                                                                        <option value="Pitcairn Islands" <?php if($current_selections == 'Pitcairn Islands') echo 'selected'; ?> >Pitcairn Islands</option>
                                                                        <option value="Poland" <?php if($current_selections == 'Poland') echo 'selected'; ?> >Poland</option>
                                                                        <option value="Portugal" <?php if($current_selections == 'Portugal') echo 'selected'; ?> >Portugal</option>
                                                                        <option value="Puerto Rico" <?php if($current_selections == 'Puerto Rico') echo 'selected'; ?> >Puerto Rico</option>
                                                                        <option value="Qatar" <?php if($current_selections == 'Qatar') echo 'selected'; ?> >Qatar</option>
                                                                        <option value="Reunion" <?php if($current_selections == 'Reunion') echo 'selected'; ?> >Reunion</option>
                                                                        <option value="Romania" <?php if($current_selections == 'Romania') echo 'selected'; ?> >Romania</option>
                                                                        <option value="Russian Federation" <?php if($current_selections == 'Russian Federation') echo 'selected'; ?> >Russian Federation</option>
                                                                        <option value="Rwanda" <?php if($current_selections == 'Rwanda') echo 'selected'; ?> >Rwanda</option>
                                                                        <option value="Saint Helena" <?php if($current_selections == 'Saint Helena') echo 'selected'; ?> >Saint Helena</option>
                                                                        <option value="Saint Kitts and Nevis" <?php if($current_selections == 'Saint Kitts and Nevis') echo 'selected'; ?> >Saint Kitts and Nevis</option>
                                                                        <option value="Saint Lucia" <?php if($current_selections == 'Saint Lucia') echo 'selected'; ?> >Saint Lucia</option>
                                                                        <option value="Saint Pierre and Miquelon" <?php if($current_selections == 'Saint Pierre and Miquelon') echo 'selected'; ?> >Saint Pierre and Miquelon</option>
                                                                        <option value="Saint Vincent and the Grenadines" <?php if($current_selections == 'Saint Vincent and the Grenadines') echo 'selected'; ?> >Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa" <?php if($current_selections == 'Samoa') echo 'selected'; ?> >Samoa</option>
                                                                        <option value="San Marino" <?php if($current_selections == 'San Marino') echo 'selected'; ?> >San Marino</option>
                                                                        <option value="São Tomé and Príncipe" <?php if($current_selections == 'São Tomé and Príncipe') echo 'selected'; ?> >São Tomé and Príncipe</option>
                                                                        <option value="Saudi Arabia" <?php if($current_selections == 'Saudi Arabia') echo 'selected'; ?> >Saudi Arabia</option>
                                                                        <option value="Senegal" <?php if($current_selections == 'Senegal') echo 'selected'; ?> >Senegal</option>
                                                                        <option value="Serbia" <?php if($current_selections == 'Serbia') echo 'selected'; ?> >Serbia</option>
                                                                        <option value="Seychelles"> <?php if($current_selections == 'Seychelles') echo 'selected'; ?> Seychelles</option>
                                                                        <option value="Sierra Leone" <?php if($current_selections == 'Sierra Leone') echo 'selected'; ?> >Sierra Leone</option>
                                                                        <option value="Singapore" <?php if($current_selections == 'Singapore') echo 'selected'; ?> >Singapore</option>
                                                                        <option value="Slovakia" <?php if($current_selections == 'Slovakia') echo 'selected'; ?> >Slovakia</option>
                                                                        <option value="Slovenia" <?php if($current_selections == 'Slovenia') echo 'selected'; ?> >Slovenia</option>
                                                                        <option value="Solomon Islands" <?php if($current_selections == 'Solomon Islands') echo 'selected'; ?> >Solomon Islands</option>
                                                                        <option value="Somalia" <?php if($current_selections == 'Somalia') echo 'selected'; ?> >Somalia</option>
                                                                        <option value="South Africa" <?php if($current_selections == 'Kyrgyzstan') echo 'selected'; ?> >South Africa</option>
                                                                        <option value="South Georgia and the South Sandwich Islands" <?php if($current_selections == 'South Georgia and the South Sandwich Islands') echo 'selected'; ?> >South Georgia and the South Sandwich Islands</option>
                                                                        <option value="Spain" <?php if($current_selections == 'Spain') echo 'selected'; ?> >Spain</option>
                                                                        <option value="Sri Lanka" <?php if($current_selections == 'Sri Lanka') echo 'selected'; ?> >Sri Lanka</option>
                                                                        <option value="Sudan" <?php if($current_selections == 'Sudan') echo 'selected'; ?> >Sudan</option>
                                                                        <option value="Suriname" <?php if($current_selections == 'Suriname') echo 'selected'; ?> >Suriname</option>
                                                                        <option value="Svalbard and Jan Mayen" <?php if($current_selections == 'Svalbard and Jan Mayen') echo 'selected'; ?> >Svalbard and Jan Mayen</option>
                                                                        <option value="Eswatini" <?php if($current_selections == 'Eswatini') echo 'selected'; ?> >Eswatini</option>
                                                                        <option value="Sweden" <?php if($current_selections == 'Sweden') echo 'selected'; ?> Sweden</option>
                                                                        <option value="Switzerland" <?php if($current_selections == 'Switzerland') echo 'selected'; ?> >Switzerland</option>
                                                                        <option value="Syrian Arab Republic" <?php if($current_selections == 'Syrian Arab Republic') echo 'selected'; ?> >Syrian Arab Republic</option>
                                                                        <option value="Taiwan, Province of China" <?php if($current_selections == 'Taiwan, Province of China') echo 'selected'; ?> >Taiwan, Province of China</option>
                                                                        <option value="Tajikistan" <?php if($current_selections == 'Tajikistan') echo 'selected'; ?> >Tajikistan</option>
                                                                        <option value="United Republic of Tanzania" <?php if($current_selections == 'United Republic of Tanzania') echo 'selected'; ?> >United Republic of Tanzania</option>
                                                                        <option value="Thailand" <?php if($current_selections == 'Thailand') echo 'selected'; ?> >Thailand</option>
                                                                        <option value="Timor-Leste" <?php if($current_selections == 'Timor-Leste') echo 'selected'; ?> >Timor-Leste</option>
                                                                        <option value="Togo" <?php if($current_selections == 'Togo') echo 'selected'; ?> >Togo</option>
                                                                        <option value="Tokelau" <?php if($current_selections == 'Tokelau') echo 'selected'; ?> >Tokelau</option>
                                                                        <option value="Tonga" <?php if($current_selections == 'Tonga') echo 'selected'; ?> >Tonga</option>
                                                                        <option value="Trinidad and Tobago" <?php if($current_selections == 'Trinidad and Tobago') echo 'selected'; ?> >Trinidad and Tobago</option>
                                                                        <option value="Tunisia" <?php if($current_selections == 'Tunisia') echo 'selected'; ?> >Tunisia</option>
                                                                        <option value="Turkiye" <?php if($current_selections == 'Turkiye') echo 'selected'; ?> >Turkiye</option>
                                                                        <option value="Turkmenistan" <?php if($current_selections == 'Turkmenistan') echo 'selected'; ?> >Turkmenistan</option>
                                                                        <option value="Turks and Caicos Islands" <?php if($current_selections == 'Turks and Caicos Islands') echo 'selected'; ?> >Turks and Caicos Islands</option>
                                                                        <option value="Tuvalu" <?php if($current_selections == 'Tuvalu') echo 'selected'; ?> >Tuvalu</option>
                                                                        <option value="Uganda" <?php if($current_selections == 'Uganda') echo 'selected'; ?> >Uganda</option>
                                                                        <option value="Ukraine" <?php if($current_selections == 'Ukraine') echo 'selected'; ?> >Ukraine</option>
                                                                        <option value="United Arab Emirates" <?php if($current_selections == 'United Arab Emirates') echo 'selected'; ?> >United Arab Emirates</option>
                                                                        <option value="United Kingdom" <?php if($current_selections == 'United Kingdom') echo 'selected'; ?> >United Kingdom</option>
                                                                        <option value="United States" <?php if($current_selections == 'United States') echo 'selected'; ?> >United States</option>
                                                                        <option value="United States Minor Outlying Islands" <?php if($current_selections == 'United States Minor Outlying Islands') echo 'selected'; ?> >United States Minor Outlying Islands</option>
                                                                        <option value="Uruguay" <?php if($current_selections == 'Uruguay') echo 'selected'; ?> >Uruguay</option>
                                                                        <option value="Uzbekistan" <?php if($current_selections == 'Uzbekistan') echo 'selected'; ?> >Uzbekistan</option>
                                                                        <option value="Vanuatu" <?php if($current_selections == 'Vanuatu') echo 'selected'; ?> >Vanuatu</option>
                                                                        <option value="Venezuela" <?php if($current_selections == 'Venezuela') echo 'selected'; ?> >Venezuela</option>
                                                                        <option value="Viet Nam" <?php if($current_selections == 'Viet Nam') echo 'selected'; ?> >Viet Nam</option>
                                                                        <option value="British Virgin Islands" <?php if($current_selections == 'British Virgin Islands') echo 'selected'; ?> >British Virgin Islands</option>
                                                                        <option value="U.S. Virgin Islands" <?php if($current_selections == 'U.S. Virgin Islands') echo 'selected'; ?> >U.S. Virgin Islands</option>
                                                                        <option value="Wallis and Futuna" <?php if($current_selections == 'Western Sahara') echo 'selected'; ?> >Wallis and Futuna</option>
                                                                        <option value="Western Sahara" <?php if($current_selections == 'Western Sahara') echo 'selected'; ?> >Western Sahara</option>
                                                                        <option value="Yemen" <?php if($current_selections == 'Yemen') echo 'selected'; ?> >Yemen</option>
                                                                        <option value="Zambia" <?php if($current_selections == 'Zambia') echo 'selected'; ?> >Zambia</option>
                                                                        <option value="Zimbabwe" <?php if($current_selections == 'Zimbabwe') echo 'selected'; ?> >Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="sui-col-md-12">
                                                                <div class="sui-form-field sui-padding-top ">
                                                                    <label class="sui-label" for="company_profile">Company Profile</label>
                                                                    <textarea class="sui-form-control" name="company_profile" id="company_profile" cols="30" rows="5"><?php echo get_user_meta(wp_get_current_user()->ID,'company_profile',true);?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="sui-col-md-4">
                                                                <div class="sui-form-field sui-padding-top ">
                                                                    <label class="sui-label" for="login">Login Time</label>
                                                                    <input class="sui-form-control" id="login" value="" disabled >
                                                                </div>
                                                            </div>
                                                            <div class="sui-col-md-4">
                                                                <div class="sui-form-field sui-padding-top ">
                                                                    <label class="sui-label" for="logout">Logout Time</label>
                                                                    <input class="sui-form-control" id="logout" value="" disabled >
                                                                </div>
                                                            </div>
                                                            <div class="sui-col-md-4">
                                                                <div class="sui-form-field sui-padding-top ">
                                                                    <label class="sui-label" for="ipaddress">Ip Address</label>
                                                                    <input class="sui-form-control" id="ipaddress" value="" disabled >
                                                                </div>
                                                            </div>
                                                            <div class="sui-col-md-12 sui-padding-top ">
                                                                <div class="sui-form-field">
                                                                    <input type="submit" name="insert" value="Update" class="sui-button sui-button-lg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </article>
                                

                                <?php
                                    if(isset($_POST['insert'])){
                                        if ($_SERVER["REQUEST_METHOD"] == "POST")
                                        global $wpdb;
                                        $user_id = wp_get_current_user()->ID;

                                        update_user_meta( $user_id, 'company_name', $_POST['company_name'] );
                                        update_user_meta( $user_id, 'email', $_POST['email'] );
                                        // update_user_meta( $user_id, 'company_city', $_POST['company_city'] );
                                        update_user_meta( $user_id, 'company_country', $_POST['company_country'] );
                                        update_user_meta( $user_id, 'company_profile', $_POST['company_profile'] );
                                        update_user_meta( $user_id, 'website', $_POST['website'] );
                                        // update_user_meta( $user_id, "photo_profile", 'hilang' );


                                        if(isset($_FILES['uploadfile']['name'])){
                                            if ( ! function_exists( 'wp_handle_upload' ) ) {
                                                require_once( ABSPATH . 'wp-admin/includes/file.php' );
                                            }
                                            $uploadedfile = $_FILES['uploadfile'];
                                            $upload_overrides = array( 'test_form' => false );
                                            $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
                                            update_user_meta($user_id, "photo_profile", $movefile['url'] );
                                        
                                            if ( $movefile && ! isset( $movefile['error'] ) ) {
                                                //echo '<a href="'.$movefile['url'].'">view</a>';
                                            } else {
                                                echo $movefile['error'];
                                            }
                                            // die;
                                        }
                                        // echo '<script>alert("oke");</script>';
                                        //header("location:/dashboard-members/profile/");
										echo "<script>
												alert('Data saved');
												window.location.href='/SIT/eria/dashboard-members/profile/';
										</script>";

                                    }
                                ?>
                                

                                
                                
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
