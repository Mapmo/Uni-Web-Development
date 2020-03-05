<?php

	$i=0;

	include("select_all_categories.php");
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

