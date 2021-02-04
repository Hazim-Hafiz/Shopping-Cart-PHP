<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
$conn = new mysqli($servername, $username, $password, $dbname,"3308");
$name = $_POST['name'];
$code = $_POST['code'];
$price = $_POST['price'];
$file = $_FILES['image']['tmp_name'];

$image_name = "product-images/" . $_FILES['image']['name'];
 $sql = "INSERT INTO tblproduct (id,name, code, Price, image) VALUES ('','$name','$code','$price', '{$image_name}')";
 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>