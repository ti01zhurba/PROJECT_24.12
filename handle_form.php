<?php

// Підключення до БД 
$servername = "sql208.byethost17.com";
$username = "b17_35665961"; 
$password = "fsadfasdcs1fsadfasdcs1";
$dbname = "b17_35665961_3t4tg4e";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');

// Перевірка з'єднання
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Отримання даних форми
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$ticket_type = $_POST['ticket_type'];
$number_tickets = $_POST['number_tickets'];
$message = $_POST['message'];

// Вставка даних у таблицю tickets
$sql = "INSERT INTO tickets (name, email, phone, ticket_type, number_tickets, message)
        VALUES ('$name', '$email', '$phone', '$ticket_type', $number_tickets, '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>