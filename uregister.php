
<?php
$connect=mysql_connect("localhost","root","");
mysql_select_db("as_airline",$connect);

	$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
						$contact=$_REQUEST['contact'];
								$password=$_REQUEST['password'];
										$address=$_REQUEST['address'];
												
												
	 if($connect)
	 	{
			$sqlCheckUname = mysql_query("Insert into userregister values('','$name','$email','$contact','$password','$address')");
				
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

