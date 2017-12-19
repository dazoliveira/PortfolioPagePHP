<?php

//nome do banco
define('DB_NAME', 'db_crud');

//usuario do banco de dados MySql
define('DB_USER', 'root');

//senha do banco de dados MySql
define('DB_PASSWORD','root');

//nome do host do MySql
define('DB_HOST', 'localhost');

//caminho absoluto para a pasta do sistema
if (!defined('ABSPATH')) 
    define('ABSPATH', dirname(__FILE__) . '/');

//Caminho no server para o sistema
if (!defined('BASEURL')) 
	define('BASEURL', '/WebTISolutionsV04/cadastro-clientes-php/');

//caminho do arquivo de banco de dados 
if (!defined('DBAPI')) 
	define('DBAPI', ABSPATH . 'inc/database.php');

//caminhos dos templates de header e footer
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');		
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');