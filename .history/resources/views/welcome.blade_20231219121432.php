<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        import { Collapse, Ripple, initMDB } from "mdb-ui-kit";
        initMDB({ Collapse, Ripple });
    </script>
    <title>User Registration</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="https://mdbgo.com/">
            <img
                src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
                height="16"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: -1px;"
            />
        </a>

        <!-- Toggle button -->
        <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
            </ul>
            <!-- Left links -->

            <!-- Right-aligned buttons -->
            <div class="ms-auto d-flex align-items-center">
                <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
                    Login
                </button>
                <button data-mdb-ripple-init type="button" class="btn btn-primary me-3">
                    Sign up for free
                </button>
                <a
                    data-mdb-ripple-init
                    class="btn btn-dark px-3"
                    href="https://github.com/mdbootstrap/mdb-ui-kit"
                    role="button"
                ><i class="fab fa-github"></i
                ></a>
            </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->

</body>
<script>
    // Initialization for ES Users
</script>
</html>
