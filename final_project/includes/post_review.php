<?php
	include("db_connection.php");
	$db_connection = OpenCon();
	
	$fdate = date('Y/m/d');
	//name = name.replace("'", "\\'")

	$fname = str_replace('"', '\\"', $_POST['fname']);
	$femail = str_replace('"', '\\"', $_POST['femail']);
        $ftitle = str_replace('"', '\\"', $_POST['ftitle']);
        $fsummary = str_replace('"', '\\"', $_POST['fsummary']);
        $fcontent = str_replace('"', '\\"', $_POST['fcontent']);


        $post_query="INSERT INTO posts (user, email, category, content, date, title, summary) VALUES (\"".$fname."\",\"".$femail."\",\"".$_POST['fcat']."\",\"".$fcontent."\",\"".$fdate."\",\"".$ftitle."\",\"".$fsummary."\")";

        $post_review=mysqli_query($db_connection, $post_query) || die(mysqli_error($db_connection));
	

	CloseCon($db_connection);

	header("Location: ../index.php");
?>
