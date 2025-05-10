<?php
session_start();

$conn = new mysqli("localhost", "root", "", "login"); // Ganti 'namadatabase'

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $_SESSION['login'] = true;
    header("Location: index.html"); // Sukses login → ke dashboard
    exit();
} else {
    echo "Email atau password salah.";
}
?>
