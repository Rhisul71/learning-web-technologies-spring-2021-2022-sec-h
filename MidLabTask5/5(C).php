<?php 

	if(isset($_REQUEST['submit'])){
		$degree = $_REQUEST['degree'];
	}

?>


<html>
<head>
	<title>Degree Form</title>
</head>
<body>
	<form method="post" >
		Degree :
		<input type="checkbox" name="Degree" value="<?php if(isset($degree)){ echo $degree; }?>">SSC
		<input type="checkbox" name="Degree" value="<?php if(isset($degree)){ echo $degree; }?>">HSC
		<input type="checkbox" name="Degree" value="<?php if(isset($degree)){ echo $degree; }?>">BSc
		<input type="checkbox" name="Degree" value="<?php if(isset($degree)){ echo $degree; }?>">MSc
		 <br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>