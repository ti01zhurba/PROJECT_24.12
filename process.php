<?php

$host = "sql208.byethost17.com";
$username = "b17_35665961"; 
$password = "fsadfasdcs1fsadfasdcs1";
$dbname = "b17_35665961_3t4tg4e";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Обработка формы
if(isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $message = $_POST['message'];

  // Вставка данных
  $sql = "INSERT INTO contacts (name, email, company, message) VALUES ('$name', '$email', '$company', '$message')";
  
  if (mysqli_query($conn, $sql)) {
    echo "Data inserted";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}

mysqli_close($conn);
?>