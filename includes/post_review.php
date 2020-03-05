<?php
	include("db_connection.php");
	$db_connection = OpenCon();
	$fdate = date('Y/m/d');

        $post_query="INSERT INTO posts (user, email, category, content, date, title, summary) VALUES ('".$_POST['fname']."','".$_POST['femail']."','".$_POST['fcat']."','".$_POST['fcontent']."','".$fdate."','".$_POST['ftitle']."','".$_POST['fsummary']."')";

        $post_review=mysqli_query($db_connection, $post_query) || die(mysqli_error($db_connection));
	

	CloseCon($db_connection);

	header("Location: ../index.php");
?>
