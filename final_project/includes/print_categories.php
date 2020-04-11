<?php

	$i=0;
	$cat_query="SELECT * FROM categories";
	$select_cats=mysqli_query($db_connection, $cat_query);
	
	if($select_cats == false)
	{   
		die("Error in the basic category query");
	}   
	
	while($row=mysqli_fetch_assoc($select_cats))
	{   
		$i++;
		echo "<li><a href='search.php?cat=".$row['value']."'>".$row['value']."</a></li>";
		
		if($i === 4)
		{   
			echo '<span id="dots">...</span>';
			echo '<span id="more">';
		}   
	}   
	
	if($i > 4)
	{   
		echo '</span>';
		echo '<li><button onclick="ShrinkText()" id="myBtn" class="arch_button">Read more</button></li>';
	}

?>

