<?php

	$string = $_POST["string"];
	
	function palindrom($string)
	{
		$string = str_replace(" ", "", $string);
		
		if ($string == strrev($string))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	if (palindrom($string) == true)
	{
		echo "Da, '" . $string . "' je palindrom";
	}
	else
	{
		echo "Ne, '" . $string . "' ni palindrom";
	}

?>
