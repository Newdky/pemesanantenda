<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login Pengguna</h1>

    <?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message'); ?>
        </div>
        <?php endif; ?>

        <form action="/login"  method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="Kata_sandi">Kata sandi:</label>
            <input type="password" name="kata_sandi" required>

            <button type="submit">Login</button>
        </form>
</body>
</html>