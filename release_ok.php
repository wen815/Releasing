<?php
include("conn/conn.php");
$title=$_POST[title];
$content=$_POST[content];
$linkman=$_POST[linkman];
$tel=$_POST[tel];
//$edate=date("Y-m-d h:i:s");
$edate=date("Y-m-d H:i:s");
$sql=mysqli_query($conn,"insert into info(title,content,linkman,tel) values('$title','$content','$linkman','$tel')");
if($sql){//the link is normal
	echo "<script>alert('信息发布成功');window.location.href='release.php';</script>";
}else{//the link is failed
	echo "<script>alert('信息发布失败');history.back();</script>";
}
?>