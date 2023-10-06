<?php 

$connect=mysql_connect("localhost","root","");
mysql_select_db("as_airline",$connect);


 // $bid = $_GET['bid'];
// $fcategory = $_GET['fcategory'];
 //$fname= $_GET['fname'];
 $fprice = $_GET["fprice"];
 $fcount = $_GET["fcount"];
	 $uid = $_GET["uid"];
  $pid = $_GET["pid"];
  $fid=$_GET["fid"];
 $fcountprice= $fprice*$fcount;

if($connect)
{
					
					
					$getpd=mysql_query("Select * from product where pid='$pid'");
					$pv=mysql_fetch_array($getpd);
					$fcategory=$pv['gtype'];
					$fname=$pv['gname'];
					
					$sql_register = mysql_query("INSERT INTO booking
					VALUES('','$pid','$fcount','$fcountprice','$fid','$uid')");
					if($sql_register)
					{
						echo "added";
					}
					else
					{
						echo "Failed";
					}
					
					
					
					

}
else
{
echo "Connection Error";
}

?>
