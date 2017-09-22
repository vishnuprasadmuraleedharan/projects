<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<H1>Update</H1>
<?php
if(!empty($message)){
 echo $message;
}
?>
<form method="post" action="<?php echo base_url();?>index.php/userin/update">
	<input type="text" name="firstname">
	<input type="password" name="password">
	<input type="submit">
</form>
</body>
</html>
