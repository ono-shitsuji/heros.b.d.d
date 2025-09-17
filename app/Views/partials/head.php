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
    
</form>

