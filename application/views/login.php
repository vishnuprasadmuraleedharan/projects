<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<H1>Login</H1>


<form method="post" action="<?php echo base_url();?>index.php/Userlog/loginuser">
	<input type="text" name="firstname">

	<input type="password" name="password">

	<input type="text" name="email">
	<input type="submit">

	<a href="http://localhost/project1/index.php/userlog/logoutUser">Logout</a>
	<!-- <a href="<?php echo base_url('Userlog/logoutUser'); ?>">Logout</a> -->
</form>
</body>
</html>
