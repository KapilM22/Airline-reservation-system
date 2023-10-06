<?php

$connect=mysql_connect("localhost","root","");
mysql_select_db("as_airline",$connect);
session_start();
extract($_POST);
$uid=$_REQUEST['uid'];
$sql = mysql_query("SELECT * FROM booking WHERE uid='$uid' ORDER BY bid DESC ");
//$r = mysql_query($sql);

if ($sql) {
while($res=mysql_fetch_array($sql))
{
$fid=$res['fid'];
$pid=$res['pid'];

$sql2=mysql_query("SELECT * FROM userregister where email='$uid'");
$rd=mysql_fetch_array($sql2);

$sql3=mysql_query("SELECT * FROM product where pid ='$pid'");
$re=mysql_fetch_array($sql3);


 $tem[] =array("fname"=>$rd['name'],"fcont"=> $rd['contact'],"gname"=>$re['gname'],"gtype"=>$re['gtype'],"gprice"=>$re['gprice'],"count"=>$res['count'],"totp"=>$res['totp']);
 $json = json_encode($tem);
}
}
else {
 echo "0 results";
}

 echo $json;
 
 ?>

   
