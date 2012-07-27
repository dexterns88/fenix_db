<?php

class dbHandler {
	//call with
	//dbHandler::check();
		
		
	protected function setVar( $argument ){
			$this -> arr_base = $argument;
	}
	
	
	protected function dbField(){
		if( !isset ( $this -> arr_base['table'] ) or empty ( $this -> arr_base['table'] ) ) {
			printMsg('error' , 'Database name required for function' );
			exit();
		}
	}
	
	
	

}//end of class
?>
