<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Oracle',
		'driver'=>'oracle',
		'connect'=>'oci_pconnect',
		'persistent' => false,
		'encoding' => 'utf8',
		'host' => 'localhost',
		'login'=>'movilidad',
		'password'=>'III0\/1l1D4D',
		'database' => '(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = noedesa.duoc.cl)(PORT = 1521)))(CONNECT_DATA=(SID=dbdesa)))',
		'prefix' => '',
		'schema'=>'MOVILIDAD',
		'owner'=>'MOVILIDAD'
	);
}
?>