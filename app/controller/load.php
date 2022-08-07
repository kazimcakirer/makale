<?php 

function dizin($path)
{
	global $db;
	foreach (glob($path) as $value) {
		if(glob($value.'*.pdf')){
			foreach (glob($value.'*.pdf') as $valuePDF) {
				echo $valuePDF.'<br>';				
				$veri = array_filter(explode('/', $valuePDF));
				print_r($veri);
			}
		}
		if(glob($value.'*/')){

			foreach (glob($value.'*/') as $subvalue ) {
				if(glob($subvalue.'*/')){
					dizin($subvalue.'*/');
				} 
			}
		}
	}
}

dizin(PATH.'/article/*/');