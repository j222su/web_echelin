<?
session_start();
$sns = $_POST["user_sns"];
$Email = $_POST["user_Email"];
$Checkemail = $_POST["user_checkEmail"];
$Password = $_POST["user_password"];
$Name = $_POST["user_name"];
$Level = $_POST["user_Level"]+1;
$Sung = $_POST["user_sung"];
$Age = $_POST["user_age"];
$jumin = $_POST["user_jumin"];
$Phone = $_POST["user_phone"];
$Geoju = $_POST["user_geoju"];
$Regist = date("Y-m-d");
$LikeTag = $_POST["user_likeTag"];
$VisitC = $_POST["user_VisitCount"];
$YeyagC = $_POST["user_yeyagCount"];
$Profile = $_POST["user_profile"];
$About = $_POST["user_aboutme"];
$LikeC = $_POST["user_likeCount"];
$Payment = $_POST["user_payment"];


$con = mysqli_connect("localhost" , "root" , "123456" , "echelin");
 $Name = $Sung. $Name;
   $sql = "INSERT INTO `echelin_user`(`user_sns`,`user_Email`,`user_name`,`user_password`,`user_Level`,`user_regist_day`,`user_phone`,`user_age`)VALUES
   (\"$sns\",\"$Email\",\"$Name\",\"$Password\",\"$Level\",\"$Regist\",\"$Phone\",\"$Age\")";

// $sql = "INSERT INTO `echelin_user`(`user_sns`,`user_Email`,`user_name`,`user_sung`,`user_password`)VALUES
// (\"$sns\",\"$Email\",\"$Name\",\"$Sung\",\"$Password\")";
 
//    $sql = "INSERT INTO `echelin_user`(`user_sns`, `user_Email`, `user_name`) VALUES 
//    (\"$sns\",\"$Email\",\"$Name\")";


//mysqli_query($con,$sql);
//mysqli_close($con);

$result = $con->query($sql);
 if ($result === TRUE) {
 	echo "<script>alert('echelm 테이블에 데이터베이스가 추가되었습니다.');</script>";
 } else {
 	die('INSERTPHP insert Error: ' . mysqli_error($con));
 }


 echo "
   <script>
          location.href = '/echelin/index.php';
   </script>      
 ";
