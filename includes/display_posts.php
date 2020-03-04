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
                                echo "<h2>".$row['user']."</h2>";
                               echo "<p class='authdate'>by michael <span class='slash'>//</span> November 12, 2006 <span class='slash'>//</span> 6:55 pm</p>";
                                echo "<p>To the left you will see an image styled with the 'float_left' class. It applies the correct margins as well. If you haven't already guessed it, there is a 'float_right' class as well. Next, we can show off what a link looks like: That was fun. Why don't you check out this. You can use the 'strong' or 'b' tag; they are both styled exactly the same. This <i>italicized text</i> looks swell, don't you think?</p>";
                                echo '<a href="#">read more</a>';
                                echo '<p class="blogbottom">category: <span class="tags"> <a href="#">Templates</a>, <a href="#">Design</a></span> <span class="slash">//</span> <a href="#">report</a></p>';
				}
?>
			</div>
