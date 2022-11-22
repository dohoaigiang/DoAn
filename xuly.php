<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'data');
$sql = "SELECT * FROM member WHERE username = '$username'";
$result = $conn->query($sql)->fetch_assoc();

if($result['password'] == $password){
    header('http://localhost/DoAn/Trangchu.php');
}
else{
    echo'dang nhap sai thong tin';
}
$conn->close();
?>