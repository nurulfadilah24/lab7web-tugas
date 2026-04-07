<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>
<body>
<div id="login-wrapper">
    <h1>Login</h1>

    <?php if(isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form action="" method="post">
        <p>
            <label>Email</label><br>
            <input type="email" name="email" value="<?= set_value('email'); ?>" required>
        </p>
        <p>
            <label>Password</label><br>
            <input type="password" name="password" required>
        </p>
        <p>
            <button type="submit">Login</button>
        </p>
    </form>
</div>
</body>
</html>