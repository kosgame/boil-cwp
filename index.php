<?php
    require_once ('config/common.php');
	require_once ('controller/main.class.php');
	//require_once (FUNKCJE.'funckjeproste.php');
	$numerki = Numerki::getInstance()->startApp(time());

?>