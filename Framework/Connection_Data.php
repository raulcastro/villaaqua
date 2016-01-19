<?php
	
	if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1')
	{
		define ('DB_HOST', 'localhost');
	}
	else
	{
		define ('DB_HOST', 'villaaquadb.db.10062387.hostedresource.com');
	}
	
	define ('DB_USER', 'villaaquadb');
	define ('DB_PASS', 'barbiE787!');
	define ('DB_NAME', 'villaaquadb');