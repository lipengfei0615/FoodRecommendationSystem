<?php
session_start();


$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '1234';          // mysql用户名密码
$dbname = "foodrecommendation";

if(isset($_SESSION['Username'])&&!empty($_SESSION['Username'])){
$username = $_SESSION['Username'];

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}
$b=$_POST['name2'];
$url = "./index2.html";

if($_POST['ratecafe'] == "100"){

}elseif ($_POST['ratecafe'] == 5){
    mysqli_query($conn,"UPDATE restaurant SET rate=rate+5 WHERE restaurant_id=$b");
    header( "Location: $url" );
}elseif ($_POST['ratecafe'] == 4){
    mysqli_query($conn,"UPDATE restaurant SET rate=rate+4 WHERE restaurant_id=$b");
    header( "Location: $url" );
}elseif ($_POST['ratecafe'] == 3){
    mysqli_query($conn,"UPDATE restaurant SET rate=rate+1 WHERE restaurant_id=$b");
    header( "Location: $url" );
}elseif ($_POST['ratecafe'] == 0){
    header( "Location: $url" );
}
}else{
  header ("location:login.php");
}

?>
