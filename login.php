<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #f6f8e7;
            font-family: Arial, sans-serif;
        }
        .modal-bg {
            background: rgba(162,187,27,0.1);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal {
            background: #fff;
            border: 8px solid #dbe89a;
            border-radius: 8px;
            width: 700px;
            max-width: 95vw;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            position: relative;
        }
        .modal-header {
            background: #a2bb1b;
            color: #fff;
            font-size: 26px;
            font-weight: bold;
            padding: 18px 28px;
            border-radius: 4px 4px 0 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .close-btn {
            font-size: 28px;
            color: #fff;
            background: none;
            border: none;
            cursor: pointer;
        }
        .modal-content {
            display: flex;
            padding: 32px 28px 28px 28px;
            gap: 32px;
        }
        .login-form {
            flex: 1;
            border-right: 1px solid #e0e0e0;
            padding-right: 32px;
        }
        .login-form label {
            font-size: 18px;
            font-weight: bold;
            color: #374151;
            display: block;
            margin-bottom: 8px;
        }
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            font-size: 16px;
            border: 1px solid #d0d0d0;
            border-radius: 3px;
            margin-bottom: 18px;
            background: #f9fafb;
        }
        .login-form .password-wrapper {
            position: relative;
        }
        .login-form .password-wrapper .eye {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #b0b0b0;
            cursor: pointer;
        }
        .login-form button {
            background: #a2bb1b;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            padding: 10px 32px;
            cursor: pointer;
            margin-top: 8px;
        }
        .side-info {
            flex: 1;
            padding-left: 32px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        .side-info h3 {
            color: #374151;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 6px;
        }
        .side-info p {
            color: #374151;
            font-size: 16px;
            margin-bottom: 18px;
        }
        .side-info .register-btn {
            background: #a2bb1b;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            padding: 10px 32px;
            margin-bottom: 24px;
            cursor: pointer;
        }
        .side-info .forgot {
            color: #374151;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 4px;
        }
        .side-info .recover-link {
            color: #a2bb1b;
            font-weight: bold;
            text-decoration: none;
        }
        .side-info .recover-link:hover {
            text-decoration: underline;
        }
        @media (max-width: 700px) {
            .modal-content {
                flex-direction: column;
                gap: 0;
            }
            .login-form {
                border-right: none;
                border-bottom: 1px solid #e0e0e0;
                padding-right: 0;
                padding-bottom: 24px;
            }
            .side-info {
                padding-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="modal-bg">
        <div class="modal">
            <div class="modal-header">
                Login To Continue...
                <button class="close-btn" onclick="window.history.back()">&times;</button>
            </div>
            <div class="modal-content">
                <form class="login-form">
                    <label for="email">Email ID or Profile ID</label>
                    <input type="text" id="email" name="email" placeholder="Email ID or Profile ID" required>
                    <label for="password">Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <span class="eye" onclick="togglePassword()">&#128065;</span>
                    </div>
                    <button type="submit">LOGIN</button>
                </form>
                <div class="side-info">
                    <h3>Not Our Member?</h3>
                    <p>Have not previously registered?</p>
                    <a href="./register.php"><button class="register-btn">REGISTER NOW</button></a>
                    <div class="forgot">Forgot Password?</div>
                    <p><a href="#" class="recover-link">Click here for Recover</a> a new password.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePassword() {
            var pwd = document.getElementById('password');
            if (pwd.type === 'password') {
                pwd.type = 'text';
            } else {
                pwd.type = 'password';
            }
        }
    </script>

</body>

</html>