<?php
 
// define valores padrão para diretivas do php.ini
ini_set( 'error_reporting', -1 );

// deve ser definida para zero (0) em ambiente de produção
ini_set( 'display_errors', 0 ); 

// timezone
date_default_timezone_set( 'America/Sao_Paulo' );
 
// tempo máximo de execução de um script
set_time_limit( 60 );

?>
