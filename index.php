<?php
	include_once("browserhax_cfg.php");
	include_once("3dsbrowserhax_common.php");
	$ROPHEAP=0x09320000;
	generate_ropchain();
	echo $ROPCHAIN;
?>
