<?php

/*
  Under the MIT license by Nils Garland :P
  
  https://github.com/nilsgarland
	
*/

function poofUrl () {
	$url = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
	return $url;
}
function poofMsg ($msg, $type) {
	if ($type === "s") {
		return "?s=".$msg;
	} 
	if ($type === "e") {
		return "?e=".$msg;
	} 
}
function poofFlash ($url) {
	if(strpos($url, 's=') !== false) {
	  $rawmsg = explode('=', $url);
	  $msg = strtolower(end($rawmsg));
	  echo "<div class='success_poof'>Success: ".$msg."</div>";
	}
	else if(strpos($url, 'e=') !== false) {
	  $rawmsg = explode('=', $url);
	  $msg = strtolower(end($rawmsg));
	  echo "<div class='error_poof'>Error: ".$msg."</div>";
	}
	else {
	  echo "<div class='poof_error_poof'>Poof Error: Message type not defined</div>";
	}
}