<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yooga life | Life style Login Se connecter</title>
    <link rel="icon" href="img/new-yooga-up.1.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,100;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"><!-- scroll button top -->
    <link rel="stylesheet" href="js/main.js">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="img/new-yooga.1.png" alt="logo-brand"></a>
                </div>
                    <div class="nav-ul-li">
                        <nav>
                            <ul id="MenuItems">
                                <li><a href="index.html">Acceuil</a></li>
                                <li><a href="practice.html">Practice</a></li>
                                <li><a href="teachers.html">A propos</a></li>                                
                                <li><a href="signup.php">Sign up</a></li>
                                <li><a href="login.php">Log in</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- <a href=""><img  class="cart" src="img/cart.png"  alt="cart"></a> -->
                <img src="img/menu.png" class="menu-icon" onclick="menutoggle()" alt="menu">
                <!-- <i class="fab fa-opencart"></i> -->
            </div>
    </div>
  <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="img/yoga-day.jpg"  alt="yoga-day">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Se connecter</span>
                            <span onclick="register()">S'enregistrer</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm">
                            <input type="text" placeholder="Nom utilisateur">
                            <input type="text" placeholder="Mot de passe">
                            <button type="submit" class="btn">Se connecter</button>
                            <a href="">Mot de passe oublié</a>
                        </form>

                        <form id="RegForm">
                            <input type="text" placeholder="Nom utilisateur">
                            <input type="Adresse mail" placeholder="Adresse mail">
                            <input type="text" placeholder="Mot de passe">
                            <button type="submit" class="btn">S'enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
  <!-- -->
   
<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <h5>CERTIFICATIONS</h5>
            <div class="footer-col-1">
                <a href="https://www.yogaalliance.org/Credentialing/For_Teachers/E-RYT_500" target="_blank" ><img class="logo-eryt" src="img/eryt-logo-removebg-preview.png" alt="certification.1"></a>                    
            </div>
            <div class="footer-col-1">
                <a href="https://www.yogaalliance.org/Benefits_for_YACEPs" target="_blank"><img class="logo-yacep" src="img/yacep-logo-removebg-preview.png" alt="certification.2"></a>                    
            </div>
            <div class="footer-col-2">
                <h5>NAVIGATION</h5>
                <ul>
                    <li>Nos Programmes</li>
                    <a href="teachers.html"><li>Nos Instructeurs</li></a>
                    <li>About the Team</li>
                </ul>
            </div>
            <div class="footer-col-3">
                <h5>INSPIRATION</h5>
                <ul>
                    <li>Stress Relief Yoga</li>
                    <li>Yoga for Neck Pain</li>
                    <li>Yoga for Mobility</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h5>SUIVEZ-NOUS</h5>
                <ul>
                    <li><i class="fab fa-facebook"></i></li>
                    <li><i class="fab fa-pinterest"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-1">
        <p><i class="fa fa-copyright"></i>Copyright 2021 - SamDevlive.com</p>
    </div>
</footer>
<!-- FOOTER END -->
  
    <div class="scroll-btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <script src="js/main.js"></script>
</body>

</html>
