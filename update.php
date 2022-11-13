<?php
    $conn = mysqli_connect("localhost:3306", "root",  "root", "madang");
    if(!$conn){
    echo "db 에 연결하지 못했습니다.".mysqli_connect_error();
    }
    else{
        $sql = "SELECT * FROM Customer";
        $result = mysqli_query($conn, $sql);
        $list = '';
        while($row = mysqli_fetch_array($result)){
          $list = $list."<li>{$row['custid']}-{$row['name']}--{$row['address']}--{$row['phone']}</a></li>";
        }
        echo $list;

?> 
      <!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <title>Update</title>
      </head>
      <body>
        <h1>Update</h1>
        <form action="insert_update.php" method="get">
          <p>
            <label for="custid">custid:</label>
            <input type="text" id="custid" name="custid" placeholder="custid">
	  </p>
	  <p>
            <label for="name">name:</label>
            <input type="text" id="name" name="name" placeholder="name">
	  </p>
	  <p>
            <label for="address">address:</label>
            <input type="text" id="address" name="address" placeholder="address">
	  </p>
          <p>
            <label for="phone">phone:</label>
            <input type="text" id="phone" name="phone" placeholder="phone">
          </p>

          <input type="submit" value="Submit">
        </form>
      <a href="index.php" title="홈으로 돌아가기">홈으로 돌아가기</a>
<?php
mysqli_close($conn);
    }
?>
      </body>
</html>

