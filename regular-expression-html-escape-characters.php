<?php
	$pattern = '/[\'\/™€¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾Ņ¿Àā~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
	$msisdn = str_replace(' ','',$input_string);
	if(preg_match($pattern, $msisdn)){
		//html escape character exists
	}else{
		//html escape character does not exists
	}
?>
