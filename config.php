<?php

define('DB_NOME','banco');
define('DB_USUARIO','root');
define('DB_PASSOWORD','');
define('DB_HOST','localhost');




if (!defined('ABSPATH')) {
    define('ABSPATH', dirname (__FILE__) . '/');
}

if(!defined('DBAPI')){
    define('DBAPI',    ABSPATH . '/inc/conexao.php');
}
if(!defined("BASEURL")){
    define("BASEURL",ABSPATH.'conexao.php');
}
define('HEADER_TEMPLATE', ABSPATH . '/inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . '/inc/footer.php');

date_default_timezone_set("America/Sao_Paulo");