<!DOCTYPE html>
<html lang="en">

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
    <meta name="description" content="Hi! I am angie creativist, designer & creative dedicated to activism, my purpose is to
        communicate to raise awareness on cultural, social and environmental issues." />
    <title>angie creativist - Designing Awareness</title>
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
        <h4 class="text-white pt-4 text-center d-none d-md-block">New updates coming soon...</h4>
        <h4 class="text-white pt-4 text-center d-block d-md-none">New updates <br /> coming soon...</h4>
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
            <li> <a href="#inicio" class="pl-5">Home</a></li>
            <li><a href="#about" class="pl-5">About</a></li>
            <li> <a href="#work" class="pl-5">Work</a></li>
            <li> <a href="#lessons" class="pl-5">Lessons</a></li>
            <li> <a href="#clientes" class="pl-5">Clients</a></li>
            <li> <a href="#blog" class="pl-5">Blog</a></li>
            <li><a href="#contacto" class="pl-5">Contact</a></li>
            <li class="d-flex flex-row" style="margin-left: 35px;">
                <a class="nav-link pr-1" href="index-es.html">ES</a> <span class="nav-link px-0">/</span><a
                    class="nav-link pl-1">EN</a>
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
                        <a data-scroll class="nav-link " href="#inicio"> Home 123</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link active" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#work">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lessons">Lessons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#clientes">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contact</a>
                    </li>
                    <li class="nav-item d-flex flex-row">
                        <a class="nav-link pr-1" href="index-es.html">ES</a> <span class="nav-link px-0">/</span><a
                            class="nav-link pl-1">EN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Termina Menú desktop-->