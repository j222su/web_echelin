<?php
date_default_timezone_set('Asia/Seoul');
$upload_dir = './storeImg/';
$con = mysqli_connect("localhost","root","123456","echelin");

$num=$_GET["pic_num"];

// $file_n	 = $_FILES["file"]["name"];
//print_r($_FILES);
// var_dump($file_n);


for($i=0; $i<5; $i++) {
$random=mt_rand(1,9999);
$file_name	 = $_FILES["file"]["name"][$i];
$file_type	 = $_FILES["file"]["type"][$i];
$file_tmp_name	 = $_FILES["file"]["tmp_name"][$i];
$file_error    = $_FILES["file"]["error"][$i];
$file_size	 = $_FILES["file"]["size"][$i];



// print_r($_FILES);

if ($file_name && !$file_error)
{

  $file = explode(".", $file_name);

  $file_name = $file[0];
  $file_ext  = $file[1];

  $new_file_name = date("Y_m_d_H_i_s")."_".$random;

  $copied_file_name = $new_file_name.".".$file_ext;

  $uploaded_file = $upload_dir.$copied_file_name;

  if( $file_size  > 6000000 ) {
      echo("
      <script>
      alert('업로드 파일 크기가 지정된 용량(6MB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
      history.go(-1)
      </script>
      ");
      exit;
  }

  if (!move_uploaded_file($file_tmp_name, $uploaded_file) )
  {
      echo("
        <script>
        alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
        </script>
      ");
      exit;
  }
}
else
{
  $file_name      = "";
  $file_type      = "";
  $copied_file_name = "";
}
$num_chk=$num+$i;

$sql = "update store_img set store_file_name='$file_name', store_file_type='$file_type', store_file_copied='$copied_file_name' where num='$num_chk'";

mysqli_query($con, $sql);
var_dump($file_name);
}

mysqli_close($con);

echo("
  <script>
    location.href='./seller_sellerinfo_index.php';
  </script>
");
?>
