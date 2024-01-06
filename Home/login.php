<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="home-style.css">
</head>
<body>

<div class="container">
    <div class="bg-light-subtle">
        <div class="d-flex align-items-center justify-content-center flex-column mt-5">
            <h1 class="text-uppercase fw-semibold mb-3">Selamat Datang!</h1>
            <h3 class="text-uppercase fw-bold">Sistem Pakar PENYAKIT MENULAR SEKSUAL PADA MANUSIA</h3>
            <div class="login">
                <form action="home.php" method="post">
                <label for="name" class="text-black">Username</label><br>
                <input type="text" name="name" id="name" placeholder="Silahkan Masukan Username">
                <br>
                <label for="pass">Password</label><br>
                <input type="password" name="pass" id="pass" placeholder="Silahkan Masukan Password">
                <button class="button  mt-5"type="submit" name="submit">Submit</button>
            </div>
        </div>
    </div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<!-- php -->
<?php 
// require '../config/koneksi.php';

session_start();
if (isset($_POST['submit'])) {
    require_once '../config/koneksi.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashed_password = md5($password); 

    $query = "SELECT * FROM data_admin WHERE username='$username' AND password='$hashed_password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: ../index.php"); 
    } else {
        $error = "Username atau password salah";
    }
}


?>