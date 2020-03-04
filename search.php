<?php include("includes/header.php");
	include("includes/bars.php");

	echo '<div class="blogitem">';
	
	if(isset($_GET['string']))
	{		
	        $query="SELECT * FROM posts WHERE content LIKE '%".$_GET['string']."%'";
	        $select_posts=mysqli_query($db_connection, $query);
		if($select_posts === false)
		{
			die("bad request");
		}	
	        while($row=mysqli_fetch_assoc($select_posts))
		{
			echo "<h2>".$row['title']."</h2>";
                        echo "<p class='authdate'>By ".$row['user']."<span class='slash'>//</span>email: ".$row['email']."<span class='slash'>//</span>".$row['date']."pm</p>";
                        echo "<p>".$row['summary']."</p>";
                        echo '<a href="../full_post.php?post_id='.$row['post_id'].'">read more</a>';
                        echo '<p class="blogbottom">Category: <span class="tags"> <a href="display_category.php">'.$row['category'].'</a> <span class="slash">//</span> <a href="#">report</a></p>';
		}
	}
	else
	{
		die("no string set to search for post");
	}
	echo '</div>';
	
	include("includes/footer.php")
?>	
