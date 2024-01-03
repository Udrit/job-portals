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
<title>HOME</title>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
</head>
<body>
<style>
    body {
        background-image: url('{{ asset('Freepik.jpeg')}}');
        background-size: cover;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .header {
        background-color: #2d3748;
        padding: 20px;
        color: white;
    }

    .navbar {
        display: flex;
        justify-content: space-around;
        background-color: #1a202c;
        padding: 15px;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        padding: 8px 16px;
        transition: 0.3s;
    }

    .navbar a:hover {
        background-color: #111827;
        color: white;
    }

    .container {
        margin: 15px;
    }

    .footer {
        background-color: #2d3748;
        padding: 10px;
        text-align: center;
        color: white;
    }

    .animation-container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 80vh;
    }

    .animation-text {
        font-size: 3em;
        font-weight: bold;
        color: #fff;
        opacity: 0; /* Set initial opacity to 0 for the animation */
        animation: text-focus-in 5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
    }

    @keyframes text-focus-in {
        0% {
            transform: scale(0.8);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .text-blur-out {
        -webkit-animation: text-blur-out 7s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        animation: text-blur-out 7s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
    }

    @-webkit-keyframes text-blur-out {
        to {
            opacity: 0;
            filter: blur(8px);
        }
    }

    @keyframes text-blur-out {
        to {
            opacity: 0;
            filter: blur(8px);
        }
    }

    .NAME {
        color: #00ff00; /* Replace #00ff00 with the desired neon color code */
        text-shadow: 0 0 10px #00ff00; /* Add a neon glow effect with a shadow */
    }

</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container">
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
              <a class="nav-link" href="#" style="color:gray;">About us</a>
          </li>
        </ul>

        <!-- Left links -->

          <div class="top-nav-items-center">
              <a href="{{route('login.form')}}"><button class="btn btn-link px-3 me-2">Login</button></a>
              <a href="{{route('register.form')}}"><button class="btn btn-link px-3 me-2">Sign up as Job Seeker</button></a>
              <a href="{{route('employer.form')}}"><button class="btn btn-link px-3 me-2">Sign up as Employer</button></a>
          </div>
      </div>
    </div>
  </nav>
  @yield('content')
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
<div class="animation-container">
    <div class="animation-text">
        JOBPORTAL
    </div>
    <body>
    <div class="NAME text-blur-out">
       UDRIT DHAKAL
    </div>
</div>
</body>
</html>
