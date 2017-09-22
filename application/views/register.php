<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo validation_errors(); ?>

<H1> Register</H1>
<form method="post" action="<?php echo base_url();?>index.php/User_valid/validUser">
	<input type="text" name="firstname">
	<input type="password" name="password">
	<input type="submit">
</form>
</body>
</html>
