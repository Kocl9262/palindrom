<?php

	$string = $_POST["string"];

    function utf8_strrev($str)
    {
        preg_match_all('/./us', $str, $ar);
        return join('', array_reverse($ar[0]));
    }
	
	function palindrom($string)
	{
		$string = str_replace(" ", "", $string);
		
		if ($string == utf8_strrev($string))
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
