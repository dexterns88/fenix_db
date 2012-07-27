<?php

// message helper 
function printMsg( $type="" , $input = "" , $desc="" ) {
	if( $desc != "" ) {
		$desc = " <span class='description'>{$desc}</span>";
	}
	print("<div class='message {$type}'> {$input} $desc </div>");
}

// function for explode string parametars is patern word and word for explode	
	function fenix_explode($patern , $word){
		$pieces = explode( $patern , $word );
		return $pieces;
	}
	
// function for set message into system session
	function fenix_set_message( $status , $message ) {
		$_SESSION['message'][$status] = $message;
	}

// function for read system message and unset this message
	function fenix_read_message() {
		$input = "";
		if( isset ( $_SESSION['message']['error'] ) ) {
			$input .= "<div class='message error'>" . $_SESSION['message']['error'] . "</div>";
		}
		if ( isset ( $_SESSION['message']['status'] ) ) {
			$input .= "<div class='message status'>" . $_SESSION['message']['status'] . "</div>";
		}
		if ( isset ( $_SESSION['message']['warning'] ) ) {
			$input .= "<div class='message warning'>" . $_SESSION['message']['warning'] . "</div>";
		}	
		unset($_SESSION['message']);
		print( $input );
	}

	function curPageName() {
		return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}
	
	
	function table_exists( $tablename, $database = false ) {
		if(!$database) {
				$res = mysql_query("SELECT DATABASE()");
        $database = mysql_result($res, 0);
    }
    $res = mysql_query("
        SELECT COUNT(*) AS count 
        FROM information_schema.tables 
        WHERE table_schema = '$database' 
        AND table_name = '$tablename'
    ");
    return mysql_result($res, 0) == 1;
	}

?>
