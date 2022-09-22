<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<form method="post" action="">
company <input type="text" name="company_name" id=""><br>
    username <input type="text" name="user_login" id=""><br>
    email <input type="text" name="user_email" id=""><br>
    password <input type="password" name="user_pass" id=""><br>
    confirm password <input type="password" name="passwords" id=""><br>
    <input type="submit" name="insert" value="Signup">
</form>

<?php

// if clicked on submit buton
if(isset($_POST['insert'])){

    global $wpdb;

    // get all form fields value store in php values
    $company_name = $_POST['company_name'];
    $user_login = $_POST['user_login'];
    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_pass'];

// insert the value into table
 $sql = $wpdb->insert( 
    'wp_users', 
    array( 
        'user_login' => $user_login, 
        'user_email' => $user_email, 
        'user_pass' => MD5($user_pass), 
        'user_registered' => $user_pass, 
    ) 
);



// success message
if($sql == true){
    echo '<script> window.location.replace("/dashboard/");    </script>';
    
}else{
    echo '<script> alert("Not Inserted") </script>';
}




}
?>
</body>
</html>
