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

1. fx_selec
		
		create array with parametars

		$arr_base = array(
			'table' => 'test_base',
			'select' => array(
				'id',
				'text'
			),
			'where' => ' text = "petar" or id = 1 ',
			'order' => 'ASC'
		);



File user
-----------------
*ini_db.php => this file call all core function for execute database function.
  *.dbconector.php => is not core function this is my database connect class and you don't need to use this way for connecting on database.
  *dataBaseFunction.core => is core function for database and you don't need to change anything into this.
  *db_handler.php => is class witch extends dataBaseFunction
  *db_helper.php => this file is helper for core.
