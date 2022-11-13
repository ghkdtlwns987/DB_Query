<?php
  include ("login_check.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>DB Test</title>
</head>
<body>
  <h1>DB_Query</h1>
  <?php
      $conn = mysqli_connect("localhost:3306", "root",  "root", "madang");
      if(!$conn){
        echo "db 에 연결하지 못했습니다.".mysqli_connect_error();
      }
      else{
          # echo "db 에 접속했습니다.\n";
  ?>
            <button onclick="location.href='insert.html'">Insert</button>
            <button onclick="location.href='delete.html'">Delete</button>
	    <button onclick="location.href='update.php'">Update</button>

            <br/>

<?php
          }
?>
<br></br>
<h2> SELECT * FROM Customer</h2>
<?php
        $sql = "SELECT * FROM Customer";
        $result = mysqli_query($conn, $sql);
        $list = '';
        while($row = mysqli_fetch_array($result)){
          $list = $list."<li>{$row['custid']}-{$row['name']}--{$row['address']}--{$row['phone']}</a></li>";
        }
        echo $list;
      ?>
</body>
</html>
