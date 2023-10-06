
<?php
$connect=mysql_connect("localhost","root","");
mysql_select_db("as_airline",$connect);

	$destinationFileName = "gimg".date('YmdHis');
    $base=$_REQUEST['image'];

     $binary=base64_decode($base);
    header('Content-Type: bitmap; charset=utf-8');
    $file = fopen('upload/'. $destinationFileName .'.jpg', 'wb');
    fwrite($file, $binary);
    fclose($file);
	
		$gname=$_REQUEST['gname'];
				$gtype=$_REQUEST['gtype'];
						$gprice=$_REQUEST['gprice'];
								$gsize=$_REQUEST['gsize'];
										$gnpack=$_REQUEST['gnpack'];
												$gquantity=$_REQUEST['gquantity'];
												$fid=$_REQUEST['fid'];
												
	 if($connect)
	 	{
			$sqlCheckUname = mysql_query("Insert into product values('','$gname','$gtype','$gprice','$gsize','','$gquantity','$destinationFileName','$fid')");
				
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

