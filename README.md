# regular-expression-for-xss-scripting

$pattern = '/[\'\/™€¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾Ņ¿Àā~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
					$msisdn = str_replace(' ','',$msisdn);
					if(preg_match($pattern, $msisdn)){
						$msisdn = '';
					}
