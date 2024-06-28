<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <style>
        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-box {
            width: 400px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        .login-box img {
            width: 300px;
        }
        .login-box h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
        <img src="https://ft.ulm.ac.id/id/wp-content/uploads/2021/03/logo-ulm.jpg" alt="Logo">
        <h2>Selamat datang di TanyaFT</h2>    
        <h2>Login ke Akun Anda</h2>
            <p>Masukkan Username dan password untuk login!</p>
            <?php if(session()->getFlashdata('msg')): ?>
                <div class="ui negative message">
                    <p><?= session()->getFlashdata('msg') ?></p>
                </div>
            <?php endif; ?>
            <form class="ui form" action="/auth/authenticate" method="post">
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <button class="ui button primary" type="submit">Login</button>
            </form>
            <p>Belum Mempunyai Akun? <a href="/register">Daftar</a></p>
        </div>
    </div>
</body>
</html>
