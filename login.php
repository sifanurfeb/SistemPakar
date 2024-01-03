<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="bg-light-subtle">
        <div class="d-flex align-items-center justify-content-center flex-column mt-5">
            <h1 class="text-uppercase fw-semibold mb-3">Selamat Datang!</h1>
            <h3 class="text-uppercase fw-bold">Sistem Pakar PENYAKIT MENULAR SEKSUAL PADA MANUSIA</h3>
            <div class="login">
                <label for="name" class="text-black">Username</label><br>
                <input type="text" name="name" id="name" placeholder="Silahkan Masukan Username">
                <br>
                <label for="pass">Password</label><br>
                <input type="password" name="pass" id="pass" placeholder="Silahkan Masukan Password">
                <button class="btn btn-primary mt-5"type="submit">Submit</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>