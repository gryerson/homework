<?php

	$price = 15;

	if ($price <= 10)
	{
		print "The price of the item you are purchasing is $" . $price . ".<br />";
		print "You are entitled to a 10% discount.<br />";
		print "Your total amount due is $" . $price * .90 . ".<br />";
	}
	elseif ($price > 10)
	{
		print "The price of the item you are purchasing is $" . $price . ".<br />";
		print " You are entitled to a 20% discount.<br />";
		print "Your total amount due is $" . $price * .80 . ".<br />";
	}

?>