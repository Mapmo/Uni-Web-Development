<h1>Raven's Garden</h1>
                        <address>
                                And the Raven's, never flitting, still is sitting, still is sitting <br>
                                On the pallid bust of Pallas just above my chamber door;<br>
                                And his eyes have all the seeming of a demon's that is dreaming,<br>
                                And the lamp-light o'er him streaming throws his shadow on the floor;<br>
                                And my soul from out that shadow that lies floating on the floor<br>
                                Shall be lifted-nevermore!
                        </address>
                                        
			<div class="blogitem">
				
				<?php
				$query="SELECT * FROM posts";
				$select_posts=mysqli_query($db_connection, $query);

				while($row=mysqli_fetch_assoc($select_posts))
				{
                                echo "<h2>".$row['title']."</h2>";
                               	echo "<p class='authdate'>By ".$row['user']."<span class='slash'>//</span>email: ".$row['email']."<span class='slash'>//</span>".$row['date']."pm</p>";
                                echo "<p>".$row['summary']."</p>";
                                echo '<a href="../full_post.php?post_id='.$row['post_id'].'">read more</a>';
                                echo '<p class="blogbottom">Category: <span class="tags"> <a href="display_category.php">'.$row['category'].'</a> <span class="slash">//</span> <a href="#">report</a></p>';
				}
?>
			</div>
