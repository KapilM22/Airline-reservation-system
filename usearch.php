<?php

$connect=mysql_connect("localhost","root","");
mysql_select_db("as_airline",$connect);

 $source = $_GET["source"];
 $detsination = $_GET["detsination"];
 $entry = $_GET["entry"];
 
	 if($connect)
	 	{
			$sqlCheckUname = mysql_query("SELECT * FROM product WHERE gtype='$source' and gprice='$detsination'  ");
				$u_name_query =  mysql_num_rows($sqlCheckUname);
				if($u_name_query == 1)
				{
				//echo "Success";
				$row=mysql_fetch_array($sqlCheckUname);
				$gsize=$row['gsize'];
				
				if($entry==$gsize)
				{
				echo "NotAllowed";
				}
				else
				{
				echo "Allowed";
				}
				
				
				
				}
				else
				{
				echo "failed";
				}
				
				
 		}
	else
		{
		echo "Connection Error";
		}
	

?>