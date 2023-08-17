<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Team Srijan</title>
    <link rel="shortcut icon" href="../assets/public/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/public/css/admin-style.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="sticky-top">
        <nav class="navbar bg-dark">
            <div class="container-xl">
                <a href="/admin" class="navbar-brand"><img src="../assets/public/branding/team-srijan-logo-white.webp" alt="Team Srijan" height=32></a>
            </div>
        </nav>
    </header>
    <main class="flex-grow-1 bg-body-tertiary">
        <article class="container-xxl py-3">
            <section class="my-5">
                <form action="" method="post" class="mx-auto" style="max-width: 300px">
                    <div class="text-center mb-4"><img src="../assets/public/branding/team-srijan-black-logo.webp" alt="" class="w-25"></div>
                    <div>
                        <label for="#">Institute email</label>
                        <input type="email" name="email" class="form-control" spellcheck="false" autocomplete="off">
                    </div>
                    <div class="my-3">
                        <label for="#">Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="off">
                    </div>
                    <div><button type="submit" class="btn btn-primary w-100">Login</button></div>
                </form>
            </section>
        </article>
    </main>
    <footer class="navbar bg-body-secondary">
        <div class="container-xl flex-column flex-sm-row">
            <nav class="nav">
                <a href="#" class="nav-link link-body-emphasis"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="nav-link link-body-emphasis"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="nav-link link-body-emphasis"><i class="fa-brands fa-linkedin"></i></a>
            </nav>
            <small class="text-body-emphasis">© 2023 Team Srijan</small>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>