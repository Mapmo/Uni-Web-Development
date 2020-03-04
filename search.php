<?php include("includes/header.php");
	include("includes/bars.php");

	if(isset($_GET['string']))
	{		
	        $query="SELECT * FROM posts WHERE content LIKE '%".$_GET['string']."%'";
	        $select_posts=mysqli_query($db_connection, $query);
		if($select_posts === false)
		{
			die("bad request");
		}

                include("includes/print_shortened_posts.php");
	}
	else
	{
		die("no string set to search for post");
	}
	
	include("includes/footer.php")
?>	
