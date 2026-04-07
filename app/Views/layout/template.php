<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website CI4</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
        }

        header {
            background: #2c3e50;
            padding: 15px;
            color: white;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            color: #f1c40f;
        }

        .container {
            padding: 30px;
        }

        h1 {
            color: #2c3e50;
        }

        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

</head>
<body>

<header>
    <h2>Website Sederhana CI4</h2>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/terms">Terms</a>
    </nav>
</header>

<div class="container">
    <?= $this->renderSection('content'); ?>
</div>

<footer>
    <p>© 2026 - Praktikum Web Programming</p>
</footer>

<link rel="stylesheet" href="/css/style.css">

</body>
</html>