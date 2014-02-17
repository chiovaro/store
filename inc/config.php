<?php

	// these two constants are used to create root-relative web addresses
    // and absolute server paths throughout all the code
    
	define("BASE_URL","/teamtreehouse/php/shirt_store/");
	define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/teamtreehouse/php/shirt_store/");

	define("DB_HOST","localhost");
	define("DB_NAME","");
	define("DB_PORT",""); // default: 3306
	define("DB_USER","");
	define("DB_PASS","");