<?php
$con = mysqli_connect("sql107.unaux.com", "unaux_34173211", "9474812185", "unaux_34173211_msg"); 

if($_POST['param']=='rec') {
$name1 = $_POST['name1'];
$arr = mysqli_fetch_assoc(mysqli_query($con, "select * from msg where name='$name1'"));
mysqli_query($con, "update msg set msg='', sender='' where name='$name1'");
if($arr!=null) { 
 $person = array("msg"=>$arr['msg'],"sender"=>$arr['sender']);
 header("Content-Type: application/json");
 echo json_encode($person);
 }
}

if($_POST['param']=='send') {
$name = $_POST['name'];
$msg = $_POST['msg']."<BR9474>";
mysqli_query($con, "update msg set msg = CONCAT(msg, '$msg') , sender=CONCAT(sender, '$name<BR9474>') where name!='$name'");
mysqli_query($con, "insert into backup values('$name' , '$msg')");
}

?>


