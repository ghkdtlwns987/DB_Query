<!DOCTYPE html>
<html<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>insert</title>
</head>
<body>
  <?php
  session_start();
  $conn = mysqli_connect("127.0.0.1:3306", "root", "root", "madang");

  if(!$conn) {
    echo 'db에 연결하지 못했습니다.'. mysqli_connect_error();
  } else {
    # echo 'db에 접속했습니다';
  
    $custid = $_GET['custid'];
    $name = $_GET['name'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];

    $sql = "INSERT INTO Customer (custid, name, address, phone) VALUES ('$custid', '$name', '$address', '$phone')";
    //mysqli_query($link, 'sql statement')
    $result = mysqli_query($conn, $sql);


    if($result == false) {
      echo '저장하지 못했습니다';
      error_log(mysqli_error($conn)); //에러로그기
    } else {
      echo '저장 성공';
    }
  }
mysqli_close($conn);
print "<hr/><a href='index.php'>메인화면으로 이동하기</a>";
  
 ?>
</body>
</html>
