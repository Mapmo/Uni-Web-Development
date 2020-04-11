<?php include("includes/header.php");
	include("includes/bars.php");

	echo '<div class="blogitem">';
	
	if(isset($_GET['post_id']))
	{		
	        $query="SELECT * FROM posts WHERE post_id=".$_GET['post_id'];
	        $select_posts=mysqli_query($db_connection, $query);
		if($select_posts === false)
		{
			die("bad request");
		}	
	        while($row=mysqli_fetch_assoc($select_posts))
		{
                	echo "<h2>".$row['title']."</h2>";
                        echo "<p class='authdate'><img src='img/user_icon.png' height='12' width='12'> ".$row['user']." (".$row['email'].")<span class='slash'> ||  <img src='img/date_icon.png' height='15' width='15'></span>  ".$row['date']."</p>";
                        echo "<p>".$row['content']."</p>";
                        echo '<p class="blogbottom">Category: <span class="tags"> <a href="search.php?cat='.$row['category'].'">'.$row['category'].'</a> <span class="slash">//</span> <a href="#">report</a></p>';
		}
	}
	else
	{
		die("no id set to preview a full post");
	}
	echo '</div>';
	
	include("includes/footer.php")
?>	
