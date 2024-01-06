<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Penyakit Seksual | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="Home/home-style.css">
</head>
<body>

<div class="container">
    <div>
        <div class="d-flex align-items-center justify-content-center flex-column mt-5">
            <h1 class="text-uppercase fw-semibold mb-3">Selamat Datang!</h1>
            <h3 class="text-uppercase fw-bold mb-5">Sistem Pakar PENYAKIT MENULAR SEKSUAL PADA MANUSIA</h3>

            <div class="card py-4 px-5">
                <div class="row">
                    <div class="col">
                        <form method="post">
                          <div class="mb-3">
                            <label for="name" class="text-black form-label">Username</label><br>
                            <input type="text" name="name" class="form-control" placeholder="Silahkan Masukan Username" required>
                          </div>
                          <div class="mb-3">
                            <label for="pass" class="text-black form-label">Password</label><br>
                            <input type="password" name="pass" class="form-control" placeholder="Silahkan Masukan Password" required>
                          </div>
                          <button type="submit" class="btn" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<!-- php -->
<?php 
    require 'config/koneksi.php';
    session_start();

    if (isset($_POST['submit'])) {

        $username = mysqli_real_escape_string($koneksi, $_POST['name']);
        $password = mysqli_real_escape_string($koneksi, $_POST['pass']);
        $hashed_password = md5($password); 

        $query = "SELECT * FROM data_admin WHERE username = '$username' AND password = '$hashed_password'";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $username;

            echo '<script>
                alert("Login berhasil. Selamat datang, ' . $username . '!"); 
                window.location.href = "dashboard/index.php";
            </script>';
           
        } else {
            '<script>
                alert("Username atau password salah!"); 
            </script>';
        }
    }

?>