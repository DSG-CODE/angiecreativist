<?php
    include "configuracion.php"
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['HEAD_LANGUAJE'];?>">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167525340-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-167525340-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”robots” content="Index, Follow">
    <meta name="description" content="<?php echo $lang['HEAD_META_DESCRIPTION'];?>" />
    <title><?php echo $lang['HEAD_TITLE_WEB'];?></title>
    <link rel="shortcut icon" href="img/favicon-Angie.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <!--     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="200" style="box-sizing: border-box;"
    ondragstart="return false" onselectstart="return false" oncontextmenu="return false" class="hiddent">

    <!-- Preload -->
    <div class="container-cargador" style="display: flex; flex-direction: column;" id="preload">
        <!-- <img src="img/icono-preload.svg" alt=""> -->
        <div class="lds-roller">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <h4 class="text-white pt-4 text-center d-none d-md-block"><?php echo $lang['COMING_SOON_PART1'];?> <?php echo $lang['COMING_SOON_PART2'];?></h4>
        <h4 class="text-white pt-4 text-center d-block d-md-none"><?php echo $lang['COMING_SOON_PART2'];?> <br /> <?php echo $lang['COMING_SOON_PART2'];?></h4>
    </div>
    <!-- Termina Preload -->

    <!--Menú Móvil-->
    <div id="sidebar" class="d-block d-md-none d-flex justify-content-center">
        <div class="toggle-btn shadow">
            <span><img src="img/menu.svg" width="30" alt=""></span>
        </div>
        <ul>
            <li>
                <a href="#">
                    <img src="img/logo-angie-movil.svg" alt="Logo Fazt" class="logo">
                </a>
            </li>
            <li> <a href="#inicio" class="pl-5"><?php echo $lang['MENU_HOME'];?></a></li>
            <li><a href="#about" class="pl-5"><?php echo $lang['MENU_ABOUT'];?></a></li>
            <li> <a href="#work" class="pl-5"><?php echo $lang['MENU_WORK'];?></a></li>
            <li> <a href="#lessons" class="pl-5"><?php echo $lang['MENU_LESSONS'];?></a></li>
            <li> <a href="#clientes" class="pl-5"><?php echo $lang['MENU_CLIENTS'];?></a></li>
            <li> <a href="#blog" class="pl-5"><?php echo $lang['MENU_BLOG'];?></a></li>
            <li><a href="#contacto" class="pl-5"><?php echo $lang['MENU_CONTACT'];?></a></li>
            <li class="d-flex flex-row" style="margin-left: 35px;">
                <a class="nav-link pr-1" href="index.php?lang=es"><?php echo $lang['MENU_LANGUAJE_ES'];?></a> <span class="nav-link px-0">/</span><a
                   href="index.php?lang=en" class="nav-link pl-1"><?php echo $lang['MENU_LANGUAJE_EN'];?></a>
            </li>
        </ul>
    </div>

    <!--Sección Header-->
    <header class="container-fluid bg-white header-inicio">
        <div class="row justify-content-center align-content-center">
            <video loop muted autoplay class="d-none d-lg-block">
                <source src="video/site/Site-Intro.mp4" type="video/mp4">
            </video>
            <video loop muted autoplay class="d-block d-lg-none">
                <source src="video/movil/Movil-Intro.mp4" type="video/mp4">
            </video>
            <div class="col-12 text-center contenedor-scroll">
                <a data-scroll href="#inicio">
                    <img src="img/Scroll.svg" width="40px" class="scroll" alt="">
                </a>
            </div>
        </div>
    </header>
    <!--Sección Header-->

    
    <!--Menú desktop-->
    <nav class="navbar navbar-dark shadow sticky-top d-none d-md-block">
        <div class="container d-flex justify-content-center flex-column">
            <a href="#" class="navbar-brand"><img src="img/logo-angie.svg" alt=""></a>
            <div class="row">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a data-scroll class="nav-link " href="#inicio"> <?php echo $lang['MENU_HOME'];?></a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link active" href="#about"><?php echo $lang['MENU_ABOUT'];?></a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#work"><?php echo $lang['MENU_WORK'];?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lessons"><?php echo $lang['MENU_LESSONS'];?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#clientes"><?php echo $lang['MENU_CLIENTS'];?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog"><?php echo $lang['MENU_BLOG'];?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto"><?php echo $lang['MENU_CONTACT'];?></a>
                    </li>
                    <li class="nav-item d-flex flex-row">
                        <a href="index.php?lang=es" class="nav-link pr-1"><?php echo $lang['MENU_LANGUAJE_ES'];?></a> <span class="nav-link px-0">/</span><a class="nav-link pl-1"
                            href="index.php?lang=en"><?php echo $lang['MENU_LANGUAJE_EN'];?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Termina Menú desktop-->