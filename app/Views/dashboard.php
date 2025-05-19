<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Metropolis', sans-serif;
            background: #f0f2f5;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center; /* center horizontally */
            align-items: center;     /* center vertically */
            padding: 20px;
        }
        .container {
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            font-family: 'Metropolis', sans-serif;
            color: #333;
            margin-bottom: 20px;
        }
        ul {
            font-family: 'Metropolis', sans-serif;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        ul li {
            font-family: 'Metropolis', sans-serif;
            margin-bottom: 15px;
        }
        a {
            font-family: 'Metropolis', sans-serif;
            text-decoration: none;
            color: #007BFF;
            font-weight: 600;
            padding: 10px 15px;
            background: white;
            border: 1px solid #007BFF;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?= esc(session('username') ?? 'User') ?>!</h2>

        <ul>
            <li><a href="<?= base_url('students') ?>">View Students</a></li>
            <li><a href="<?= base_url('logout') ?>">Logout</a></li>
        </ul>
    </div>
</body>
</html>
