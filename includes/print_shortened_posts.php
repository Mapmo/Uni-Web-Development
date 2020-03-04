<?php
if(mysqli_num_rows($select_posts) > 0)
{
	while($row=mysqli_fetch_assoc($select_posts))
       	{
       		echo '<div class="blogitem">';        
                echo "<h2>".$row['title']."</h2>";
                echo "<p class='authdate'>By ".$row['user']."<span class='slash'>//</span>email: ".$row['email']."<span class='slash'>//</span>".$row['date']."pm</p>";
                echo "<p>".$row['summary']."</p>";
                echo '<a href="../full_post.php?post_id='.$row['post_id'].'">read more</a>';
                echo '<p class="blogbottom">Category: <span class="tags"> <a href="display_category.php">'.$row['category'].'</a> <span class="slash">//</span> <a href="#">report</a></p>';
                echo "</div>";
	}
}
else
{
	echo "<p>No results found</p>";
}
?>
