<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updates | Team Srijan</title>
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
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container-xl">
                <a href="/admin" class="navbar-brand"><img src="../assets/public/branding/team-srijan-logo-white.webp" alt="Team Srijan" height=32></a>
                <button type="button" class="btn btn-dark rounded-pill"  data-bs-toggle="offcanvas" data-bs-target="#aside-right"><i class="fa-regular fa-circle-user fa-lg me-2"></i><i class="fa-solid fa-ellipsis fa-lg"></i></button>
            </div>
        </nav>
    </header>
    <main class="flex-grow-1 bg-body-tertiary">
        <article class="container-xxl py-3">
            <h1>Updates</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>Sl</th>
                        <th></th>
                    </tr>
                </table>
            </div>
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
    <!-- Offcanvas -->
    <aside id="aside-right" class="offcanvas offcanvas-end">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title">Menu</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="list-group list-group-flush">
                <a href="settings" class="list-group-item list-group-item-action">Settings</a>
                <a href="index" class="list-group-item list-group-item-action">Index</a>
                <a href="garage" class="list-group-item list-group-item-action">Garage</a>
                <a href="competitions" class="list-group-item list-group-item-action">Competitions</a>
                <a href="updates" class="list-group-item list-group-item-action active">Updates</a>
                <a href="sponsors" class="list-group-item list-group-item-action">Partners</a>
                <a href="milestones" class="list-group-item list-group-item-action">Milestones</a>
                <a href="overview" class="list-group-item list-group-item-action">Overview</a>
                <a href="crews" class="list-group-item list-group-item-action">Crews</a>
                <a href="links" class="list-group-item list-group-item-action">Links</a>
                <a href="logout" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>
    </aside>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>