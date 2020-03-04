 			</div>
                        <div id="footer">
                                <p>&copy; Web development 2019/2020 project by Martin Iliev, FN 62197</p>
                        </div>
     		</div>
	<?php 
		if(isset($db_connection))
		{
			CloseCon($db_connection); 
		}
		else
		{
			die("For some reason there was no db for closing");
		}
?>
	</body>
</html>

