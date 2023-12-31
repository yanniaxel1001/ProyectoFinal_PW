<?php

    require("conexion_db.php");
    if (!empty($_SESSION["id"])) {
        header("Location: user_logeado.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleHub</title>

    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" type="image/jpg" href="imagenes/logo_web_page.png"/>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>
    <header class="container">
        <nav class="nav-wrapper transparent z-depth-0">
            <a href="#" class="left brand-logo purple-text text-darken-3">StyleHub</a>
            <ul class="right">
                <li>
                    <a href="#" class="black-text">Home</a>
                </li>
                <li>
                    <a href="#" class="black-text">About</a>
                </li>
                <li>
                    <a href="#" class="black-text">Places</a>
                </li>
                <li>
                    <a href="#" class="black-text">Experiences</a>
                </li>
                <li>
                    <a href="registrarse_page.php" class="black-text">Registrate</a>
                </li>
                <li>
                    <a href="login_page.php" class="black-text">Inicia Sesion</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="section hero">
            <div class="row valign-wrapper">
                <div class="col s12 l3">
                    <h1>Este a la moda</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia 
                        voluptas sint sapiente numquam a neque illo doloribus cumque corrupti maxime?</p>
                        <a href="#" class="btn-large">Aprende mas</a>
                </div>
                <div class="col s12 l9 header-images">
                    <img src="imagenes/sec_hero_a.jpg" alt="">
                    <img src="imagenes/sec_hero_b.jpg" alt="">
                    <img src="imagenes/sec_hero_c.jpg" alt="">
                    <img src="imagenes/sec_hero_d.jpg" alt="">
                </div>
            </div>
        </section>
        
    </main>
    <div class="section hero deep-purple lighten-5">
        <div class="row valign-wrapper">
            <div class="col s12 l6">
                <h2>Estar a la moda nunca fue tan facil</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quasi eius sint 
                    dignissimos deleniti officiis laborum labore suscipit optio hic a placeat magnam
                     nesciunt quibusdam, commodi iure quidem pariatur error inventore sequi accusamus 
                     minima. Atque molestias rem neque at cumque?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quasi eius sint 
                dignissimos deleniti officiis laborum labore suscipit optio hic a placeat magnam
                    nesciunt quibusdam, commodi iure quidem pariatur error inventore sequi accusamus 
                    minima. Atque molestias rem neque at cumque?</p>
                <a href="#" class="btn-large">Aprende mas</a>
            </div>
            <div class="col s12 l6">
                <div class="row">
                    <div class="col m6">
                        <div class="card center-align indigo lighten-4">
                            <div class="card-content white-text">
                                <i class="material-icons large">accessibility</i>
                                <span class="card-title">Lorem</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic 
                                    molestias delectus dolore fugiat exercitationem dignissimos 
                                    impedit magni ut officiis ratione!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col m6">
                        <div class="card center-align indigo lighten-4">
                            <div class="card-content white-text">
                                <i class="material-icons large">account_balance_wallet</i>
                                <span class="card-title">Lorem</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic 
                                    molestias delectus dolore fugiat exercitationem dignissimos 
                                    impedit magni ut officiis ratione!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col m6">
                        <div class="card center-align indigo lighten-4">
                            <div class="card-content white-text">
                                <i class="material-icons large">add_shopping_cart</i>
                                <span class="card-title">Lorem</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic 
                                    molestias delectus dolore fugiat exercitationem dignissimos 
                                    impedit magni ut officiis ratione!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col m6">
                        <div class="card center-align indigo lighten-4">
                            <div class="card-content white-text">
                                <i class="material-icons large">airport_shuttle</i>
                                <span class="card-title">Lorem</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic 
                                    molestias delectus dolore fugiat exercitationem dignissimos 
                                    impedit magni ut officiis ratione!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section  class="section featured-images">
        <div class="center-align">
            <h2>Featured Images</h2>
        </div>
        <div class="row">
            <div class="col s12 m6 l8">
                <img src="imagenes/img_about5.jpg" alt="" class="materialboxed" height="500">
            </div>
            <div class="col s12 m6 l4">
                <img src="imagenes/img_about1.jpg" alt="" class="materialboxed" height="500">
            </div>
            <div class="col s12 m12 l5">
                <img src="imagenes/img_about3.jpg" alt="" class="materialboxed" height="500">
            </div>
            <div class="col m6 l3">
                <img src="imagenes/img_about4.jpg" alt="" class="materialboxed" height="500">
            </div>
            <div class="col m6 l4">
                <img src="imagenes/img_about2.jpg" alt="" class="materialboxed" height="500">
            </div>
        </div>
    </section>

    <section class="section identity">
        <div class="center-align">
            <h3>Identidad</h3>
        </div>
        <div class="row center-align">
            <div class="col s12 m4">
                <div class="section">
                    <i class="fas fa-cogs fa 3x deep-purple"></i>
                    <h4>Mision</h4>
                    <i class="material-icons large">assistant_photo</i>
                    <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Error, accusantium, ab atque odio quae animi ad eaque exercitationem itaque
                         dolore voluptate consectetur! Id veniam omnis repellat perspiciatis, pariatur odit quasi.</p> 
                </div>
                <div class="divider"></div>
            </div>
        <div class="row center-align">
            <div class="col s12 m4">
                <div class="section">
                    <i class="fas fa-cogs fa 3x deep-purple"></i>
                    <h4>Vision</h4>
                    <i class="material-icons large">remove_red_eye</i>
                    <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, accusantium, ab atque odio quae animi ad eaque exercitationem itaque dolore voluptate consectetur! Id veniam omnis repellat perspiciatis, pariatur odit quasi.</p> 
                </div>
                <div class="divider"></div>
            </div>
        <div class="row center-align">
            <div class="col s12 m4">
                <div class="section">
                    <i class="fas fa-cogs fa 3x deep-purple"></i>
                    <h4>Valores</h4>
                    <i class="material-icons large">check_circle</i>
                    <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, accusantium, ab atque odio quae animi ad eaque exercitationem itaque dolore voluptate consectetur! Id veniam omnis repellat perspiciatis, pariatur odit quasi.</p> 
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </section>

    <footer class="page-footer deep-purple darken-1">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">StyleHub</h5>
                    <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius culpa iure asperiores maxime facilis itaque corporis ipsam fuga, rem, ab voluptas similique alias amet explicabo eaque? Facere beatae inventore in!</p>
                </div>
                <div class="col l4 offset-12 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Places</a></li>
                        <li><a href="#">Experiences</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Yanni Axel Galvan Alatorre
                <a href="#" class="grey-text text-lighten-4 right">Regresar al inicio</a>
            </div>
        </div>
    </footer>
</body>
</html>