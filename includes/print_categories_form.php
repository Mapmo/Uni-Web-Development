<?php
	include("select_all_categories.php");
 	while($row=mysqli_fetch_assoc($select_cats))
	{
		echo "<option value='".$row['value']."'>".$row['value']."</option>";
	}	
?>
