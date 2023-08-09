<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Our Hearts Don't Beat. They Rev...</title>
    <link rel="shortcut icon" href="../assets/public/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root{
            font-size: 14px;
        }
        body{
            font-family: Signika, sans-serif;
        }
        h1,h2,h3,h4,h5,h6{
            font-weight: bold;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="sticky-top">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container-xl">
            <a href="/admin" class="navbar-brand"><img src="../assets/public/branding/team-srijan-logo-white.webp" alt="Team Srijan" height=32></a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#header-collapse"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                <div id="header-collapse" class="collapse navbar-collapse flex-grow-0">
                    <ul class="navbar-nav">
                    <li class="nav-item"><a href="/admin" class="btn btn-dark"><i class="fa-solid fa-house me-2"></i><span>Home</span></a></li>
                        <li class="nav-item"><a href="history" class="btn btn-dark"><i class="fa-solid fa-clock-rotate-left me-2"></i><span>Activity</span></a></li>
                        <li class="nav-item dropdown">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-regular fa-circle-user me-2"></i><span>Hailee Steinfeld</span></button>
                            <ul class="dropdown-menu">
                                <li><a href="profile" class="dropdown-item"><i class="fa-solid fa-user fa-sm me-2"></i><span>Profile</span></a></li>
                                <li><a href="settings" class="dropdown-item"><i class="fa-solid fa-gear me-2"></i><span>Settings</span></a></li>
                                <li><a href="logout" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i><span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="flex-grow-1 bg-body-tertiary">
        <article class="container-xxl py-3">
            <h1>Welcome!</h1>
            <div class="accordion">
                <section class="accordion-item">
                    <button type="button" class="accordion-button fw-bold fs-5" data-bs-toggle="collapse" data-bs-target="#admin-nav">Admin</button>
                    <div id="admin-nav" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-4 col-xl-3"><a href="leader" class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fa-solid fa-people-group fa-lg me-2"></i><span>Manage Leaders</span></a></div>
                                <div class="col-md-6 col-lg-4 col-xl-3"><a href="site-settings" class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fa-solid fa-gear fa-lg me-2"></i><span>Site settings</span></a></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="accordion-item">
                    <button type="button" class="accordion-button fw-bold fs-5" data-bs-toggle="collapse" data-bs-target="#leader-nav">Leader</button>
                    <div id="leader-nav" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-4 col-xl-3"><a href="leader" class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fa-solid fa-warehouse fa-lg me-2"></i><span>Garage</span></a></div>
                                <div class="col-md-6 col-lg-4 col-xl-3"><a href="site-settings" class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fa-solid fa-people-group fa-lg me-2"></i><span>Manage Crews</span></a></div>
                                <div class="col-md-6 col-lg-4 col-xl-3"><a href="leader" class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fa-solid fa-hand-holding-dollar fa-lg me-2"></i><span>Crowdfunding</span></a></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="accordion-item">
                    <button type="button" class="accordion-button fw-bold fs-5" data-bs-toggle="collapse" data-bs-target="#member-nav">Member</button>
                    <div id="member-nav" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-4 col-xl-3"><a href="leader" class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fa-solid fa-house fa-lg me-2"></i><span>Home page</span></a></div>
                                <div class="col-md-6 col-lg-4 col-xl-3"><a href="site-settings" class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fa-regular fa-newspaper fa-lg me-2"></i><span>Updates</span></a></div>
                                <div class="col-md-6 col-lg-4 col-xl-3"><a href="leader" class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fa-solid fa-indian-rupee-sign fa-lg me-2"></i><span>Sponsors</span></a></div>
                                <div class="col-md-6 col-lg-4 col-xl-3"><a href="leader" class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fa-solid fa-trophy fa-lg me-2"></i><span>Competitions</span></a></div>
                                <div class="col-md-6 col-lg-4 col-xl-3"><a href="site-settings" class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fa-solid fa-flag-checkered fa-lg me-2"></i><span>Milestones</span></a></div>
                                <div class="col-md-6 col-lg-4 col-xl-3"><a href="leader" class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fa-solid fa-list-ul fa-lg me-2"></i><span>Overview</span></a></div>
                            </div>
                        </div>
                    </div>
                </section>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>