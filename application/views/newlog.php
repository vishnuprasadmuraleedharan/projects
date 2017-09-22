<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<!-- ajax function -->

<script type="text/javascript">
			$(document).ready(function(){
			    $("#submit").click(function(work){
			    	work.preventDefault();
			    	var firstname = $("#fname").val();
			    	var password = $("#pword").val();
			        $.ajax(
			        {
			        	type: "POST",
						url: "<?php echo base_url(); ?>" + "index.php/newlogin/secondlog",
						dataType: 'html',
						data: {firstname: firstname, password: password },
						success: function(output) {
							$("#spa").html(output);
						},
						error: function() { 
							$("#spa").html(output);
						}
			        });
			    });
			});	
		</script>



</head>
<body>
<H1>Update</H1>
<form>
	<input type="text" name="firstname" id="fname">
	<input type="password" name="password" id="pword">
	<input type="submit" id="submit">
	<p id="spa"></p>
</form>
</body>
</html>
