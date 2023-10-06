<?php 

$connect=mysql_connect("localhost","root","");
mysql_select_db("as_airline",$connect);


 // $bid = $_GET['bid'];
// $fcategory = $_GET['fcategory'];
 //$fname= $_GET['fname'];
 $fprice = $_GET["fprice"];
 $fcount = $_GET["fcount"];
echo "uid=". $uid = $_GET["uid"];
  $pid = $_GET["pid"];
 $fcountprice= $fprice*$fcount;

if($connect)
{
					$chkqry=mysql_query("select * from billno where uid='$uid' && status='0'");
					if(mysql_num_rows($chkqry)==1)
					{
					$row=mysql_fetch_array($chkqry);
					$bid=$row['billno'];
					
					$getpd=mysql_query("Select * from product where pid='$pid'");
					$pv=mysql_fetch_array($getpd);
					$fcategory=$pv['gtype'];
					$fname=$pv['gname'];
					
					$sql_register = mysql_query("INSERT INTO fbill(bid,id,fcategory,fname,fprice,fcount,fcountprice,uid,status)
					VALUES('$bid','','$fcategory','$fname','$fprice','$fcount','$fcountprice','$uid','0')");
					if($sql_register)
					{
						echo "added";
					}
					else
					{
						echo "Failed";
					}
					}else
					{
					
					
						$max_qry = mysql_query("select max(bid) from billno");
						$max_row = mysql_fetch_array($max_qry); 
						$fid="PID00".($max_row['max(bid)']+1);
					
						mysql_query("INSERT INTO billno VALUES('','$fid','','$uid','0')");
					
						$getpd=mysql_query("Select * from product where pid='$pid'");
						$pv=mysql_fetch_array($getpd);
						$fcategory=$pv['gtype'];
						$fname=$pv['gname'];
					
						$sql_register = mysql_query("INSERT INTO fbill(bid,id,fcategory,fname,fprice,fcount,fcountprice,uid,status)
						VALUES('$fid','','$fcategory','$fname','$fprice','$fcount','$fcountprice','$uid','0')");
						if($sql_register)
						{
							echo "added";
						}
						else
						{
						echo "Failed";
						}
					}
					

}
else
{
echo "Connection Error";
}

?>
