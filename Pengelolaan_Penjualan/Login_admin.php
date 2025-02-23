<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Admin</title>
    <link rel="stylesheet" href="Login_admin.css">
    <style>
        #error-message {
            color: red;
            font-weight: bold;
            text-align: center;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <?php
    session_start();
    $error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";
    unset($_SESSION['error_message']); // Hapus pesan setelah ditampilkan
    ?>

    <form action="Cek_data.php" method="post" class="bg-form">
        <header>
            <img src="CAm.svg" alt="">
        </header>
        <hr>
        <label id="error-message"><?php echo $error_message; ?></label>
        <hr>
        <label for="Username">Username</label>
        <input type="text" name="username" required>
        <label for="Password">Password</label>
        <input type="password" name="password" required> 
        <input type="submit" value="Masuk">
    </form>

</body>
</html>
