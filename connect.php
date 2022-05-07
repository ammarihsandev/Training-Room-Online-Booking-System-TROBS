<?php
error_reporting(E_ALL ^ E_DEPRECATED | E_NOTICE | E_WARNING);
error_reporting( error_reporting() & ~E_NOTICE );

$link = mysql_connect( 'localhost', 'puanmary_cubic', 'adminCUBIC1' );
if ( !$link ) {
  die( 'Could not connect: ' . mysql_error() );
}

$db = mysql_select_db( 'puanmary_cubic', $link );
if ( !$db ) {
  die ( 'Error selecting database \'puanmary_cubic\' : ' . mysql_error() );
}

?>