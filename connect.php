<?php
					$con=mysql_connect("localhost","huu41171_thong","Ck01644232848");
					if(!$con)
					{
						die('could not connet: '.mysql_error());
					}
					mysql_select_db("huu41171_CV",$con);
?>