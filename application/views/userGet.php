<html>
<head>
	<title></title>

</head>

<body>
<h2>SELeCT</h2>
<table>
<?php foreach ($result as $value){?>
<tr>
	<td><?php echo $value->firstname ;?></td>
	<td><?php echo $value->password ;?></td>
</tr>
<?php } ?>
</table>
</body>
</html>