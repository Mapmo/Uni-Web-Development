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
				$query="SELECT * FROM posts";
				$select_posts=mysqli_query($db_connection, $query);

				include("print_shortened_posts.php");	
			?>
