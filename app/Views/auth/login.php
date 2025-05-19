<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: 'Metropolis', sans-serif;
            background: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.15);
            width: 320px;
        }
        h2 {
            font-family: 'Metropolis', sans-serif;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        label {
            font-family: 'Metropolis', sans-serif;
            display: block;
            margin-top: 15px;
            color: #555;
        }
        input[type="text"], input[type="password"] {
            font-family: 'Metropolis', sans-serif;
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            font-family: 'Metropolis', sans-serif;
            width: 100%;
            margin-top: 25px;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: #e74c3c;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="<?= base_url('login') ?>">
            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="error"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
