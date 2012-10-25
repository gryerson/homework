<?php

	$price = $_POST['price'];

	if ($price <= 10)
	{
		print "The price of the item you are purchasing is $" . number_format($price, 2) . ".<br />";
		print "You are entitled to a 10% discount.<br />";
		print "Your total amount due is $" . number_format($price * .90, 2) . ".<br />";
	}
	elseif ($price > 10)
	{
		print "The price of the item you are purchasing is $" . number_format($price, 2) . ".<br />";
		print " You are entitled to a 20% discount.<br />";
		print "Your total amount due is $" . number_format($price * .80, 2) . ".<br />";
	}

?>