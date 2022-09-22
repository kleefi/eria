<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
</head>
<body>
    
<form name="loginform" id="loginform" action="https://eria.web/wp-login.php" method="post"><p class="login-username">
				<label for="user_login">Username or Email Address</label>
				<input type="text" name="log" id="user_login" autocomplete="username" class="input" value="" size="20">
			</p><p class="login-password">
				<label for="user_pass">Password</label>
				<input type="password" name="pwd" id="user_pass" autocomplete="current-password" class="input" value="" size="20">
			</p><p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p><p class="login-submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Log In">
				<input type="hidden" name="redirect_to" value="https://eria.web/dashboard/">
			</p></form>
</body>
</html>
