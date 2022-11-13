<?php
    $conn = mysqli_connect("localhost:3306", "root",  "root", "madang");
    if(!$conn){
      echo "db 에 연결하지 못했습니다.".mysqli_connect_error();
    }
    else{
      $custid = $_GET['custid'];
      $sqlDel = "DELETE FROM Customer WHERE custid = '$custid'";
      mysqli_query($conn, $sqlDel);
?>
            <script>alert('삭제 완료!');</script>
            <script>location.href='index.php'</script>
<?php
    mysqli_close($conn);
    }
?>

