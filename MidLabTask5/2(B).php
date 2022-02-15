<?php

	if(isset($_REQUEST['submit'])){
		$Email = $_REQUEST['Email'];
	}
?>


<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post" action="B.php" style="width:30%">
		<fieldset>
			<legend>Email</legend>
		<br> <input type="text" name="Email" value="<?php if(isset($Email)){ echo "Email: ".$Email; }?>"/>
		<hr>
		<br><input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>