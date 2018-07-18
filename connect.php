<?php
	include 'config.php';
	include 'html.php';
if(isset($_GET)) {
	@$con = mysqli_connect($dbhost,$dbuser,$dbpass);
	printf("h:%s u:%s p:%p",$dbhost,$dbuser,$dbpass);
	var_dump($con);
	if (!$con)
		die($htmlhead."<font color='#A00000'><h1>Error</h1></font>Could not connect to the database: ".mysqli_connect_error()."<br>Cannot proceed.<p><a href='http://genofond.org/viewtopic.php?f=3&t=3925'>Please, report on the error</a>.".$htmlfoot);

}
	$mysqli->set_charset($con,"utf8");
	/*
	mysql_query("SET session character_set_server = 'UTF8'");
	mysql_query("SET session character_set_connection = 'UTF8'");
	mysql_query("SET session character_set_client = 'UTF8'");
	mysql_query("SET session character_set_results = 'UTF8'");
	*/
	mysqli_select_db($con,$db);
?>