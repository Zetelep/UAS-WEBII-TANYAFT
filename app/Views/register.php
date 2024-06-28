<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <style>
        .register-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .register-box {
            width: 400px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        .register-box img {
            width:300px;
        }
        .register-box h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-box">
        <img src="https://ft.ulm.ac.id/id/wp-content/uploads/2021/03/logo-ulm.jpg" alt="Logo">
            <h2>Daftar Akun Baru</h2>
            <p>Masukkan informasi berikut untuk mendaftar!</p>
            <form class="ui form" action="/auth/create" method="post">
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <button class="ui button primary" type="submit">Daftar</button>
            </form>
            <p>Sudah punya akun? <a href="/login">Login</a></p>
        </div>
    </div>
</body>
</html>
