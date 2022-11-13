cd /var/www/html
git clone https://github.com/ghkdtlwns987/DB_Query.git
mv ./DB_Query/* ./

!! MYSQL password : root !!

CREATE DATABASE madang;
use madang;

CREATE DATABASE madang;
use madang;

DROP TABLE IF EXISTS Customer;

CREATE TABLE  Customer (
  custid      INTEGER PRIMARY KEY,
  name        VARCHAR(40),
  address     VARCHAR(50),
  phone       VARCHAR(20)
);

INSERT INTO Customer VALUES (1, '박지성', '영국 맨체스타', '000-5000-0001');
INSERT INTO Customer VALUES (2, '김연아', '대한민국 서울', '000-6000-0001');
INSERT INTO Customer VALUES (3, '장미란', '대한민국 강원도', '000-7000-0001');
INSERT INTO Customer VALUES (4, '추신수', '미국 클리블랜드', '000-8000-0001');
INSERT INTO Customer VALUES (5, '박세리', '대한민국 대전',  NULL);

COMMIT;

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
