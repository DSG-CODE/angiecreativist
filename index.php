
<?php include ('header.php');?>

    <!--Main Content-->
    <main class="container-fluid p-0">

        <!--Sección About (Video FullScreen - Inicio)-->
        <div class="container-fluid px-0 inicio d-flex justify-content-center" id="inicio">
            <video loop muted autoplay class="bg-video d-none d-lg-block">
                <source src="video/site/Site-About.mp4" type="video/mp4">
            </video>
            <video loop muted autoplay class="bg-video d-block d-lg-none" poster="video/movil/Mobil-About-02_Cover.jpg">
                <source src="video/movil/Mobil-About-02.mp4" type="video/mp4">
            </video>
            <div class="inicio-Contenido1 d-flex  flex-column d-block d-lg-none">
                <div class="row justify-content-center">
                    <img src="img/We-are-losing.svg" alt="" data-aos="fade-up" data-aos-duration="1000">
                </div>
            </div>

            <div class="inicio-Contenido2 d-flex  flex-column d-block d-lg-none">
                <div class="row justify-content-center">
                    <img src="img/Lets-turn-off.svg" alt="" data-aos="fade-down" data-aos-duration="1000">
                </div>
            </div>

        </div>
        <!--Termina Sección About (Video FullScreen - Inicio)-->

        <!--Sección ABOUT-->
        <section class="about d-flex align-items-center " id="about">
            <div class="container py-5 my-5 my-lg-0 py-lg-0">
                <div class="d-flex flex-lg-row flex-column-reverse">
                    <div class="col-lg-6 d-flex flex-column justify-content-center wow fadeIn">
                        <h2 class="pt-lg-0 pt-5">
                        <?php echo $lang['ABOUT_SECTION_MORE_INFO']; ?>
                        </h2>
                        <div class="pt-lg-0 pt-4">
                            <a href="pages/about.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="text-white more-info-black"><?php echo $lang['ABOUT_SECTION_MORE_INFO_BTN']; ?><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h1 class="text-uppercase wow fadeInUp">
                            <?php echo $lang['ABOUT_SECTION_CREATIVIST'];?>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!--Termina Sección ABOUT-->

        <!--Sección Portfolio-->
        <section class="container-fluid py-5" id="work">

            <h3 class="text-center py-5 mt-lg-5 wow fadeInUp"><?php echo $lang['WORK_CATEGORY_TITLE'];?></h3>

            <div class="portafolio-wrapper">
                <!-- Selecciones Categoría -->
                <div
                    class="category_list container d-flex flex-md-row flex-column justify-content-center flex-wrap pb-5">
                    <a href="#work" class="category_item" category="all"><?php echo $lang['WORK_CATEGORY_ALL'];?></a>
                    <a href="#work" class="category_item" category="branding"><?php echo $lang['WORK_CATEGORY_BRANDING'];?></a>
                    <a href="#work" class="category_item" category="poster"><?php echo $lang['WORK_CATEGORY_POSTER'];?></a>
                    <a href="#work" class="category_item" category="social-campaing"><?php echo $lang['WORK_CATEGORY_SOCIAL_CAMPAIGN'];?></a>
                    <a href="#work" class="category_item" category="illustration"><?php echo $lang['WORK_CATEGORY_ILLUSTRATION'];?></a>
                    <a href="#work" class="category_item" category="infographic"><?php echo $lang['WORK_CATEGORY_INFOGRAPHIC'];?></a>
                    <a href="#work" class="category_item" category="social-media-design"><?php echo $lang['WORK_CATEGORY_SOCIAL_MEDIA'];?></a>
                </div>
                <!-- Termina Selecciones Categoría -->

                <!-- Portafolio -->
                <section class="portafolio-list">

                    <a href="pages/taxes-airbnb.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="infographic">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Impuestos-taxes.jpg" class="w-100" alt="Taxes - Airbnb ">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_TAXES'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/rfc-airbnb.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item"  category="social-campaing">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Sube-tu-RFC.jpg" class="w-100" alt="Sube tu RFC - Airbnb ">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_SUBE_TU_RFC'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/viaja-seguro-airbnb.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="infographic">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Viaja-Seguro.jpg" class="w-100" alt="Viaja Seguro - Airbnb ">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_VIAJA_SEGURO'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/imagine.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Imagine.jpg" class="w-100" alt="Imagine">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_IMAGINE'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/casa-viva.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="branding">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Casa-Viva.jpg" class="w-100" alt="Casa Viva">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_CASA_VIVA'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/contigo-siempre.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Contigo-siempre.jpg" class="w-100" alt="Poster for “Soldados de Amor” - International Day for the prevention
                                of Childhood Cancer">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_CONTIGO_SIEMPRE'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="portafolio-item" category="social-campaing">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Declaracion-anual.jpg" class="w-100"
                                alt="Declaración anual - Airbnb ">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_DECLARACION_ANUAL'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/toc-toc.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="branding">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Toc-Toc.jpg" class="w-100" alt="toc toc">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_TOC_TOC'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/faith-and-hope.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Faith-and-Hope.jpg" class="w-100" alt="Faith and Hope">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_FAITH_AND_HOPE'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/reuse-save-lives.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Reuse-Save-Lives.jpg" class="w-100" alt="Reuse Save Lives">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_REUSE_SAVE_LIVES'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/world-oceans-day-2020.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="social-campaing">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/World-Oceans-Day.jpg" class="w-100"
                                alt="World Oceans Day">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_WORLD_OCEANS_DAY'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/world-bee-day.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="social-media-design">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Dia-Mundial-de-las-Abejas.jpg" class="w-100" alt="Bee Day">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_WORLD_BEE_DAY'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/climate-change-mata.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Climate-Change-mata-kills.jpg" class="w-100
                                alt="Climate Change mata (kills)">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_CLIMATE_CHANGE'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/lets-turnIt-off.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="bg-video-work">
                            <video loop muted autoplay class="w-100 d-none d-lg-block"
                                poster="video/site/Site-Lets-turn-off-Climate-Change_Cover.jpg">
                                <source src="video/site/Site-Lets-turn-off-Climate-Change.mp4">
                            </video>
                            <video loop muted autoplay class="w-100 d-block d-lg-none"
                                poster="video/movil/Movil-Work-Lets-turn-off-Climate-Change_Cover.jpg">
                                <source src="video/movil/Movil-Work-Lets-turn-off-Climate-Change.mp4">
                            </video>
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_LETS_TURN_OFF'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/reborn.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Renacer-Reborn.jpg" class="w-100" alt="REBORN">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_REBORN'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/more02.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="illustration">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/More-02-Less-C02.jpg" class="w-100"
                                alt="More 02, Less C02">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_MORE02'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/earth-growing.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Earth-Growing.jpg" class="w-100" alt="Earth Growing">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_EARTH_GROWING'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/together-in-the-distance.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Together-in-the-distance.jpg" class="w-100
                                alt="Together in the distance">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_TOGETHER_IN_THE_DISTANCE'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/we-offer-our-heart.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/We-offer-our-heart.jpg" class="w-100"
                                alt="We offer our heart">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_WE_OFFER_OUR_HEART'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/lets-turnIt-off.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="illustration">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Lets-turn-it-off.jpg" class="w-100
                                alt="Lets turn it off">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_LETS_TURN_IT_OFF'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/sun-of-my-soul.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="illustration">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Sun-of-my-soul.jpg" class="w-100" alt="Sun of my soul">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_SUN_OF_MY_SOUL'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/nuestro-valor-cuenta.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="illustration">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Nuestro-valor-SI-se-CUENTA.jpg" class="w-100"
                                alt="Our Value it Counts">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_OUR_VALUE_IT_COUNTS'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/if-we-stop-eating.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/If-we-stop-eating.jpg" class="w-100"
                                alt="Our Value it Counts">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_IF_WE_STOP_EATING'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/juntos-en-la-distancia.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="social-media-design">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Juntos-en-la-distancia.jpg" class="w-100"
                                alt="Juntos en la distancia">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_JUNTOS_EN_LA_DISTANCIA'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/future-living-space.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Future-living-space.jpg" class="w-100"
                                alt="Juntos en la distancia">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_FUTURE_LIVING_SPACE'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/credo-day.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="social-campaing">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Credo-Day.jpg" class="w-100" alt="Credo Day">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_CREDO_DAY'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/tu-que-sentirias.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="illustration">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Tu-que-sentirias.jpg" class="w-100"
                                alt="¿Tú qué sentirías?">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_TU_QUE_SENTIRIAS'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/humination.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio/modalHumination/Humination-GIF.gif" class="w-100" alt="Humination">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_HUMINATION'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/listen-the-ocean.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="social-media-design">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Escuchemos-al-oceano.jpg" class="w-100"
                                alt="Let´s Listen to the Ocean">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_LETS_LISTEN_TO_THE_OCEAN'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/the-best-progress.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/The-best-progress.jpg" class="w-100" alt="The best progress">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_THE_BEST_PROGRESS'];?></h2>
                            </div>
                        </div>
                    </a>

                    <a href="pages/reunion-anual-cemefi.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>" class="portafolio-item" category="branding">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Reunion-Anual-Cemefi.jpg" class="w-100"
                                alt="Reunión Anual Cemefi">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3"><?php echo $lang['WORK_PORTFOLIO_FRONT_CEMEFI'];?></h2>
                            </div>
                        </div>
                    </a>

                </section>
                <!-- Termina Portafolio -->
            </div>

        </section>
        <!--Termina Sección Portfolio-->

        <!--Sección Lessons-->
        <section
            class="sec-lessons container-fluid d-flex justify-content-center flex-column align-items-lg-center text-white"
            id="lessons">
            <div class="row">
                <h5 class="pl-2 pl-lg-0 wow zoomIn"><?php echo $lang['LESSONS_TITLE01'];?></h5>
            </div>
            <div class="row">
                <h3 class="pl-2 pl-lg-0 wow zoomIn" style="color: #3D3D3D;"><?php echo $lang['LESSONS_TITLE02'];?></h3>
            </div>
        </section>
        <!--Termina sección Lessons-->

        <!--Hack para que el id Clientes aparezca y no lo cubra el menu-->
        <section id="clientes" class="pt-lg-5 mt-lg-4">
            <div style="height: 50px;">
            </div>
        </section>

        <!-- Sección Clientes -->
        <section>
            <h3 class="text-center py-5"><?php echo $lang['CLIENTS_TITLE'];?></h3>
            <div class="section-clientes">
                <img src="img/clientes/airbnb.png" class="wow animate__delay-2s slideInUp" alt="Airbnb">
                <img src="img/clientes/cvium.png" class="wow animate__delay-2s slideInUp" alt="CVium">
                <img src="img/clientes/casa-viva.png" class="wow animate__delay-2s slideInUp" alt="Casa Viva">
                <img src="img/clientes/sea-shepherd.png" class="wow animate__delay-2s slideInUp" alt="Sea Shepherd">
                <img src="img/clientes/dogwood-consulting.png" class="wow animate__delay-2s slideInUp"
                    alt=" Dogwood Consulting">
                <img src="img/clientes/the-regenerates.png" class="wow animate__delay-2s slideInUp"
                    alt="The Regenerates">
            </div>
        </section>
        <!-- Termina Sección Clientes -->

        <!--Hack para que el id blog aparezca y no lo cubra el menu-->
        <section id="blog">
            <div class="py-lg-4 py-0 d-none d-lg-block">
            </div>
        </section>

        <!-- Sección Blog -->
        <section class="container text-center mt-5 blog-container d-flex align-items-center justify-content-center">
            <div class="row flex-column">
                <div class="col-12">
                    <h3><?php echo $lang['BLOG_TITLE'];?></h3>
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-lg-4 wow animate__delay-2s fadeIn" >
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <img class="card-img-top" src="img/blog/BLOG-PW1.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $lang['BLOG_ARTICLE_TITLE01'];?></h5>
                                            <p class="card-text"><?php echo $lang['BLOG_ARTICLE_CONTENT01'];?></p>
                                            <a
                                                href="https://www.angiecreativist.com/blog/que-tiene-que-ver-la-deforestacion-del-amazonas-con-comer-carne/"><?php echo $lang['BLOG_ARTICLE_BTN01'];?><i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mt-lg-5 wow animate__delay-3s fadeIn">
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <img class="card-img-top" src="img/blog/Cubrebocas-la-mejor-opcion.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $lang['BLOG_ARTICLE_TITLE02'];?></h5>
                                            <p class="card-text"><?php echo $lang['BLOG_ARTICLE_CONTENT02'];?></p>
                                            <a href="https://www.angiecreativist.com/blog/cubrebocas-medico-o-de-tela/"><?php echo $lang['BLOG_ARTICLE_BTN02'];?> <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 wow animate__delay-2s fadeIn">
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <img class="card-img-top" src="img/blog/2021.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $lang['BLOG_ARTICLE_TITLE03'];?></h5>
                                            <p class="card-text"><?php echo $lang['BLOG_ARTICLE_CONTENT03'];?></p>
                                            <a
                                                href="https://www.angiecreativist.com/blog/ahora-estamos-mas-unidos-que-nunca/"><?php echo $lang['BLOG_ARTICLE_BTN03'];?> <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Termina Sección Blog -->

        <!-- Sección de Contacto -->
        <section class="container-fluid contact text-center" id="contacto">
            <div class="container py-5">
                <h3 class="text-white my-4"><?php echo $lang['CONTACT_TITLE'];?></h3>
                <h4 class="mt-lg-5"><?php echo $lang['CONTACT_SUBTITLE_01'];?></h4>
                <a href="#" class="btn my-md-3 mb-5" data-toggle="modal" data-target="#formContactMe"><?php echo $lang['CONTACT_BTN_01'];?></a>

                <h4 class="mt-lg-5"><?php echo $lang['CONTACT_SUBTITLE_02'];?></h4>
                <a href="#" class="btn my-md-3 mb-5" data-toggle="modal" data-target="#formWork"><?php echo $lang['CONTACT_BTN_02'];?></a>

                <h4 class="mt-lg-5"><?php echo $lang['CONTACT_TITLE_EMAIL'];?></h4>
                <p class="text-white text-uppercase"><?php echo $lang['CONTACT_CONTENT_EMAIL'];?></p>

                <h4 class="mt-lg-5"><?php echo $lang['CONTACT_TITLE_PHONE'];?></h4>
                <p class="text-white"><?php echo $lang['CONTACT_CONTENT_PHONE'];?></p>
            </div>
        </section>
        <!-- Termina Sección de Contacto -->


        <!-- ////////// Modals Formulario //////////-->
        <!-- Modal HIRE ME! -->
        <div class="modal fade" id="formContactMe" data-backdrop="static" data-keyboard="false" tabindex="-1"
            role="dialog" aria-labelledby="formContactMe" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><?php echo $lang['CONTACT_TITLE_FORM_01'];?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><img src="img/Cerrar-blank.svg" style="width:20px;" alt=""></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!---Formulario-->
                        <div class="contenedor-formulario">
                            <form action="" class="formulario" name="formulario-contacto" method="POST">
                                <div class="row">
                                    <div class="input-group mb-4">
                                        <input type="text" id="nombre" name="nombre">
                                        <label for="nombre" class="label"><?php echo $lang['CONTACT_TITLE_FORM_INPUTTEXT_NAME01'];?></label>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="email" id="mail" name="mail">
                                        <label for="email" class="label"><?php echo $lang['CONTACT_TITLE_FORM_INPUTTEXT_EMAIL01'];?></label>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="text" name="mensaje" id="mensaje" cols="4" rows="6">
                                        <label for="textarea" class="label"><?php echo $lang['CONTACT_TITLE_FORM_INPUTTEXT_MESSAGE01'];?></label>
                                    </div>

                                    <div class="input-group checkbox mb-4">
                                        <input type="checkbox" name="terminos" id="terminos" value="true">
                                        <label for="terminos"><?php echo $lang['CONTACT_TITLE_FORM_INPUTTEXT_CHECKBOX01'];?></label>
                                    </div>
                                    <div class="container d-flex justify-content-lg-end  justify-content-center">
                                        <input class="mb-3" type="submit" id="btn-submit" value="<?php echo $lang['CONTACT_TITLE_FORM_INPUTTEXT_BTN01'];?>">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--Termina Formulario-->
                    </div>
                </div>
            </div>
        </div>
        <!--Termina HIRE ME!-->


        <!-- Modal HIRE ME! -->
        <div class="modal fade" id="formWork" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
            aria-labelledby="formWork" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><?php echo $lang['CONTACT_TITLE_FORM_02'];?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><img src="img/Cerrar-blank.svg" style="width:20px;" alt=""></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!---Formulario-->
                        <div class="contenedor-formulario">
                            <form action="" class="formulario" name="formulario-contacto" method="POST">
                                <div class="row">
                                    <div class="input-group mb-4">
                                        <input type="text" id="nombre" name="nombre">
                                        <label for="nombre" class="label"><?php echo $lang['CONTACT_TITLE_FORM_INPUTTEXT_NAME02'];?></label>
                                    </div>

                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group mb-4">
                                                    <input type="email" id="mail" name="mail">
                                                    <label for="email" class="label"><?php echo $lang['CONTACT_TITLE_FORM_INPUTTEXT_EMAIL02'];?></label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="input-group mb-4">
                                                    <input type="email" id="mail" name="mail">
                                                    <label for="email" class="label"><?php echo $lang['CONTACT_TITLE_FORM_INPUTTEXT_COMPANY'];?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="input-group mb-4">
                                        <input type="text" name="mensaje" id="mensaje" cols="4" rows="6">
                                        <label for="textarea" class="label"><?php echo $lang['CONTACT_TITLE_FORM_INPUTTEXT_MESSAGE02'];?></label>
                                    </div>

                                    <div class="input-group checkbox mb-4">
                                        <input type="checkbox" name="terminos" id="terminos" value="true">
                                        <label for="terminos"><?php echo $lang['CONTACT_TITLE_FORM_INPUTTEXT_CHECKBOX02'];?></label>
                                    </div>
                                    <div class="container d-flex justify-content-lg-end  justify-content-center">
                                        <input class="mb-3" type="submit" id="btn-submit" value="<?php echo $lang['CONTACT_TITLE_FORM_INPUTTEXT_BTN02'];?>">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--Termina Formulario-->
                    </div>
                </div>
            </div>
        </div>
        <!--Termina HIRE ME!-->

        <!-- ////////// Termina Modals Formulario //////////-->

    </main>
    <!--Main Content-->
    <!--Termina Estructura General de Sitio-->

<?php include ('footer.php');?>