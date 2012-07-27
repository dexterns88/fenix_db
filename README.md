[dexterns88 Fenix_db](http://www.webpage-lab.com)
===================

Version: 1.0 Alpha

Fenix_db is a grup of function for apstraction mysql database. You can use this library to easier manipulate with database. 


Quick start
-----------

Clone the repo and use this file for install into jour project.

Supported command
-----------------

* fx_createTable -> Create new table
* fx_delete -> Delete table into db
* fx_drop -> Drop Database
* fx_insert -> Insert in database
* fx_select -> select from table
* fx_tableList -> list of all table into db
* fx_update -> update info into table



How to use
----------
- In file where use db Class include 'ini_db.php'
- Connect on data base 
- Create object like -> $baseApi = new Fenix_baseApi();

### fx_selec code seamdple
		
		
		$baseApi = new Fenix_baseApi(); // create object
		
	  //create array
		$arr_base = array(
			'table' => 'test_base',
			'select' => array(
				'id',
				'text'
			),
			'where' => ' text = "petar" or id = 1 ',
			'order' => 'ASC'
		);
		$value = $baseApi -> fx_select( $arr_base ); // call function witch return array


### fx_insert 

		$arr_base_create = array(
			'table' => 'test_base',
			'value' => array(
				'text' => 'dexter',
				'test' => 'more text into test',
				'test2' => 'test 2 more more more'
			)
		);
		$value2 = $baseApi -> fx_insert( $arr_base_create );
		
		
### fx_delete

	$arr_base_delete = array(
		'table' => 'test_base',
		'where' => ' id = 3 or text = "dexter" '
	);
	$val3 = $baseApi -> fx_delete($arr_base_delete);


### fx_createTable
	
	$arr_base_create_table = array(
		'table' => 'new_table',
		'tableType' => 'innodb', // defalut parametar if not entered innodb
		'value' => array(
			'id' => 'int NOT NULL AUTO_INCREMENT',  // if id not created by user script automaticly add this value
			'FirstName' => 'varchar(15)',
			'LastName' => 'varchar(15)',
			'Age' => 'int'
		),
		'primary' => 'id'  // if primary key not added by user script automaticly add id for primary key
	);
	$value3 = $baseApi -> fx_createTable($arr_base_create_table);
	
	
### fx_tableList

	$arr_base_list = array(
		'table' => 'new_table'
	);
	$list = $baseApi -> fx_tableList( $arr_base_list ); 	//return array
	
	
### fx_update
	
	$arr_base_update = array(
		'table' => 'new_table',
		'value' => array(
			'FirstName' => 'petar',
			'LastName' => 'johns'
		),
		'where' => "id = 1 or age = 22"
	);
	$update = $baseApi -> fx_update( $arr_base_update );
	

### fx_drop

	$arr_base_drop = array(
		'table' => 'new_table1'
	);
	$drop = $baseApi -> fx_drop( $arr_base_drop );



File user
-----------------
*ini_db.php => this file call all core function for execute database function.
  *.dbconector.php => is not core function this is my database connect class and you don't need to use this way for connecting on database.
  *dataBaseFunction.core => is core function for database and you don't need to change anything into this.
  *db_handler.php => is class witch extends dataBaseFunction
  *db_helper.php => this file is helper for core.
