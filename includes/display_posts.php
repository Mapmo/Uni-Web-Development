<h1>Raven's Garden</h1>
                        <address>
                                And the Raven's, never flitting, still is sitting, still is sitting <br>
                                On the pallid bust of Pallas just above my chamber door;<br>
                                And his eyes have all the seeming of a demon's that is dreaming,<br>
                                And the lamp-light o'er him streaming throws his shadow on the floor;<br>
                                And my soul from out that shadow that lies floating on the floor<br>
                                Shall be lifted-nevermore!
                        </address>
                                        
				
<?php
				if(isset($_GET['date']))
				{
					if($_GET['date'] === "all")
					{
						$query="SELECT * FROM posts ORDER BY post_id DESC";
					}
					elseif($_GET['date'] === "week")
					{
						$query="SELECT * FROM posts WHERE date > DATE_SUB(NOW(), INTERVAL 1 WEEK) ORDER BY post_id DESC";
					}
					elseif($_GET['date'] === "month")
                                        {
                                                $query="SELECT * FROM posts WHERE date > DATE_SUB(NOW(), INTERVAL 1 MONTH) ORDER BY post_id DESC";
					}
					elseif($_GET['date'] === "year")
                                        {
                                                $query="SELECT * FROM posts WHERE date > DATE_SUB(NOW(), INTERVAL 1 YEAR) ORDER BY post_id DESC";
					}
					else
					{
						die("incorrect use of ?date for search");
					}
				}
				else
				{
					$query="SELECT * FROM posts ORDER BY post_id DESC LIMIT 10";
				}
				$select_posts=mysqli_query($db_connection, $query);
				include("print_shortened_posts.php");	
			?>
