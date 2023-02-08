<?php 
/* constantes DB */
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'sistemarh');

// App root (carpeta raiz)
// la siguiente constante APPROT señala el directorio raiz, para esto usar 2 veces dirname
define('APPROOT', dirname(dirname(__FILE__)));

// URL root 
// define('URLROOT', 'http://' . $_SERVER['SERVER_ADDR'] . '/CR_PerTI-dv3/www/');
define('URLROOT', 'http://localhost/System_PDO');

//define('URLROOT', 'http://localhost:8080/nblog');

/* Site name */
define('SITENAME', 'System_PDO');


 ?>