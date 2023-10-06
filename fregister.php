
<?php
$connect=mysql_connect("localhost","root","");
mysql_select_db("as_airline",$connect);

	$fname=$_REQUEST['name'];
				$femail=$_REQUEST['email'];
						$fcontact=$_REQUEST['contact'];
								$fpassword=$_REQUEST['password'];
										$faddress=$_REQUEST['address'];
										$floc=$_REQUEST['loc'];
												
												
	 if($connect)
	 	{
		 		$max_qry = mysql_query("select max(id) from farmer");
				$max_row = mysql_fetch_array($max_qry); 
				$id=$max_row['max(id)']+1;
				$fid = "FID00".$id;
	
	
		
			$sqlCheckUname = mysql_query("Insert into farmer values('','$fid','$fname','$fcontact','$femail','$floc','$faddress','$fpassword')");
				
				if($sqlCheckUname)
				{
				echo "Success";
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
	
   // echo 'Image upload complete!!, Please check your php file directory';
?>

