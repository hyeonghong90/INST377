<!DOCTYPE html>
<html>
<head>	
<style>
	div {
		margin-top: 20px;
		margin-bottom: 20px;
	}

	table td{
		border: 1px solid black;
	}
	th {
		background: yellow;
		border: 1px solid black;
	}
</style>

<script>
// function validateForm() {
//     var x = document.forms["food"]["food"].value;
//     if (x == "Select") {
//     	alert("nothing is selected");
//         return false;
//     } 
// }
</script>

</head>
<body>

<div>
	<form name="languages" action='language_insert.php' method='POST'>
		<select name="lang">
			<option value="Spanish" selected="selected">Spanish</option>
			<option value="Portuguese">Portuguese</option>
			<option value="Korean">Korean</option>
			<option value="Russian">Russian</option>
		</select>
		<input type="submit"><br>
	</form>
</div>


</body>
</html>