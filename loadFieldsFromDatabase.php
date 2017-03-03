<?php 
include 'databasePHPFunctions.php';

$result = db_select("SELECT * FROM volunteer");
echo json_encode($result[0]);

?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	#textbox, #textbox2 {
		display: block;
		margin-bottom: 10px;
	}	
</style>

<title>Test</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$("button").click(function() {
			$.ajax({
				url: 'loadsFieldsFromDatabase.php',
				data: '',
				dataType: 'json',
				success: function(data) {
					$("#textbox").attr("value", data.volunteer_fname);
					$("#textbox2").attr("value", data.volunteer_lname);
				}
			});
		});
	});
</script>
</head>
<body>

First Name:<input id="textbox" type="text">
Last Name:<input id="textbox2" type="text">
<button type="button">Load Volunteer</button>

</body>
</html>