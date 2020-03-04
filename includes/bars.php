<body>
<?php $db_connection = OpenCon(); ?>
                <div id="container">
                        <div id="banner">
                                <ul id="menubar">
                                        <li><a href="post.php">post a review</a></li>
                                        <li><a href="donate.php">donation</a></li>
                                        <li><a href="about.php">about us</a></li>
                                        <li><a href="index.php">home</a></li>
                                </ul>
                        </div>
                        <div id="sidebar">
                                <h3 class="ie6">search</h3>
                                <form action="search.php" method="get">
                                        <fieldset>
                                                <input type="text" name="string" size="10" class="textfield" />
                                                <br />
                                                <input type="submit" name="Submit" value="FIND" class="submit"/>
                                        </fieldset>
                                </form>
                                <h3>about</h3>
                                <p>The meaning behind The Raven is that you should let go: you cannot hold onto everything you love forever, and it will only bring you pain and suffering.</p>
                                <h3>archives</h3>
                                <ul class="arch_cat">
                                        <li><a href="#">Last week</a></li>
                                        <li><a href="#">Last month</a></li>
                                        <li><a href="#">All materials</a></li>
                                </ul>

                                <h3>categories</h3>
				<ul class="arch_cat">
				
				<?php
					include("print_categories.php");
				?>

                               	</ul>
                        </div>

 <div id="content">
