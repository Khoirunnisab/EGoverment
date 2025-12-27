<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            height: 100vh;
            background: url("{{ asset('img/bg-login.jpg') }}") no-repeat center center/cover;
        }

        .login-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            width: 420px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 30px;
            color: #000;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group input {
            width: 100%;
            padding: 14px 45px 14px 15px;
            border-radius: 10px;
            border: none;
            outline: none;
            font-size: 16px;
        }

        .input-group i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        .forgot {
            text-align: right;
            margin-bottom: 25px;
        }

        .forgot a {
            font-size: 14px;
            color: #333;
            text-decoration: none;
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background: #4f6ef7;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #3c5ae0;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-box">
        <h2>Login Admin</h2>

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf

            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
                <i class="fa fa-user"></i>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
                <i class="fa fa-lock"></i>
            </div>

            <div class="forgot">
                <a href="#">Forget password?</a>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</div>

</body>
</html>
