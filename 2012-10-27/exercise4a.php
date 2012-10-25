<?php

	$number = $_POST['number'];
	
	print "Here are the " . $number . " times tables:<br /><br />";
	for($i=1;$i<=10;$i++)
	{
		print $i . " times " . $number . " equals " . $i * $number . ".<br />";
	}

?>