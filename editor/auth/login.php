<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Editor - Sekilasrv</title>
    <link rel="stylesheet" href="../../tampilan/editor/login.css">
</head>

<body>
    <main class="login-container">
        <div class="login-card">
            <h1 class="title">sekilasrv</h1>
            <p class="subtitle">Login sebagai Editor</p>

            <form action="proses_login.php" method="POST">
                <?php if (isset($_GET['error'])): ?>
                    <p class="error-message">PIN salah! Silakan coba lagi.</p>
                <?php endif; ?>

                <div class="form-group">
                    <input
                        type="password"
                        id="pin"
                        name="pin"
                        placeholder="Masukkan PIN Editor"
                        inputmode="numeric"
                        pattern="[0-9]+"
                        autocomplete="current-password"
                        required>
                </div>

                <button type="submit" class="login-btn">Masuk</button>
            </form>

            <a href="../../beranda/beranda.php" class="back-link">
                Kembali ke Beranda
            </a>
        </div>
    </main>
</body>

</html>