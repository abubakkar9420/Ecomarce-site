<?php 
 session-start();
header ('location:login.php');
$con= mysqli_connect('Localhost','root','123456');
mysqli_select_dp($con,'userregistration');
$name = $_POST['user'];
$pass = $_POST['Password'];
$s = "select  * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
	echo" Username already taken";
}
else{
	$reg = "insert into usertable (name, password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo" Registration Succesfull";
}








?>