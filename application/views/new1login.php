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
			    	// alert(firstname);
			    	// var password = $("#pword").val();
			        $.ajax(
			        {
			        	type: "POST",
						url: "<?php echo base_url(); ?>" + "index.php/New1ajax/search",
						dataType: 'json',
						data: {firstname: firstname},

						success: function(output) {
							var output = $.parseJSON(output);
							$.each(output, function(i, item) {
							    alert(item);
							});
							// $.each(output, function() {
							//   $.each(this, function(k, v) {
							//     var thehtml = '<p> ' + v.firstname + '<p><br>';
							//          $('#list').html(thehtml);
							//   });
							// });
							// alert(output);
							// $("#spa").html(output);
						},
						error: function() { 
							alert("error");
							// $("#spa").html(output);
						}
			        });
			    });
			});	
		</script>



</head>
<body>
<H1>Search</H1>
<form>
	<input type="text" name="firstname" id="fname" placeholder="Search...">
	<input type="submit" id="submit">
	<p id="spa"></p>
</form>
                	<ul id="list"	>
                		<li></li>
                	</ul>
</body>
</html>
