<?php
$firstName = $_POST['Name'];
$email = $_POST['email'],
$message = $_POST['Message'];

//Database Conection
$conn = new mysqli('localhost', 'root', '', 'Contact')
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("Insert into Contact(firstName, email, message
    values(?, ?, ?)");
    stmt -bind_param("sss", $firstName, $email, $message);
    $stmt->execute();
    echo "registration Successfully";
    $stmt->close();
    $conn->close();
}
?>