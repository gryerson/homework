<?php

	for($i=1;$i<=10;$i++)
	{
		print "Here are the " . $i . " times tables:<br /><br />";
		for($j=1;$j<=10;$j++)
		{
			print $i . " times " . $j . " equals " . $i * $j . ".<br />";
		}
		print "<br />";
	}

?>