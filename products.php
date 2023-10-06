<?php 

$connect=mysql_connect("localhost","root","");
mysql_select_db("as_airline",$connect);

$sql = mysql_query("SELECT * FROM product");

if ($sql) {
while($res=mysql_fetch_array($sql))
{
$fid=$res['fid'];



$tem[]=	array("pid"=>$res['pid'],"gname"=>$res['gname'],"gtype"=>$res['gtype'],"gprice"=>$res['gquantity'],"gsize"=>$res['gsize'],"gimg"=>$res['gimg'],"fid"=>$res['fid'],"fcno"=>$fid);
 $json = json_encode($tem);
}
}
else {
 echo "0 results";
}

 echo $json;


?>


