1. cd /var/www/html
2. git clone https://github.com/ghkdtlwns987/DB_Query.git

!! MYSQL password : root !!

CREATE DATABASE madang;
use madang;

DROP TABLE IF EXISTS Customer;
CREATE TABLE  Customer (
  custid      INTEGER PRIMARY KEY,
  name        VARCHAR(40),
  address     VARCHAR(50),
  phone       VARCHAR(20)
);

index.php 
  => SELECT * from Customer 쿼리르 통해 Customer Table의 정보를 출력한다. 

Insert 
  => custid, name, address, phone 에 각각 입력한 후 Submet 
  => 데이터 삽입
  
Delete
  => custid 입력
  => 데이터 삭제
  
Update
  => Custid, name, address, phone 에 각각 입력 후 Subnewt
  => 입력한 custid 가 맞다면 업데이트 진행
