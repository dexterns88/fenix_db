<?php
	/*
	 * Install db file
	 */

// initialisation db value ---------------------------------------------
	$tmpHelper = 'db_bin/db_helper.php';
	if( file_exists($tmpHelper) ){
		include_once($tmpHelper); }
	else {
		print("File <strong>'$tmpHelper'</strong> missing"); }
	
// initialisation db value ---------------------------------------------
	$tmpfile = 'db_bin/.dbconector.php';
	if ( file_exists($tmpfile) ){
		include_once($tmpfile); }
	else {
		printMsg("error" , "Missing file <strong>$tmpfile</strong>" ); }

// initialisation database function core -------------------------------
	$tmpcore = 'db_bin/fenixDataBase.core';
	if( file_exists($tmpcore) ){
		include_once($tmpcore); }
	else {
		printMsg("error" , "Missing file <strong>$tmpcore</strong>"); }
	
	
?>
