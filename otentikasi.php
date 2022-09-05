<?php 
include 'koneksi.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $sql = mysqli_query($connect, $query);
    if ($sql->num_rows > 0) {
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['username'] = $row['username'];
        header("Location: form-input.php");
    } else {
      header("Location: index.php?stats=error");
    }
}
 ?>