<?php
/* ------------------------------------
 * MO'S DEBUGGING FUNCTIONS
 * ==================================== */


/* --------------------------------
 * FUNCTION: 	dumpConsole()
 * USAGE:		Prints to console information about what's going on in the code.
 * PARAMETERS:
 *				$str_name: The name of the parameter that will be printed to screen
 *				$boo_clearsession: (T/F) A flag that says whether the session should be cleared.
 *				$boo_exit: (T/F) A flag that says whether the program should end.
 * AUTHOR:		Maurice Wright
 * -------------------------------- */
function dumpConsole($str_name, $str_value=null, $boo_clearsession = FALSE, $boo_exit = FALSE) {
	if ($str_value) {
		$openjs = "<script type='text/javascript'>if (typeof console != 'undefined') { " . chr(10) . "console.log('" . $str_name . "=','";
	} else {
		echo"<script type='text/javascript'>if (typeof console != 'undefined') { " . chr(10) . "console.log('" . $str_name . "');}</script>";
		return;
	}
	$closejs = chr(10) . "}</script>";
	if ( is_array($str_value) || is_object($str_value) ) {
		$str_value = addslashes(print_r($str_value,true));
	} else {
		$str_value = addslashes($str_value);
	}
	$str_value = str_replace(chr(10),'\n',$str_value);
	$str_value = str_replace(chr(13),'\n',$str_value);
	$str_value = str_replace("</script","<\/script",$str_value);
	$str_msg = $openjs . $str_value . "');" . chr(10);
	if (!empty($boo_clearsession)) {
		session_destroy();
		print_r ($_SESSION);
		$str_msg = $str_msg . "console.log('Session destroyed');" . chr(10);
	}
	echo $str_msg . $closejs;
	if (!empty($boo_exit)) {
		exit();
	}
}


//---------------------------------------
// FUNCTION: 	bug()
// USAGE:		Prints to screen information about what's going on in the code.
// PARAMETERS:
//				$str_name: The name of the parameter that will be printed to screen
//				$str_value: The value that we want to display.
//				$boo_clearsession: (T/F) A flag that says whether the session should be cleared.
//				$boo_exit: (T/F) A flag that says whether the program should end.
function bug($str_name, $str_value, $boo_clearsession = FALSE, $boo_exit = FALSE) {
	if ( is_array($str_value) || is_object($str_value) ) {
		$str_msg = $str_name . " =<pre>" . print_r($str_value,true) . "</pre>";
	} else {
		$str_msg = $str_name . " = " . $str_value."<br>";
	}
	if (!empty($boo_clearsession)) {
		session_destroy();
		print_r ($_SESSION);
		$str_msg = "<br>" . $str_msg . "Session destroyed";
	}
	echo ($str_msg);
	if (!empty($boo_exit)) {
		exit();
	}
}


//---------------------------------------
// FUNCTION:  bugcli()
// USAGE:   Prints to screen information about what's going on in the code. For use on the command line.
// PARAMETERS:
//        $str_name: The name of the parameter that will be printed to screen
//        $str_value: The value that we want to display.
//        $boo_clearsession: (T/F) A flag that says whether the session should be cleared.
//        $boo_exit: (T/F) A flag that says whether the program should end.
function bugcli($str_name, $str_value, $boo_clearsession = FALSE, $boo_exit = FALSE) {
  if ( is_array($str_value) || is_object($str_value) ) {
    $str_msg = $str_name . " =" . print_r($str_value,true) . "";
  } else {
    $str_msg = $str_name . " = " . $str_value.chr(10);
  }
  if (!empty($boo_clearsession)) {
    session_destroy();
    print_r ($_SESSION);
    $str_msg = chr(10) . $str_msg . "Session destroyed";
  }
  echo ($str_msg);
  if (!empty($boo_exit)) {
    exit();
  }
}


//---------------------------------------
// FUNCTION: 	curlPost($url)
// USAGE:		Retrieves data from an API
// PARAMETERS:	
//				$apiurl: The URL of the API being referenced
//
function curlPost($url, $arrPost) {
	$postStr = http_build_query($arrPost);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, count($arrPost));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postStr);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

/**
 * FUNCTION: 	dumpTraceToConsole()
 * USAGE:		Returns an array containing all preceding and included PHP pages into the browser console
 * PARAMETERS:
 *				None
 * AUTHOR:		Maurice Wright, 2012-02-01
 */
function dumpTraceToConsole() {
	dumpConsole('trace',superTrace());
}

/**
 * FUNCTION: 	dumpTrace()
 * USAGE:		Returns an array containing all preceding and included PHP pages to screen
 * PARAMETERS:
 *				None
 * AUTHOR:		Maurice Wright, 2012-02-01
 */
function dumpTrace() {
	dump(superTrace());
}

/**
 * FUNCTION:	debugCode() - 
 * USAGE:		This function is meant to allow code that is under developmenet only if a _debug parameter is passed.
 * 				if (debugCode('queryStringVal')) {
 * 					-- put code here --
 *				}
 * 				// Where 'queryStringVal' is the value of _debug submitted in the query string
 * PARAMETERS:
 *				debug: The string passed in the URL for the '_debug' value.
 * AUTHOR:		Maurice Wright
 */
function debugCode($debug) {
	$showCode = false;
	if (isset($_REQUEST['_debug'])) {
		$_debug = $_REQUEST['_debug'];
		if ( $_debug == $debug ) $showCode = true;
	}
	return $showCode;
}

/**
 * FUNCTION:	debugTraceToConsole() - 
 * USAGE:		This function is meant to allow code that is under developmenet only if a _debug parameter is passed.
 * 				if (debugCode('queryStringVal')) {
 * 					-- put code here --
 *				}
 * 				// Where 'queryStringVal' is the value of _debug submitted in the query string
 * PARAMETERS:
 *				debug: The string passed in the URL for the '_debug' value.
 * AUTHOR:		Maurice Wright, 2012.02.01
 */
function debugTraceToConsole($debug) {
	$showCode = false;
	if (isset($_REQUEST['_debug'])) {
		$_debug = $_REQUEST['_debug'];
		if ( $_debug == $debug ) dumpConsole('trace',superTrace());
	}
	return $showCode;
}

function superTrace() {
    
    // Extract values from dump_backtrace
    $backtrace = debug_backtrace();
    dumpConsole('backtrace',$backtrace);
    $fullTrace = array();
    foreach ( $backtrace as $page ) {
        $strTrace = $page['file'] . ' on Line ' . $page['line'];
        
        if ( $func = $page['function'] ) $strTrace .= " - FUNCTION: " .$page['function'];
        $traceBack[] = $strTrace;
        $strTrace = "";
    }
    
    // Get the included files
    $traceForward = get_included_files();
    
    // Build the final array
    return array('backTrace'=>$traceBack,'forwardTrace'=>$traceForward);
        
}


?>