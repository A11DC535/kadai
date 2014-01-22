<?php
$con=mysqli_connect("127.0.0.1","root","1","webpro2exam");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table

//$sql=  "CREATE TABLE IF NOT EXISTS Sales(id integer primary key AUTO_INCREMENT,product_id INT,sales_at DATETIME,quantity INT) ";
    
//$sql=  "CREATE TABLE IF NOT EXISTS Products(id INT,name VARCHAR(255),price INT)";



//private function buildDB() {
    $sql=  "CREATE TABLE  Sales(id integer primary key AUTO_INCREMENT,product_id INT,sales_at DATETIME,quantity INT) ";

  //  $sql = "CREATE TABLE Products(id INT,name VARCHAR(255),price INT)";
//MySQL_QUERY;

 //   return mysql_query($sql1) && mysql_query($sql2);
//}

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);

  }


?> 
