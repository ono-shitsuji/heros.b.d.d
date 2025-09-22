<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryujin no ken wo kurae!</title>
     <link rel="stylesheet" href="/public/css/style.css">    
</head>
<body>
    <h1>竜が我が敵を喰らう</h1> 
    <div class="navy" id="navy">

                <ul class="navy">
                    <li><a href="{{ url('/notices') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navy">
                    <!-- Authentication Links -->

                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               <span class="garnet"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                             <li><a href="welcome.php"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                </ul>
                </div>
        </div>

    
        <img src="public/img/sunset.jpg" alt="sunset mountains">
            <form action="welcome.php" method="POST">
                    E-mail: <input type="text" name="email"><br>
                    password: <input type="password" name="last-name"><br>
    <input type="submit">

    <!--end of the line-->


        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Heros Projet</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
          if(isset($_SESSION['user'])){
            if($_SESSION['user']['role'] === "admin"){
              ?>
                <li class="nav-item">
                  <a class="nav-link" href="/addheros">Ajouter un hero</a>
                </li>
              <?php
            }
        ?>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Se déconnecter</a>
          </li>
        <?php
          } else {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="/register">S'inscrire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Se connecter</a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
    
</form>

