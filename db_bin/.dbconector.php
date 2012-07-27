<?php 

class fenix_DbConect {
  
  function conect() { 
    define('DBHOST','localhost'); 
    define('DBNAME','fenix'); 
    define('DBUSER','root'); 
    define('DBPASS',''); 

    $db = mysql_connect(DBHOST,DBUSER,DBPASS) OR die ('ne moze da se konektujes na bazu!'); 
    $DBNAME = DBNAME; 
    $sql = "CREATE DATABASE IF NOT EXISTS $DBNAME; "; 
    mysql_query($sql); 
    mysql_select_db(DBNAME,$db)OR die ('ne moze da se izvrsi konekcija na tabelu'); 
		
		return DBNAME; 
  }
  
  function dbclose(){
    mysql_close(); 
  }
}

?>
