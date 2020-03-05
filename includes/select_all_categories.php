<?php
	$cat_query="SELECT * FROM categories";
        $select_cats=mysqli_query($db_connection, $cat_query);

        if($select_cats === false)
        {
                die("Error in the basic category query");
        }
?>
