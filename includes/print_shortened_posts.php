<?php
if(mysqli_num_rows($select_posts) > 0)
{
	while($row=mysqli_fetch_assoc($select_posts))
       	{
       		echo '<div class="blogitem">';        
                echo "<h2>".$row['title']."</h2>";
		echo "<p class='authdate'><img src='img/user_icon.png' height='12' width='12'> ".$row['user']." (".$row['email'].")<span class='slash'> ||  <img src='img/date_icon.png' height='15' width='15'></span>  ".$row['date']."</p>";
		echo "<p>".$row['summary']."</p>";
                echo '<a href="../full_post.php?post_id='.$row['post_id'].'"><b>read more</b></a>';
                echo '<p class="blogbottom">Category: <span class="tags"> <a href="search.php?cat='.$row['category'].'">'.$row['category'].'</a> <span class="slash">//</span> <a href="#">report</a></p>';
                echo "</div>";
	}
}
else
{
	echo "<p>No results found</p>";
}
?>
