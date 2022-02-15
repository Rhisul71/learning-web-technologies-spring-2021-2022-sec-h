<?php

	$Email = $_REQUEST['Email'];


	if($Email != ""){
		echo $Email;
	}
	else{
		echo "Null value...";
	}

?>