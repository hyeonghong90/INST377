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
function validateForm() {
    var x = document.forms["foodForm"]["food"].value;
    if (x == "Select") {
    	alert("No fodd is selected...");
        return false;
    }
}
</script>

</head>
<body>

<strong>SOLUTION 3: Provide data inputs that do not allow free forms of text.</strong> <br>
<div>
	<form name="foodForm" action='food.php' method='POST' onsubmit="return validateForm()">
		<select name="food">
			<option value="Select" default>-Select-</option>
			<option value="Double Burger">Double Burger</option>
			<option value="Cheese Taco">Cheese Taco</option>
			<option value="French Fries">French Fries</option>
			<option value="Tuna Salad">Tuna Salad</option>
		</select>
		<input type="submit"><br>
	</form>
</div>







</body>
</html>