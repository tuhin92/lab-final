<!DOCTYPE html>
<html lang="en">

<head>
</head>
    <style>
        .modal-bg {
            background: rgba(162,187,27,0.1);
            min-height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0; left: 0;
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
        }
        .modal-bg.active {
            display: flex;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BibahoBd</title>
</head>

<body>
    <nav style="background-color: #a2bb1b; color: #fff; font-family: Arial, sans-serif; padding: 0; margin: 0;">
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 0 40px; height: 40px; font-size: 18px;">
            <div style="display: flex; align-items: center; gap: 20px;">
                <span style="display: flex; align-items: center; gap: 5px;">
                    <span style="font-size: 18px;">&#128222;</span> (88) 0960 66 65 555
                </span>
                <span style="display: flex; align-items: center; gap: 5px;">
                    <span style="font-size: 18px;">&#9993;</span> info@bibahabd.com
                </span>
                <span style="display: flex; align-items: center; gap: 5px;">
                    <span style="font-size: 18px;">&#128197;</span> ২ ভাদ্র ১৪৩২
                </span>
            </div>
            <div style="display: flex; align-items: center; gap: 20px;">
                <span style="display: flex; align-items: center; gap: 5px;">
                    <span style="font-size: 18px;">&#128274;</span> <a href="#" id="login-link">LOGIN</a>
                </span>
                <span style="border-left: 1px solid #d0e06a; height: 20px; margin: 0 10px;"></span>
                <span style="display: flex; align-items: center; gap: 5px;">
                    <span style="font-size: 18px;">&#128100;</span> <a href="./register.php">REGISTRATION</a>
                </span>
            </div>
        </div>
        <div style="background: #fff; color: #7fa02a; display: flex; align-items: center; padding: 0 40px; height: 80px; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
            <div style="display: flex; align-items: center; gap: 10px;">
                <img src="https://www.bibahabd.com/assets/logo/logo_bibahabd.png" alt="">
            </div>
            <ul style="list-style: none; display: flex; align-items: center; margin: 0 0 0 60px; padding: 0; gap: 36px; font-size: 22px; font-weight: 600;">
                <li style="background: #eaf2c2; color: #7fa02a; border-radius: 6px; padding: 10px 24px; display: flex; align-items: center; gap: 8px;">
                    HOME
                </li>
                <li style="color: #757575; display: flex; align-items: center; gap: 8px;">
                    PROCESS
                </li>
                <li style="color: #757575; display: flex; align-items: center; gap: 8px;">
                    SEARCH
                </li>
                <li style="color: #757575; display: flex; align-items: center; gap: 8px;">
                    PACKAGES
                </li>
                <li style="color: #757575; display: flex; align-items: center; gap: 8px;">
                    APPOINTMENT
                </li>
                <li style="color: #757575; display: flex; align-items: center; gap: 8px;">
                    PAGES
                </li>
                <li style="color: #757575; display: flex; align-items: center; gap: 8px;">
                    CONTACT
                </li>
            </ul>
        </div>
    </nav>

</body>

    <!-- Login Modal Popup -->
    <div class="modal-bg" id="login-modal">
        <div class="modal">
            <div class="modal-header">
                Login To Continue...
                <button class="close-btn" id="close-login-modal">&times;</button>
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
                    <a href="./register.php"><button class="register-btn" type="button">REGISTER NOW</button></a>
                    <div class="forgot">Forgot Password?</div>
                    <p><a href="#" class="recover-link">Click here for Recover</a> a new password.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Show modal
        document.getElementById('login-link').onclick = function(e) {
            e.preventDefault();
            document.getElementById('login-modal').classList.add('active');
        };
        // Hide modal
        document.getElementById('close-login-modal').onclick = function() {
            document.getElementById('login-modal').classList.remove('active');
        };
        // Hide modal on background click
        document.getElementById('login-modal').onclick = function(e) {
            if (e.target === this) {
                this.classList.remove('active');
            }
        };
        // Password toggle
        function togglePassword() {
            var pwd = document.getElementById('password');
            if (pwd.type === 'password') {
                pwd.type = 'text';
            } else {
                pwd.type = 'password';
            }
        }
    </script>

</html>