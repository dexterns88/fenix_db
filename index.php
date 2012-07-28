<?php
	include_once('krumo/class.krumo.php'); // krumo developer mode
	include_once('ini_db.php');
	
	//~ header('Location: demo.html');
	
	// call db function
	$db = new fenix_DbConect();
	$db -> conect();


// select data base return value ==================================================
	$arr_base = array(
		'table' => 'test_base',
		'select' => array(
			'id',
			'text'
		),
		'where' => 'text = "djuro" '
		//'order' => ''
	);
	
	$baseApi = new Fenix_baseApi();
	//~ $value = $baseApi -> fx_select( $arr_base );
	//~ krumo($value);
	
	
// insert data into table ===================================================================================================
	
	
	$arr_base_insert = array(
		'table' => 'new_table4',
		'value' => array(
			'FirstName' => 'dexter',
			'LastName' => 'more test',
			'Age' => '2'
		)
	); 
	//~ $value2 = $baseApi -> fx_insert( $arr_base_insert );
	//~ krumo($value2);


// delete data from database =========================================================================================
	
	$arr_base_delete = array(
		'table' => 'test_base',
//		'where' => ' "id" = 3 or "text" = "dex" '
		'where' => ' id = 8 '
	);
	//~ $val3 = $baseApi -> fx_delete($arr_base_delete);
	//~ krumo($val3);
	
	
	
	
// create table ======================================================================================================	
	$arr_base_create_table = array(
		'table' => 'new_table4',
		'tableType' => 'innodb', // defalut parametar if not entered
		'value' => array(
			//'id' => 'int NOT NULL AUTO_INCREMENT',
			'FirstName' => 'varchar(15)',
			'LastName' => 'varchar(15)',
			'Age' => 'int'
		),
		//~ 'primary' => 'id'
	);
	//~ $value3 = $baseApi -> fx_createTable($arr_base_create_table);
	//~ krumo($value3);



// list of table ================================================================================================
	$arr_base_list = array(
		'table' => 'new_table'
	);
	//~ $list = $baseApi -> fx_tableList( $arr_base_list );
	//~ krumo($list);


// update value into table ================================================================================================
	$arr_base_update = array(
		'table' => 'new_table',
		'value' => array(
			'FirstName' => 'sasa',
			'LastName' => 'des'
		),
		'where' => "id = 1 or age = 22"
	);
	 
	//~ $update = $baseApi -> fx_update( $arr_base_update );
	//~ krumo($update);
	
	
// drop table ===============================================================================================================
	$arr_base_drop = array(
		'table' => 'new_table1'
	);
	//~ $drop = $baseApi -> fx_drop( $arr_base_drop );
	//~ krumo($drop);
?>
