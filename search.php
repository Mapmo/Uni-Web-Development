<?php include("includes/header.php");
	include("includes/bars.php");

	if(isset($_GET['string']))
	{		
	        $query="SELECT * FROM posts WHERE content LIKE '%".$_GET['string']."%'";
	}
	elseif(isset($_GET['cat']))
	{
		$query="SELECT * FROM posts WHERE category='".$_GET['cat']."'";
	}
	else
	{
		die("no string or category set to search for post in search.php");
	}

	$select_posts=mysqli_query($db_connection, $query);
	if($select_posts === false)
	{
		die("bad request");
	}

        include("includes/print_shortened_posts.php");

	include("includes/footer.php")
?>	
