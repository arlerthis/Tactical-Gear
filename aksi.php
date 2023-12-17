<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($aksi == "simpan"){
        mysqli_query($k, "INSERT INTO users(username, email, password) 
        VALUES('$username','$email','$password')")
        or die (mysqli_error($k). mysqli_errno($k));
        echo "<script>alert('Data berhasil disimpan!');location='register.php' </script>";
    }
?>