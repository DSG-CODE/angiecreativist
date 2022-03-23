
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
                            <a href="#" class="text-white more-info-black" data-toggle="modal"
                                data-target="#modalAbout"><?php echo $lang['ABOUT_SECTION_MORE_INFO_BTN']; ?><i class="fas fa-chevron-right"></i></a>
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

            <h3 class="text-center py-5 mt-lg-5 wow fadeInUp">WORK</h3>

            <div class="portafolio-wrapper">
                <!-- Selecciones Categoría -->
                <div
                    class="category_list container d-flex flex-md-row flex-column justify-content-center flex-wrap pb-5">
                    <a href="#work" class="category_item" category="all">ALL</a>
                    <a href="#work" class="category_item" category="branding">BRANDING</a>
                    <a href="#work" class="category_item" category="poster">POSTER</a>
                    <a href="#work" class="category_item" category="social-campaing">SOCIAL CAMPAIGN</a>
                    <a href="#work" class="category_item" category="illustration">ILLUSTRATION</a>
                    <a href="#work" class="category_item" category="infographic">INFOGRAPHIC</a>
                    <a href="#work" class="category_item" category="social-media-design">SOCIAL MEDIA</a>
                </div>
                <!-- Termina Selecciones Categoría -->

                <!-- Portafolio -->
                <section class="portafolio-list">

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalTaxes"
                        category="infographic">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Impuestos-taxes.jpg" class="w-100" alt="Taxes - Airbnb ">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Taxes</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalRFC"
                        category="social-campaing">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Sube-tu-RFC.jpg" class="w-100" alt="Sube tu RFC - Airbnb ">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Sube tu RFC</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalViajaSeguro"
                        category="infographic">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Viaja-Seguro.jpg" class="w-100" alt="Viaja Seguro - Airbnb ">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Viaja Seguro</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalImagine"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Imagine.jpg" class="w-100" alt="Imagine">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Imagine</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalCasaViva"
                        category="branding">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Casa-Viva.jpg" class="img-fluid" alt="Casa Viva">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Casa Viva</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalContigoSiempre"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Contigo-siempre.jpg" class="img-fluid" alt="Poster for “Soldados de Amor” - International Day for the prevention
                                of Childhood Cancer">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Contigo siempre</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalDeclaracionAnual"
                        category="social-campaing">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Declaracion-anual.jpg" class="w-100"
                                alt="Declaración anual - Airbnb ">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Declaración Anual</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalTocToc"
                        category="branding">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Toc-Toc.jpg" class="w-100" alt="toc toc">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">toc toc</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalFaithAndHope"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Faith-and-Hope.jpg" class="img-fluid" alt="Faith and Hope">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Faith and Hope</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalReuse"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Reuse-Save-Lives.jpg" class="w-100" alt="Reuse Save Lives">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Reuse Save Lives</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalWorldOceansDay"
                        category="social-campaing">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/World-Oceans-Day.jpg" class="img-fluid"
                                alt="World Oceans Day">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">World Oceans Day</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal"
                        data-target="#modalDiaMundialdelasAbejas" category="social-media-design">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Dia-Mundial-de-las-Abejas.jpg" class="w-100" alt="Bee Day">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">World <br>Bee Day</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalClimateChangeMata"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Climate-Change-mata-kills.jpg" class="img-fluid"
                                alt="Climate Change mata (kills)">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Climate Change mata (kills)</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalLetsTurn"
                        category="poster">
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
                                <h2 class="p-3">Let's turn off Climate Change</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalReborn"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Renacer-Reborn.jpg" class="w-100" alt="REBORN">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Reborn</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalMore02"
                        category="illustration">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/More-02-Less-C02.jpg" class="img-fluid"
                                alt="More 02, Less C02">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">More 02, <br />Less C02</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalEarthGrowing"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Earth-Growing.jpg" class="img-fluid" alt="Earth Growing">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Earth Growing</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalTogetherInDistance"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Together-in-the-distance.jpg" class="img-fluid"
                                alt="Together in the distance">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Together in the distance</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalWeOfferOurHeart"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/We-offer-our-heart.jpg" class="img-fluid"
                                alt="We offer our heart">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">We offer <br />our heart</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalLetsTurnItOff"
                        category="illustration">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Lets-turn-it-off.jpg" class="img-fluid"
                                alt="Lets turn it off">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Let’s turn <br />it off</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalSunOfmySoul"
                        category="illustration">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Sun-of-my-soul.jpg" class="img-fluid" alt="Sun of my soul">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Sun of <br />my soul</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalNuestroValorCuenta"
                        category="illustration">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Nuestro-valor-SI-se-CUENTA.jpg" class="w-100"
                                alt="Our Value it Counts">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Our Value IT COUNTS</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalIfWeStopEating"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/If-we-stop-eating.jpg" class="w-100"
                                alt="Our Value it Counts">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">If we stop eating </h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalJuntosDistancia"
                        category="social-media-design">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Juntos-en-la-distancia.jpg" class="w-100"
                                alt="Juntos en la distancia">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Juntos en la distancia</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalFutureLivingSpace"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Future-living-space.jpg" class="w-100"
                                alt="Juntos en la distancia">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Future living space</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalCredoDay"
                        category="social-campaing">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Credo-Day.jpg" class="w-100" alt="Credo Day">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Credo Day</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalTuquesentirias"
                        category="illustration">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Tu-que-sentirias.jpg" class="w-100"
                                alt="¿Tú qué sentirías?">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">¿Tú qué sentirías?</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalHumination"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio/modalHumination/Humination-GIF.gif" class="w-100" alt="Humination">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Humination</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalEscuchemosAlOceano"
                        category="social-media-design">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Escuchemos-al-oceano.jpg" class="img-fluid"
                                alt="Let´s Listen to the Ocean">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Let´s Listen to the Ocean</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalThebestProgress"
                        category="poster">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/The-best-progress.jpg" class="w-100" alt="The best progress">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">The best progress</h2>
                            </div>
                        </div>
                    </div>

                    <div class="portafolio-item" data-toggle="modal" data-target="#modalReunionCemefi"
                        category="branding">
                        <div class="image-work">
                            <img src="img/Portafolio-Front/Reunion-Anual-Cemefi.jpg" class="w-100"
                                alt="Reunión Anual Cemefi">
                            <div class="text-work d-flex justify-content-center align-items-center">
                                <h2 class="p-3">Reunión Anual Cemefi</h2>
                            </div>
                        </div>
                    </div>

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
                <h5 class="pl-2 pl-lg-0 wow zoomIn">Creativity Lessons</h5>
            </div>
            <div class="row">
                <h3 class="pl-2 pl-lg-0 wow zoomIn" style="color: #3D3D3D;">coming soon...</h3>
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
            <h3 class="text-center py-5">CLIENTS</h3>
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
                    <h3>Blog</h3>
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-lg-4 wow animate__delay-2s fadeIn" >
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <img class="card-img-top" src="img/blog/BLOG-PW1.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">DEFORESTATION OF THE AMAZON</h5>
                                            <p class="card-text">A year ago, all over the world, we witnessed the great
                                                fires that they destroyed and continue to do so,one of the most
                                                important lungs of the planet...</p>
                                            <a
                                                href="https://www.angiecreativist.com/blog/que-tiene-que-ver-la-deforestacion-del-amazonas-con-comer-carne/">More
                                                info <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mt-lg-5 wow animate__delay-3s fadeIn">
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <img class="card-img-top" src="img/blog/Cubrebocas-la-mejor-opcion.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">MEDICAL OR FABRIC <br> COVER?</h5>
                                            <p class="card-text">What is the best option for us and the planet? And the
                                                cloth does protect? What if I don't use an N95? If you have doubts about
                                                what is the best, I invite you to read this ...
                                            </p>
                                            <a href="https://www.angiecreativist.com/blog/cubrebocas-medico-o-de-tela/">More
                                                info <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 wow animate__delay-2s fadeIn">
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <img class="card-img-top" src="img/blog/2021.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">NOW WE ARE MORE UNITED THAN EVER</h5>
                                            <p class="card-text">After what we live in 2020,
                                                this year, we are more empathetic with
                                                each other, we are more aware of our
                                                planet and we are more united than ever.
                                            </p>
                                            <a
                                                href="https://www.angiecreativist.com/blog/ahora-estamos-mas-unidos-que-nunca/">More
                                                info <i class="fas fa-chevron-right"></i></a>
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
                <h3 class="text-white my-4">thanks for getting here!</h3>
                <h4 class="mt-lg-5">YOU LIKE WHAT YOU SEE?</h4>
                <a href="#" class="btn my-md-3 mb-5" data-toggle="modal" data-target="#formContactMe">CONTACT ME!</a>

                <h4 class="mt-lg-5">YOU WANT WE WORK TOGETHER?</h4>
                <a href="#" class="btn my-md-3 mb-5" data-toggle="modal" data-target="#formWork">LET’S DO THIS!</a>

                <h4 class="mt-lg-5">EMAIL</h4>
                <p class="text-white text-uppercase">hello@angiecreativist.com</p>

                <h4 class="mt-lg-5">PHONE NUMBER</h4>
                <p class="text-white">+52(55)86161015</p>
            </div>
        </section>
        <!-- Termina Sección de Contacto -->

       

        <!-- Modal: About-->
        <div class="modal fade" id="modalAbout" tabindex="-1" role="dialog" aria-labelledby="modalAbout"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="img/ANGIE.jpg" class="w-100" alt="">
                                    <h1 class="m-lg-n3 m-n2 color-primary text-left"><?php echo $lang['ABOUT_MODAL_TITLE'];?></h1>
                                    <h3 class="pt-3"><?php echo $lang['ABOUT_MODAL_SUBTITLE01'];?>
                                    <ahref="https://www.climatedesigners.org/profiles/angie-irais-soto-tinoco"
                                            target="_blank"><?php echo $lang['ABOUT_MODAL_SUBTITLE02'];?></ahref=></h3>

                                    <h3 class="titleAbout-modal pt-4" style="font-size: 30px;"><?php echo $lang['ABOUT_MODAL_PUBLICATIONS'];?></h3>
                                    <h3 class="hover-primario" style="font-size: 20px;"><a
                                            href="https://www.climatedesigners.org/profiles/angie-irais-soto-tinoco"
                                            target="_blank" style="display: flex; align-items: center;"><i
                                                class="fas fa-chevron-right" style="font-size: 16px;"></i> <?php echo $lang['ABOUT_MODAL_LIST01'];?></a></h3>

                                    <h3 class="hover-primario" style="font-size: 20px;"><a
                                            href="http://www.posterposter.org/poster-monday-together-distance/"
                                            target="_blank" style="display: flex; align-items: center;"><i
                                                class="fas fa-chevron-right" style="font-size: 16px;"></i> <?php echo $lang['ABOUT_MODAL_LIST02'];?></a></h3>

                                    <h3 class="hover-primario" style="font-size: 20px;"><a
                                            href="https://www.instagram.com/p/CKPv3w7hCWO/" target="_blank"
                                            style="display: flex; align-items: center;"><i class="fas fa-chevron-right"
                                                style="font-size: 16px;"></i> <?php echo $lang['ABOUT_MODAL_LIST03'];?></a>
                                    </h3>

                                </div>

                                <div class="col-lg-6">
                                    <p class="color-primary mt-5 mt-lg-0">
                                        <?php echo $lang['ABOUT_MODAL_PARRAFO01'];?>
                                    </p>

                                    <?php echo $lang['ABOUT_MODAL_PARRAFO02'];?>

                                    <!-- Awards -->
                                    <h3 class="titleAbout-modal"><?php echo $lang['ABOUT_MODAL_TITLE_AWARDS'];?></h3>

                                    <h4 class="text-uppercase"><?php echo $lang['ABOUT_MODAL_AWARDS_ADISENIO_2020'];?></h4>
                                    <span class="color-primary text-uppercase"><?php echo $lang['ABOUT_MODAL_AWARDS_ADISENIO_2020_LIST01'];?></span><br>
                                    <span class="color-primary text-uppercase"><?php echo $lang['ABOUT_MODAL_AWARDS_ADISENIO_2020_LIST02'];?></span><br>
                                    <span class="color-primary text-uppercase"><?php echo $lang['ABOUT_MODAL_AWARDS_ADISENIO_2020_LIST03'];?></span><br>
                                    <span class="color-primary text-uppercase"><?php echo $lang['ABOUT_MODAL_AWARDS_ADISENIO_2020_LIST04'];?></span><br>
                                    <p class="color-primary text-uppercase"><?php echo $lang['ABOUT_MODAL_AWARDS_ADISENIO_2020_LIST05'];?></p>

                                    <h4><?php echo $lang['ABOUT_MODAL_AWARDS_ADISENIO_2018'];?></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_AWARDS_ADISENIO_2018_LIST01'];?></p>

                                    <h4><?php echo $lang['ABOUT_MODAL_AWARDS_ADISENIO_2017'];?></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_AWARDS_ADISENIO_2017_LIST01'];?></p>

                                    <h4 class="hover-primario"><a href="http://www.posterterritory.com/the-world-after-shortlist/"
                                            target="_blank"><i class="fas fa-chevron-right"></i> <?php echo $lang['ABOUT_MODAL_AWARDS_THE_WORLD_AFTER'];?></a></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_AWARDS_THE_WORLD_AFTER_LIST01'];?></p>

                                    <h4 class="hover-primario"><a href="https://www.instagram.com/flamanteslibro/"
                                            target="_blank"><i class="fas fa-chevron-right"></i> <?php echo $lang['ABOUT_MODAL_AWARDS_FLAMANTES_LIBRO_ESPANIA'];?></a></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_AWARDS_FLAMANTES_LIBRO_ESPANIA_LIST01'];?></p>

                                    <h4><?php echo $lang['ABOUT_MODAL_AWARDS_REINICIA_NUESTRO_MUNDO'];?></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_AWARDS_REINICIA_NUESTRO_MUNDO_LIST01'];?></p>

                                    <h4 class="hover-primario"><a href="http://www.comuniteca.org/libro_miradas_de_pandemia.pdf?fbclid=IwAR1o7BXAdQ4BBDKPfdAH1OUYufnmNR6-BuML1iGuSEdfIr31phajzqBfa4c"
                                            target="_blank"><i class="fas fa-chevron-right"></i> <?php echo $lang['ABOUT_MODAL_AWARDS_MIRADAS_DE_PANDEMIA'];?></a></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_AWARDS_MIRADAS_DE_PANDEMIA_LIST01'];?></p>


                                    <h4 class="hover-primario"><a href="https://bit.ly/2QqZHSO" target="_blank"><i class="fas fa-chevron-right"></i> <?php echo $lang['ABOUT_MODAL_AWARDS_2020_WORLD_BOOK'];?></a></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_AWARDS_2020_WORLD_BOOK_LIST01'];?></p>

                                    <h4 class="hover-primario"><a href="https://bit.ly/3sjIIiw" target="_blank"><i
                                                class="fas fa-chevron-right"></i> <?php echo $lang['ABOUT_MODAL_AWARDS_ZERO_DISCRIMINATION_DAY'];?></a></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_AWARDS_ZERO_DISCRIMINATION_DAY_LIST01'];?></p>


                                    <h4 class="hover-primario"><a href="https://bienalcartel.org/hacia-un-planeta-sincontaminacion/"
                                            target="_blank"><i class="fas fa-chevron-right"></i> <?php echo $lang['ABOUT_MODAL_AWARDS_BICM_INTERNATIONAL'];?></a></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_AWARDS_BICM_INTERNATIONAL_LIST01'];?></p>

                                    <h4 class="hover-primario"><a href="https://goweb.tv/cemefi/#banner"
                                            target="_blank"><i class="fas fa-chevron-right"></i><?php echo $lang['ABOUT_MODAL_AWARDS_CEMEFI'];?></a></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_AWARDS_CEMEFI_LIST01'];?></p>

                                    <!-- Recognitions -->
                                    <h3 class="titleAbout-modal"><?php echo $lang['ABOUT_MODAL_TITLE_RECOGNITIONS'];?></h3>

                                    <h4><?php echo $lang['ABOUT_MODAL_RECOGNITIONS_SOLDADOS_DE_AMOR'];?></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_RECOGNITIONS_SOLDADOS_DE_AMOR_LIST01'];?></p>

                                    <h4 class="hover-primario"><a href="http://www.rincrea.com/navidad.htm" target="_blank"><i class="fas fa-chevron-right"></i><?php echo $lang['ABOUT_MODAL_RECOGNITIONS_DIGNAVIDAD_2020'];?></a>
                                    </h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_RECOGNITIONS_DIGNAVIDAD_2020_LIST01'];?> </p>

                                    <h4><?php echo $lang['ABOUT_MODAL_RECOGNITIONS_RESOURCE_OCEAN'];?></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_RECOGNITIONS_RESOURCE_OCEAN_LIST01'];?></p>

                                    <h4 class="hover-primario"><a href="http://www.posterposter.org/poster-monday-together-distance/" target="_blank"><i class="fas fa-chevron-right"></i> <?php echo $lang['ABOUT_MODAL_RECOGNITIONS_POSTER_MONDAY'];?></a></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_RECOGNITIONS_POSTER_MONDAY_LIST01'];?></p>

                                    <h4><?php echo $lang['ABOUT_MODAL_RECOGNITIONS_REALITY_CLIMATE'];?></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_RECOGNITIONS_REALITY_CLIMATE_LIST01'];?></p>

                                    <h4><?php echo $lang['ABOUT_MODAL_RECOGNITIONS_KICK_OFF_JNJ'];?></h4>
                                    <p class="color-primary"><?php echo $lang['ABOUT_MODAL_RECOGNITIONS_KICK_OFF_JNJ_LIST01'];?></p>

                                    <div class="d-flex justify-content-center py-3 d-block d-lg-none">
                                        <div class="btnClose d-flex justify-content-center align-items-center"
                                            data-dismiss="modal"><i class="fas fa-times"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Termina Modal: About-->

        <!-- ////////// Modals Work //////////-->

        <!-- Modal: Taxes - Airbnb-->
        <div class="modal fade" id="modalTaxes" tabindex="-1" role="dialog" aria-labelledby="modalTaxes"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">TAXES</h2>
                                    <h3 class="d-block d-lg-none">Infographics for Airbnb Costa Rica</h3>
                                    <img src="img/Portafolio/modalTaxes/IMPUESTOS_TAXES-1.jpg" class="w-100 py-3"
                                        alt="Airbnb Costa Rica - Taxes -01">
                                    <img src="img/Portafolio/modalTaxes/IMPUESTOS_TAXES-2.jpg" class="w-100 py-3"
                                        alt="Airbnb Costa Rica - Taxes -02">
                                    <img src="img/Portafolio/modalTaxes/IMPUESTOS_TAXES-3.jpg" class="w-100 py-3"
                                        alt="Airbnb Costa Rica - Taxes -03">
                                    <img src="img/Portafolio/modalTaxes/IMPUESTOS_TAXES-4.jpg" class="w-100 py-3"
                                        alt="Airbnb Costa Rica - Taxes -04">
                                    <img src="img/Portafolio/modalTaxes/IMPUESTOS_TAXES-5.jpg" class="w-100 py-3"
                                        alt="Airbnb Costa Rica - Taxes -05">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">TAXES</h2>
                                        <h3 class="d-none d-lg-block">Infographics for Airbnb Costa Rica</h3>
                                        <p class="pt-5 pt-lg-0">What do Airbnb Mexico Hosts have in common with Costa
                                            Rica? That each one of them must be updated, with the new tax laws of your
                                            government, to avoid high withholdings. Following the success of the first
                                            campaign, carried out in Mexico, and with the aim of communicating in a
                                            friendly manner, a complicated issue for society, a series of Infographics
                                            were created to help people understand this issue more clearly.</p>
                                        <h4>CONTRIBUTOR:</h4>
                                        <p class="color-primary"> <a href="https://www.instagram.com/erick_pic/"
                                                target="_blank" style="font-family:Seravek;">/erick_pic </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Taxes - Airbnb-->

        <!-- Modal: Sube tu RFC - Airbnb-->
        <div class="modal fade" id="modalRFC" tabindex="-1" role="dialog" aria-labelledby="modalRFC" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">SUBE TU RFC </h2>
                                    <h3 class="d-block d-lg-none">Campaign for Airbnb Mexico hosts</h3>
                                    <img src="img/Portafolio/modalRFC/SUBE-TU-RFC-1.jpg" class="w-100 py-3"
                                        alt="Airbnb - Sube tu RFC - 1">
                                    <img src="img/Portafolio/modalRFC/SUBE-TU-RFC-2.jpg" class="w-100 py-3"
                                        alt="Airbnb - Sube tu RFC - 2">
                                    <img src="img/Portafolio/modalRFC/SUBE-TU-RFC-3.jpg" class="w-100 py-3"
                                        alt="Airbnb - Sube tu RFC - 3">
                                    <img src="img/Portafolio/modalRFC/SUBE-TU-RFC-4.jpg" class="w-100 py-3"
                                        alt="Airbnb - Sube tu RFC - 4">
                                    <img src="img/Portafolio/modalRFC/SUBE-TU-RFC-5.jpg" class="w-100 py-3"
                                        alt="Airbnb - Sube tu RFC - 5">
                                    <div class="embed-responsive embed-responsive-16by9 mt-4 d-block d-lg-none">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/DagHOxO2HUs"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block">SUBE TU RFC</h2>
                                        <h3 class="d-none d-lg-block">Campaign for Airbnb Mexico hosts</h3>
                                        <p class="pt-5 pt-lg-0">How do we communicate to Airbnb Mexico hosts that they
                                            have to upload their RFC to the platform, to avoid high retention? Under a
                                            friendly and fun concept, several characters were created, the protagonists:
                                            Fabiana & Randy, two astronauts who will accompany the hosts, in this new
                                            adventure through the Galaxy, heading to the Airbnb Moon to fulfill their
                                            mission: Avoid the High retentions and be at peace with Saturn and the Sun
                                            Ruler.</p>
                                        <h4>CONTRIBUTOR:</h4>
                                        <p class="color-primary"> <a href="https://www.instagram.com/erick_pic/"
                                                target="_blank" style="font-family:Seravek;">/erick_pic </a>
                                        </p>
                                        <h4>DIRECTION ANIMATION, SCRIPT & STORYBOARD:</h4>
                                        <p class="color-primary"> <a href="https://www.instagram.com/chavitapics/"
                                                target="_blank" style="font-family:Seravek;">/Gerardo Velazquez </a>
                                        </p>
                                        <h4>ANIMATION:</h4>
                                        <p class="color-primary"> <a href="https://www.instagram.com/angie.workshop/"
                                                target="_blank" style="font-family:Seravek;">/angie.workshop</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Video Sube tu RFC vista Desktop -->
                        <div class="container-fluid d-none d-lg-block pt-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="embed-responsive embed-responsive-16by9 mt-4">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/DagHOxO2HUs"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Termina Video Sube tu RFC vista Desktop -->
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Sube tu RFC - Airbnb-->

        <!-- Modal: Viaja Seguro - Airbnb-->
        <div class="modal fade" id="modalViajaSeguro" tabindex="-1" role="dialog" aria-labelledby="modalViajaSeguro"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">VIAJA SEGURO</h2>
                                    <h3 class="d-block d-lg-none">Infographic for Airbnb Mexico in alliance with CAPUFE
                                    </h3>
                                    <img src="img/Portafolio/modalViajaSeguro/VIAJA-SEGURO-01.jpg" class="w-100 py-3"
                                        alt="Viaja Seguro - 01">
                                    <img src="img/Portafolio/modalViajaSeguro/VIAJA-SEGURO-02.jpg" class="w-100 py-3"
                                        alt="Viaja Seguro - 02">
                                    <img src="img/Portafolio/modalViajaSeguro/VIAJA-SEGURO-03.jpg" class="w-100 py-3"
                                        alt="Viaja Seguro - 03">
                                    <img src="img/Portafolio/modalViajaSeguro/VIAJA-SEGURO-04.jpg" class="w-100 py-3"
                                        alt="Viaja Seguro - 04">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">VIAJA SEGURO</h2>
                                        <h3 class="d-none d-lg-block">Infographic for Airbnb Mexico in alliance with
                                            CAPUFE</h3>
                                        <p class="pt-5 pt-lg-0">"México por Tierra" is an initiative of Airbnb in
                                            alliance with WWF and FEMATUR, to promote the national tourist reactivation,
                                            in a safe, responsible and sustainable way. The objective was to redesign an
                                            infographic, in alliance with CAPUFE, so that people travel from safer ways
                                            and help local economies, promoting sustainable travel through 5 routes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Viaja Seguro - Airbnb-->

        <!-- Modal: More 02, Less C02-->
        <div class="modal fade" id="modalMore02" tabindex="-1" role="dialog" aria-labelledby="modalMore02"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">More 02, <br />Less C02</h2>
                                    <h3 class="d-block d-lg-none">“Fridays for future” Illustration Series</h3>
                                    <img src="img/Portafolio/modalMore02/More-02-Less-C02-1.jpg" class="w-100 py-3"
                                        alt="More 02, Less C02 - 01">
                                    <img src="img/Portafolio/modalMore02/More-02-Less-C02-2.jpg" class="w-100 py-3"
                                        alt="More 02, Less C02 - 02">
                                    <img src="img/Portafolio/modalMore02/More-02-Less-C02-3.jpg" class="w-100 py-3"
                                        alt="More 02, Less C02 - 03">
                                    <img src="img/Portafolio/modalMore02/More-02-Less-C02-4.jpg" class="w-100 py-3"
                                        alt="More 02, Less C02 - 04">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">More 02, <br />Less C02</h2>
                                        <h3 class="d-none d-lg-block">“Fridays for future” Illustration Series</h3>
                                        <p class="pt-5 pt-lg-0">Posters to demand a planet with cleaner air and less
                                            fossil fuels. We need to start looking at other clean and renewable
                                            transportation alternatives. Why not imagine ourselves in a green world,
                                            where millions of people do not have to die every year from polluted air.
                                            Every dream begins with one step. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: More 02, Less C02-->

        <!-- Modal: Let’s turn it off-->
        <div class="modal fade" id="modalLetsTurnItOff" tabindex="-1" role="dialog" aria-labelledby="modalLetsTurnItOff"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Let’s turn <br />it off</h2>
                                    <h3 class="d-block d-lg-none">Illustration for Sea Shepherd Mexico - Corals
                                        Campaignn</h3>
                                    <img src="img/Portafolio/modalLetsTurnItOff/Let_s-turn-it-off2.jpg"
                                        class="w-100 py-3" alt="Let’s turn it off - Corals Campaign">
                                </div>

                                <div class="col-lg-6 d-flex flex-column pt-3">
                                    <h2 class="color-primary d-none d-lg-block">Let’s turn <br />it off</h2>
                                    <h3 class="d-none d-lg-block">Illustration for Sea Shepherd Mexico - Corals Campaign
                                    </h3>
                                    <p class="py-5 py-lg-0">Corals are dying more and more from ocean warming, in this
                                        campaign for <b>Sea Shepherd Mexico</b>, it seeks to create awareness in people,
                                        about the impact that their direct and indirect activities have on the ocean, it
                                        is also aimed at companies, organizations and governments that continue to
                                        pollute the sea through fossil fuels and mismanagement of wastewater. <br><br>

                                        <h4>INSTAGRAM</h4>
                                        <p class="color-primary"> <a href="https://www.instagram.com/seashepherdmexico/"
                                                target="_blank" style="font-family:Seravek;">/seashepherdmexico</a>
                                        </p>

                                        <div class="d-flex justify-content-center py-3 d-block d-lg-none">
                                            <div class="btnClose d-flex justify-content-center align-items-center"
                                                data-dismiss="modal"><i class="fas fa-times"></i></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Let’s turn it off-->

        <!-- Modal: Together in the distance-->
        <div class="modal fade" id="modalTogetherInDistance" tabindex="-1" role="dialog"
            aria-labelledby="modalTogetherInDistance" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Together in the distance</h2>
                                    <h3 class="d-block d-lg-none">Poster for #STAYSANESTAYSAFE / What Design Can Do</h3>
                                    <img src="img/Portafolio/modalTogetherInDistance/Together-in-the-distance-1.jpg"
                                        class="w-100 py-3" alt="Together in the distance - #STAYSANESTAYSAFE-01">
                                    <img src="img/Portafolio/modalTogetherInDistance/Together-in-the-distance-2.jpg"
                                        class="w-100 py-3" alt="Together in the distance - #STAYSANESTAYSAFE-02">
                                    <img src="img/Portafolio/modalTogetherInDistance/Together-in-the-distance-3.jpg"
                                        class="w-100 py-3" alt="Together in the distance - #STAYSANESTAYSAFE-03">
                                    <img src="img/Portafolio/modalTogetherInDistance/Together-in-the-distance-4.jpg"
                                        class="w-100 py-3" alt="Together in the distance - #STAYSANESTAYSAFE-04">
                                    <img src="img/Portafolio/modalTogetherInDistance/Together-in-the-distance-5.jpg"
                                        class="w-100 py-3" alt="Together in the distance - #STAYSANESTAYSAFE-05">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">Together in the distance
                                        </h2>
                                        <h3 class="d-none d-lg-block">Poster for #STAYSANESTAYSAFE / What Design Can Do
                                        </h3>
                                        <p class="py-5 py-lg-0">Due to the events of the coronavirus, What design can Do
                                            created a global campaign with the aim of sharing positive messages so that
                                            anyone who wanted could download the posters for their home or hospital.
                                            This was my participating poster.<br><br>

                                            <span class="color-primary"
                                                style="font-family:Seravek-ExtraLightItalic;font-weight: 600;">SELECTED
                                                POSTER WORLDWIDE – POSTER MONDAY AUGUST 2020</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Together in the distance-->

        <!-- Modal: We offer our heart-->
        <div class="modal fade" id="modalWeOfferOurHeart" tabindex="-1" role="dialog"
            aria-labelledby="modalWeOfferOurHeart" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">We offer <br />our heart</h2>
                                    <h3 class="d-block d-lg-none">Poster for Zero Discrimination Day – International
                                        Poster Exhibition by UN AIDS</h3>
                                    <img src="img/Portafolio/modalWeOfferOurHeart/We-offer-our-heart-1.jpg"
                                        class="w-100 py-3"
                                        alt="We offer our heart - International Poster ExhIbition by UN AIDS-01">
                                    <img src="img/Portafolio/modalWeOfferOurHeart/We-offer-our-heart-2.jpg"
                                        class="w-100 py-3"
                                        alt="We offer our heart - International Poster ExhIbition by UN AIDS-02">
                                    <img src="img/Portafolio/modalWeOfferOurHeart/We-offer-our-heart-3.jpg"
                                        class="w-100 py-3"
                                        alt="We offer our heart - International Poster ExhIbition by UN AIDS-03">
                                    <img src="img/Portafolio/modalWeOfferOurHeart/We-offer-our-heart-4.jpg"
                                        class="w-100 pt-3"
                                        alt="We offer our heart - International Poster ExhIbition by UN AIDS-04">
                                    <img src="img/Portafolio/modalWeOfferOurHeart/We-offer-our-heart-5.jpg"
                                        class="w-100 pt-3"
                                        alt="We offer our heart - International Poster ExhIbition by UN AIDS-05">
                                    <img src="img/Portafolio/modalWeOfferOurHeart/We-offer-our-heart-6.jpg"
                                        class="w-100 pt-3"
                                        alt="We offer our heart - International Poster ExhIbition by UN AIDS-06">
                                    <img src="img/Portafolio/modalWeOfferOurHeart/We-offer-our-heart-7.jpg"
                                        class="w-100 pt-3"
                                        alt="We offer our heart - International Poster ExhIbition by UN AIDS-07">
                                    <img src="img/Portafolio/modalWeOfferOurHeart/We-offer-our-heart-8.jpg"
                                        class="w-100 pt-3"
                                        alt="We offer our heart - International Poster ExhIbition by UN AIDS-08">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block">We offer <br />our heart</h2>
                                        <h3 class="d-none d-lg-block">Poster for Zero Discrimination Day – International
                                            Poster Exhibition by UN AIDS</h3>
                                        <p>The concept for this year was discrimination against people infected by the
                                            coronavirus, the challenge, raising awareness on this issue.
                                            <br /><br />

                                            <span class="color-primary"
                                                style="font-family:Seravek-ExtraLightItalic;font-weight: 600;">FINALIST
                                                - PREMIO A! DISEÑO 2020 - CATEGORY: SOCIAL COVID POSTER</span><br />

                                            <span class="color-primary"
                                                style="font-family:Seravek-ExtraLightItalic;font-weight: 600;">FINALIST
                                                - TOP 100 BEST POSTERS WORLDWIDE BY UNAIDS</span><br />

                                            <span class="color-primary"
                                                style="font-family:Seravek-ExtraLightItalic;font-weight: 600;">SELECTED
                                                - TRANSLATED INTO DIFFERENT LANGUAGES BY THE UN OFFICES OF THE WORLD
                                            </span><br>

                                            <span class="color-primary"
                                                style="font-family:Seravek-ExtraLightItalic;font-weight: 600;">FINALIST
                                                TOP 100 – MIRADAS DE PANDEMIA “APORTES AL CARTELISMO SOCIAL EN TIEMPOS
                                                DE COVID 19” </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: We offer our heart-->

        <!-- Modal: Faith and Hope-->
        <div class="modal fade" id="modalFaithAndHope" tabindex="-1" role="dialog" aria-labelledby="modalFaithAndHope"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Faith and Hope</h2>
                                    <h3 class="d-block d-lg-none">Poster for “Breath & Symbiosis” International Poster
                                        Exhibition</h3>
                                    <img src="img/Portafolio/modalFaithAndHope/Faith-and-Hope-1.jpg" class="w-100 py-3"
                                        alt="Faith and Hope - International Poster Exhibition-01">
                                    <img src="img/Portafolio/modalFaithAndHope/Faith-and-Hope-2.jpg" class="w-100 py-3"
                                        alt="Faith and Hope - International Poster Exhibition-02">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">Faith and Hope</h2>
                                        <h3 class="d-none d-lg-block">Poster for “Breath & Symbiosis” International
                                            Poster Exhibition</h3>
                                        <p class="py-5 py-lg-0">Faith and Hope are two extraordinary forces that can
                                            help and save us in difficult times. For this exhibition on the fight
                                            against diseases, it is important to highlight the importance of human
                                            beings believing in something, being realistic that a cure is the solution,
                                            but knowing that these forces, are what will help us to pass the tests.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Faith and Hope-->

        <!-- Modal: Sun of my soul-->
        <div class="modal fade" id="modalSunOfmySoul" tabindex="-1" role="dialog" aria-labelledby="modalSunOfmySoul"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Sun of <br />my soul</h2>
                                    <h3 class="d-block d-lg-none">Illustration for Mother’s Day</h3>
                                    <img src="img/Portafolio/modalSunOfmySoul/Sun-of-my-soul-1.jpg" class="w-100 py-3"
                                        alt="Sun of my soul- Mother’s Day-01">
                                    <img src="img/Portafolio/modalSunOfmySoul/Sun-of-my-soul-3.jpg" class="w-100 py-3"
                                        alt="Sun of my soul- Mother’s Day-03">
                                    <img src="img/Portafolio/modalSunOfmySoul/Sun-of-my-soul-4.jpg" class="w-100 py-3"
                                        alt="Sun of my soul- Mother’s Day-04">
                                    <img src="img/Portafolio/modalSunOfmySoul/Sun-of-my-soul-5.jpg" class="w-100 py-3"
                                        alt="Sun of my soul- Mother’s Day-05">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">Sun of <br />my soul</h2>
                                        <h3 class="d-none d-lg-block">Illustration for Mother’s Day</h3>
                                        <p class="font-weight-bold p-primary">Personal poetry dedicated to my mother:
                                        </p>
                                        <p>Your strength and wisdom are like the sounds of the birds, at dawn, happy
                                            notes of sun for my heart, without hope. There is no greater beauty on earth
                                            than your laugh out loud. Blessed are you for filling my life with light,
                                            which without you would not live.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Sun of my soul-->

        <!-- Modal: Climate Change mata (kills)-->
        <div class="modal fade" id="modalClimateChangeMata" tabindex="-1" role="dialog"
            aria-labelledby="modalClimateChangeMata" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Climate Change <br />mata (kills)</h2>
                                    <h3 class="d-block d-lg-none">Poster for personal project about Climate Change</h3>
                                    <img src="img/Portafolio/modalClimateChangeMata/Climate-Change-mata-kills-1.jpg"
                                        class="w-100 py-3" alt="Climate Change mata (kills)-Climate Change-01">
                                    <img src="img/Portafolio/modalClimateChangeMata/Climate-Change-mata-kills-2.jpg"
                                        class="w-100 py-3" alt="Climate Change mata (kills)-Climate Change-02">
                                    <img src="img/Portafolio/modalClimateChangeMata/Climate-Change-mata-kills-3.jpg"
                                        class="w-100 py-3" alt="Climate Change mata (kills)-Climate Change-03">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">Climate Change <br />mata
                                            (kills)
                                        </h2>
                                        <h3 class="d-none d-lg-block">Poster for personal project about Climate Change
                                        </h3>
                                        <p class="py-5 py-lg-0">Climate change kills millions of people a year, due to
                                            droughts, floods, displacement of people, hurricanes, poor air quality,
                                            among other things. It is time to stop repeating what causes and better
                                            start creating changes. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Climate Change mata (kills)-->

        <!-- Modal: Humination-->
        <div class="modal fade" id="modalHumination" tabindex="-1" role="dialog" aria-labelledby="modalHumination"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Humination</h2>
                                    <h3 class="d-block d-lg-none">Poster for International Water’s Day</h3>
                                    <img src="img/Portafolio/modalHumination/Humination-1.jpg" class="w-100 py-3"
                                        alt="Humination-International Water’s Day-01">
                                    <img src="img/Portafolio/modalHumination/Humination-GIF.gif" class="w-100 py-3"
                                        alt="Humination-International Water’s Day-02">
                                    <img src="img/Portafolio/modalHumination/Humination-2.jpg" class="w-100 py-3"
                                        alt="Humination-International Water’s Day-03">
                                    <img src="img/Portafolio/modalHumination/Humination-3.jpg" class="w-100 py-3"
                                        alt="Humination-International Water’s Day-04">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">Humination</h2>
                                        <h3 class="d-none d-lg-block">Poster for International Water’s Day</h3>
                                        <p class="py-5 py-lg-0">With each passing year, the world's birth rate
                                            increases, creating a greater need for clean water, decreasing access to it
                                            for millions of people around the world. In statistical data, only 0.007% of
                                            the existing water on earth is drinkable, and that amount is reduced each
                                            year due to contamination. This means that we must TAKE CARE OF THE
                                            WATER.<br><br>
                                            <span class="color-primary"
                                                style="font-family: Seravek-ExtraLightItalic;font-weight: 600;">SELECTED
                                                ARTIST - FLAMANTES LIBRO #19 FROM SPAIN</span> <br><br>

                                            <h4>INSTAGRAM</h4>
                                            <p class="color-primary"> <a
                                                    href="https://www.instagram.com/flamanteslibro/" target="_blank"
                                                    style="font-family:Seravek;">/flamanteslibro</a></p>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Humination-->

        <!-- Modal: The best progress-->
        <div class="modal fade" id="modalThebestProgress" tabindex="-1" role="dialog"
            aria-labelledby="modalThebestProgress" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">The best progress</h2>
                                    <h3 class="d-block d-lg-none">Poster for UN ENVIORNMENT- Por un planeta sin
                                        contaminación</h3>
                                    <img src="img/Portafolio/modalThebestProgress/The-best-progress-1.jpg"
                                        class="w-100 py-3" alt="">
                                    <img src="img/Portafolio/modalThebestProgress/The-best-progress-2.jpg"
                                        class="w-100 py-3" alt="The best progress-01">
                                    <img src="img/Portafolio/modalThebestProgress/The-best-progress-3.jpg"
                                        class="w-100 py-3" alt="The best progress-02">
                                    <img src="img/Portafolio/modalThebestProgress/The-best-progress-4.jpg"
                                        class="w-100 py-3" alt="The best progress-03">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block">The best progress</h2>
                                        <h3 class="d-none d-lg-block">Poster for UN ENVIORNMENT- Por un planeta sin
                                            contaminación</h3>
                                        <p class="py-5 py-lg-0">Why does Progress have to be fought with clean energy?
                                            The invention of the automobile has been one of the most revolutionary, but
                                            also one of the most damaging and that has caused the most deaths worldwide.
                                            <br><br>

                                            In our country it is the cause of thousands of deaths a year, due to the
                                            fact that millions of people use it daily, generating pollutants that go
                                            directly into the air we breathe, creating diseases of all kinds.<br><br>

                                            Why better? Not replacing car tires with feet that will lead us to a life
                                            without contamination?<br><br>

                                            <span class="color-primary"
                                                style="font-family: Seravek-ExtraLightItalic;font-weight: 600;">FINALIST
                                                - BIENAL INTERNACIONAL DEL CARTEL EN MÉXICO</span><br>
                                            <span class="color-primary"
                                                style="font-family: Seravek-ExtraLightItalic;font-weight: 600;">FINALIST
                                                - PREMIO A! DISEÑO 2018 - CATEGORY: POSTER</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: The best progress-->

        <!-- Modal: Nuestro valor SI se CUENTA-->
        <div class="modal fade" id="modalNuestroValorCuenta" tabindex="-1" role="dialog"
            aria-labelledby="modalNuestroValorCuenta" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Our Value IT COUNTS</h2>
                                    <h3 class="d-block d-lg-none">Illustration for International Women’s Day</h3>
                                    <img src="img/Portafolio/modalNuestroValorCuenta/Nuestro-valor-SI-se-CUENTA-1.jpg"
                                        class="w-100 py-3"
                                        alt="Nuestro valor SI se CUENTA-International Women’s Day-01">
                                    <img src="img/Portafolio/modalNuestroValorCuenta/Nuestro-valor-SI-se-CUENTA-3.jpg"
                                        class="w-100 py-3"
                                        alt="Nuestro valor SI se CUENTA-International Women’s Day-03">
                                    <img src="img/Portafolio/modalNuestroValorCuenta/Nuestro-valor-SI-se-CUENTA-4.jpg"
                                        class="w-100 py-3"
                                        alt="Nuestro valor SI se CUENTA-International Women’s Day-04">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">Our Value IT COUNTS</h2>
                                        <h3 class="d-none d-lg-block">Illustration for International Women’s Day</h3>
                                        <p class="py-5 py-lg-0">In Mexico there are more than seven women dead every
                                            day. This is a call to observe, understand, empathize and know the value
                                            that women have in the life of all people and in life itself. Our Value IT
                                            COUNTS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Nuestro valor SI se CUENTA-->

        <!-- Modal: If we Stop Eating-->
        <div class="modal fade" id="modalIfWeStopEating" tabindex="-1" role="dialog"
            aria-labelledby="modalIfWeStopEating" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">IF WE STOP EATING </h2>
                                    <h3 class="d-block d-lg-none">Poster for “Escucha mi voz” International Poster
                                        Competition</h3>
                                    <img src="img/Portafolio/modalIfWeStopEating/IF-WE-STOP-EATING1-01.jpg"
                                        class="w-100 py-3" alt="IF WE STOP EATING - 01">
                                    <img src="img/Portafolio/modalIfWeStopEating/IF-WE-STOP-EATING1-02.jpg"
                                        class="w-100 py-3" alt="IF WE STOP EATING - 03">
                                    <img src="img/Portafolio/modalIfWeStopEating/IF-WE-STOP-EATING1-03.jpg"
                                        class="w-100 py-3" alt="IF WE STOP EATING - 04">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">IF WE STOP EATING </h2>
                                        <h3 class="d-none d-lg-block">Poster for “Escucha mi voz” International Poster
                                            Competition</h3>
                                        <p class="py-5 py-lg-0">Did you know that livestock is the main cause of 95% of
                                            the destruction of the Amazon? I made this poster after the great fires that
                                            occurred at the end of 2019 and they continue to do so in the Amazon since
                                            2008. Due to the number of people we are on the planet, it is no longer
                                            sustainable to continue eating meat and like agriculture , contributes to
                                            climate change, but livestock, by requiring huge spaces for grazing, causes
                                            more than 80,000 fires throughout the Amazon Rainforest to date. What if we
                                            stop eating what is killing us all?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: If we Stop Eating-->

        <!-- Modal: Lets turn off Climate Change-->
        <div class="modal fade" id="modalLetsTurn" tabindex="-1" role="dialog" aria-labelledby="modalLetsTurn"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Let's turn off Climate Change </h2>
                                    <h3 class="d-block d-lg-none">Poster for personal project about Australia Fires</h3>
                                    <img src="img/Portafolio/modalLetsTurn/Let_s-turn-off-Climate-Change-1.jpg"
                                        class="w-100 py-3" alt="Let's turn off Climate Change-01">
                                    <img src="img/Portafolio/modalLetsTurn/Let_s-turn-off-Climate-Change-2.jpg"
                                        class="w-100 py-3" alt="Let's turn off Climate Change-02">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block">Let's turn off Climate Change </h2>
                                        <h3 class="d-none d-lg-block">Poster for personal project about Australia Fires
                                        </h3>
                                        <p class="py-5 py-lg-0">Due to the events of January 2020 in Australia, where
                                            due to climate change, a series of unconventional and uncontrolled Fires
                                            were generated, which killed thousands of koalas and left thousands of other
                                            orphans the same. Do we have to reach these situations to understand the
                                            effects of climate change on humans and the most vulnerable species?
                                            <br /><br />
                                            Until the human being understands the value that millions of living beings
                                            have on this planet, whether we see them physically or not, we will continue
                                            to hurt our house that gave us life.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Lets turn off Climate Change-->

        <!-- Modal: Juntos en la distancia-->
        <div class="modal fade" id="modalJuntosDistancia" tabindex="-1" role="dialog"
            aria-labelledby="modalJuntosDistancia" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Juntos en la distancia</h2>
                                    <h3 class="d-block d-lg-none">Social Media Design for CVIUM - SOCIAL PLATFORM IN
                                        MEXICO</h3>
                                    <img src="img/Portafolio/modalJuntosDistancia/JUNTOS-EN-LA-DISTANCIA-01.jpg"
                                        class="w-100 py-3" alt="Juntos en la distancia-CVIUM-01">
                                    <img src="img/Portafolio/modalJuntosDistancia/JUNTOS-EN-LA-DISTANCIA-02.jpg"
                                        class="w-100 py-3" alt="Juntos en la distancia-CVIUM-02">
                                    <img src="img/Portafolio/modalJuntosDistancia/JUNTOS-EN-LA-DISTANCIA-03.jpg"
                                        class="w-100 py-3" alt="Juntos en la distancia-CVIUM-03">
                                    <img src="img/Portafolio/modalJuntosDistancia/JUNTOS-EN-LA-DISTANCIA-04.jpg"
                                        class="w-100 py-3" alt="Juntos en la distancia-CVIUM-04">
                                    <img src="img/Portafolio/modalJuntosDistancia/JUNTOS-EN-LA-DISTANCIA-05.jpg"
                                        class="w-100 py-3" alt="Juntos en la distancia-CVIUM-05">

                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary mt-0 d-none d-lg-block">Juntos en la distancia</h2>
                                        <h3 class="d-none d-lg-block">Social Media Design for CVIUM - SOCIAL PLATFORM IN
                                            MEXICO</h3>
                                        <p class="py-5 py-lg-0">With the aim of helping people emotionally and seeing
                                            the positive things about the coronavirus, this art was created to promote
                                            it on social media, along with a campaign that included daily positive
                                            notes, interesting facts, tips, as well as activities in which the user
                                            could participate and express their feelings.<br><br>

                                            <span class="color-primary"
                                                style="font-family: Seravek-ExtraLightItalic; font-weight: 600;">SELECTED
                                                ARTIST - FLAMANTES LIBRO #19 FROM SPAIN</span>

                                            <h4>INSTAGRAM</h4>
                                            <p class="color-primary"> <a href="https://www.instagram.com/c.vium/"
                                                    target="_blank" style="font-family:Seravek;">/c.vium</a></p>
                                            <h4>INSTAGRAM</h4>
                                            <p class="color-primary"> <a
                                                    href="https://www.instagram.com/flamanteslibro/" target="_blank"
                                                    style="font-family:Seravek;">/flamanteslibro</a></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Juntos en la distancia-->

        <!-- Modal: Future Living Space-->
        <div class="modal fade" id="modalFutureLivingSpace" tabindex="-1" role="dialog"
            aria-labelledby="modalFutureLivingSpace" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">FUTURE LIVING SPACE </h2>
                                    <h3 class="d-block d-lg-none">Poster for “2020 Resource Ocean Theme Poster
                                        Invitation Exhibition"</h3>
                                    <img src="img/Portafolio/modalFutureLivingSpace/FUTURE-LIVING-SPACE-01.jpg"
                                        class="w-100 py-3" alt="Future Living Space - 01">
                                    <img src="img/Portafolio/modalFutureLivingSpace/FUTURE-LIVING-SPACE-02.jpg"
                                        class="w-100 py-3" alt="Future Living Space - 02">
                                    <img src="img/Portafolio/modalFutureLivingSpace/FUTURE-LIVING-SPACE-03.jpg"
                                        class="w-100 py-3" alt="Future Living Space - 03">
                                    <img src="img/Portafolio/modalFutureLivingSpace/FUTURE-LIVING-SPACE-04.jpg"
                                        class="w-100 py-3" alt="Future Living Space - 04">
                                    <img src="img/Portafolio/modalFutureLivingSpace/FUTURE-LIVING-SPACE-05.jpg"
                                        class="w-100 py-3" alt="Future Living Space - 05">

                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary mt-0 d-none d-lg-block pt-lg-5">FUTURE LIVING SPACE
                                        </h2>
                                        <h3 class="d-none d-lg-block">Poster for “2020 Resource Ocean Theme Poster
                                            Invitation Exhibition"</h3>
                                        <p class="py-5 py-lg-0">With the aim of helping people emotionally and seeing
                                            the positive things about the coronavirus, this art was created to promote
                                            it on social media, along with a campaign that included daily positive
                                            notes, interesting facts, tips, as well as activities in which the user
                                            could participate and express their feelings.</p>

                                        <span class="color-primary"
                                            style="font-family: Seravek-ExtraLightItalic; font-weight: 600;">INTERNATIONAL
                                            INVITATION: RESOURCE OCEAN THEME POSTER EXHIBITION</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Future Living Space-->

        <!-- Modal: Imagine-->
        <div class="modal fade" id="modalImagine" tabindex="-1" role="dialog" aria-labelledby="modalImagine"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Imagine</h2>
                                    <h3 class="d-block d-lg-none">Poster for “Reading and a Better Life” - 2020 “World
                                        Book Day”
                                        International Public Welfare Poster Design Exhibition</h3>
                                    <img src="img/Portafolio/modalImagine/Imagine-1.jpg" class="w-100 py-3"
                                        alt="Imagine-World Book Day-2020-01">
                                    <img src="img/Portafolio/modalImagine/Imagine-2.jpg" class="w-100 py-3"
                                        alt="Imagine-World Book Day-2020-02">
                                    <img src="img/Portafolio/modalImagine/Imagine-3.jpg" class="w-100 py-3"
                                        alt="Imagine-World Book Day-2020-03">
                                    <img src="img/Portafolio/modalImagine/Imagine-4.jpg" class="w-100 py-3"
                                        alt="Imagine-World Book Day-2020-04">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block">Imagine</h2>
                                        <h3 class="d-none d-lg-block">Poster for “Reading and a Better Life” - 2020
                                            “World Book Day”
                                            International Public Welfare Poster Design Exhibition</h3>
                                        <p class="py-5 py-lg-0">When we read a book, our mind travels to another world,
                                            history, moment and time. For the concept of the poster, the key to being
                                            able to access the book is to be willing to use your imagination, through
                                            the alphabet soup game, you decipher the word and you can enter. Imagination
                                            is infinite and is the essence of reading, we are presented with letters,
                                            words, phrases and sentences that already tell a story, but in our mind we
                                            give it another value and give life to those thoughts using our imagination.
                                            <br /><br />

                                            <span class="color-primary pb-4 pb-md-0 text-uppercase"
                                                style="font-family: Seravek-ExtraLightItalic;font-weight: 600;">Finalist
                                                – Top 100 best posters in the world by Reader Publishing Group Co., Ltd.
                                                and the New Youth Designers Alliance.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Imagine-->

        <!-- Modal: Contigo Siempre-->
        <div class="modal fade" id="modalContigoSiempre" tabindex="-1" role="dialog"
            aria-labelledby="modalContigoSiempre" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">CONTIGO SIEMPRE </h2>
                                    <h3 class="d-block d-lg-none">Poster for “Soldados de Amor” - International Day for
                                        the prevention
                                        of Childhood Cancer</h3>
                                    <img src="img/Portafolio/modalContigoSiempre/CONTIGO-SIEMPRE_WITH-YOU-FOREVER-01.jpg"
                                        class="w-100 py-3" alt="Contigo Siempre - 01">
                                    <img src="img/Portafolio/modalContigoSiempre/CONTIGO-SIEMPRE_WITH-YOU-FOREVER-02.jpg"
                                        class="w-100 py-3" alt="Contigo Siempre - 02">
                                    <img src="img/Portafolio/modalContigoSiempre/CONTIGO-SIEMPRE_WITH-YOU-FOREVER-03.jpg"
                                        class="w-100 py-3" alt="Contigo Siempre - 03">
                                    <img src="img/Portafolio/modalContigoSiempre/CONTIGO-SIEMPRE_WITH-YOU-FOREVER-04.jpg"
                                        class="w-100 py-3" alt="Contigo Siempre - 04">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">CONTIGO SIEMPRE</h2>
                                        <h3 class="d-none d-lg-block">Poster for “Soldados de Amor” - International Day
                                            for the prevention
                                            of Childhood Cancer</h3>
                                        <p class="py-5 py-lg-0">Childhood Cancer is one of the leading causes of death
                                            among children and adolescents around the world. Always With You, is a
                                            tribute to all oncologists in Mexico, for the great work they do in caring
                                            for and protecting these great beings full of lifetime. The bird is a being
                                            of infinite freedom and it was the inspiration to reflect all that joy and
                                            will to live of children around the world.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Contigo Siempre-->

        <!-- Modal: Casa Viva-->
        <div class="modal fade" id="modalCasaViva" tabindex="-1" role="dialog" aria-labelledby="modalCasaViva"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">CASA VIVA</h2>
                                    <h3 class="d-block d-lg-none">Graphic Identity & Web Page Design for CASA VIVA -
                                        Cultural Creative Space in Mexico</h3>
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA1.jpg" class="w-100 py-3"
                                        alt="Casa Viva-01">
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA2.jpg" class="w-100 py-3"
                                        alt="Casa Viva-02">
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA3.jpg" class="w-100 py-3"
                                        alt="Casa Viva-03">
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA4.jpg" class="w-100 py-3"
                                        alt="Casa Viva-04">
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA5.jpg" class="w-100 py-3"
                                        alt="Casa Viva-05">
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA6.jpg" class="w-100 py-3"
                                        alt="Casa Viva-06">
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA7.gif" class="w-100 py-3"
                                        alt="Casa Viva-07">
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA8.jpg" class="w-100 py-3"
                                        alt="Casa Viva-08">
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA9.jpg" class="w-100 py-3"
                                        alt="Casa Viva-09">
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA10.gif" class="w-100 py-3"
                                        alt="Casa Viva-10">
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA11.jpg" class="w-100 py-3"
                                        alt="Casa Viva-11">
                                    <img src="img/Portafolio/modalCasaViva/CASA-VIVA12.jpg" class="w-100 py-3"
                                        alt="Casa Viva-12">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block">CASA VIVA</h2>
                                        <h3 class="d-none d-lg-block">Graphic Identity & Web Page Design for CASA VIVA -
                                            Cultural Creative Space in Mexico</h3>
                                        <p class="py-5 py-lg-0">This project was created with the intention of creating
                                            a creative space that exploit’s each person’s talents and establish
                                            connections between communities from different parts of the world. Located
                                            in the heart of Roma Norte, Mexico City. Casa Viva offers those who visit
                                            it, an space where they can learn about different cultures of the world,
                                            traditions of Mexico City, local events, and native to the country, as well
                                            as experiences that enrich the soul and spirit. </p>

                                        <span class="color-primary pb-4 pb-md-0"
                                            style="font-family: Seravek-ExtraLightItalic;font-weight: 600;">FINALIST -
                                            PREMIO A! DISEÑO 2020 - CATEGORY: BRANDING</span> <br>
                                        <span class="color-primary pb-4 pb-md-0"
                                            style="font-family: Seravek-ExtraLightItalic;font-weight: 600;">FINALIST -
                                            PREMIO A! DISEÑO 2020 - CATEGORY: WEB PAGE</span> <br><br>
                                        <h4>WEB SITE:</h4>
                                        <p class="color-primary"> <a href="https://lacasaviva.mx/" target="_blank"
                                                style="font-family:Seravek;">https://lacasaviva.mx</a> </p>
                                        <h4>INSTAGRAM:</h4>
                                        <p class="color-primary"> <a href="https://www.instagram.com/lacasavivamx/"
                                                target="_blank" style="font-family:Seravek;">/lacasavivamx</a> </p>
                                        <h4>COLLABORATOR:</h4>
                                        <p class="color-primary"> <a href="https://www.instagram.com/luiyigan/"
                                                target="_blank" style="font-family:Seravek;">/luiyigan </a> </p>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Casa Viva-->

        <!-- Modal: Reborn-->
        <div class="modal fade" id="modalReborn" tabindex="-1" role="dialog" aria-labelledby="modalReborn"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">REBORN</h2>
                                    <h3 class="d-block d-lg-none">Poster for REINICIA Y REDISEÑA NUESTRO MUNDO –
                                        International Poster Competition from Ecuador</h3>
                                    <img src="img/Portafolio/modalReborn/RENACER_REBORN-01.jpg" class="w-100 py-3"
                                        alt="REBORN - 01">
                                    <img src="img/Portafolio/modalReborn/RENACER_REBORN-02.jpg" class="w-100 py-3"
                                        alt="REBORN - 02">
                                    <img src="img/Portafolio/modalReborn/RENACER_REBORN-03.jpg" class="w-100 py-3"
                                        alt="REBORN - 03">
                                    <img src="img/Portafolio/modalReborn/RENACER_REBORN-04.jpg" class="w-100 py-3"
                                        alt="REBORN - 04">
                                    <img src="img/Portafolio/modalReborn/RENACER_REBORN-05.jpg" class="w-100 py-3"
                                        alt="REBORN - 05">
                                    <img src="img/Portafolio/modalReborn/RENACER_REBORN-06.jpg" class="w-100 py-3"
                                        alt="REBORN - 06">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block">REBORN</h2>
                                        <h3 class="d-none d-lg-block">Poster for REINICIA Y REDISEÑA NUESTRO MUNDO –
                                            International Poster Competition from Ecuador</h3>
                                        <p class="py-5 py-lg-0">The world has changed and will change due to COVID 19.
                                            What challenges do we as humanity face in the present and the future? If
                                            instead of returning to normality and how we have lived the last 200 years,
                                            we are reborn? To born more aware of our environment and with Mother Nature?
                                            If we take care of her from now on, she will be reborn stronger and each
                                            dawn will be a new beginning. A new beginning where we can live in harmony
                                            with her.<br /><br />

                                            <span class="color-primary pb-4 pb-md-0"
                                                style="font-family: Seravek-ExtraLightItalic;font-weight: 600;">FINALIST
                                                - PREMIO A! DISEÑO 2020 - CATEGORY: POSTER<br>
                                                FINALIST – TOP 100 BEST POSTER OF THE WORLD BY “REINICIA Y REDISEÑA
                                                NUESTRO MUNDO” - INTERNATIONAL POSTER COMPETITION<br>
                                                FINALIST - TOP 100 BEST POSTER ON “THE WORLD AFTER” 2020 - INTERNATIONAL
                                                POSTER COMPETITION”
                                            </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Reborn-->

        <!-- Modal: Reuse Save Lives-->
        <div class="modal fade" id="modalReuse" tabindex="-1" role="dialog" aria-labelledby="modalReuse"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Reuse Save Lives</h2>
                                    <h3 class="d-block d-lg-none">Poster for personal project about Reusing waste</h3>
                                    <img src="img/Portafolio/modalReuse/REUSE-SAVE-LIVES-01.jpg" class="w-100 py-3"
                                        alt="Reuse Save Lives - 01">
                                    <img src="img/Portafolio/modalReuse/REUSE-SAVE-LIVES-02.jpg" class="w-100 py-3"
                                        alt="Reuse Save Lives - 02">
                                    <img src="img/Portafolio/modalReuse/REUSE-SAVE-LIVES-03.jpg" class="w-100 py-3"
                                        alt="Reuse Save Lives - 03">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">Reuse Save Lives</h2>
                                        <h3 class="d-none d-lg-block">Poster for personal project about Reusing waste
                                        </h3>
                                        <p class="py-5 py-lg-0">Did you know that reusing saves your life? In our
                                            consumer life, a plastic bottle, new jeans, a new car, and even an orange,
                                            becomes waste at the end of its life cycle. Many of these objects are very
                                            short-lived and this marks a great problem, generating millions of tons of
                                            garbage per year. How to lead a more environmentally conscious life and
                                            generate as little waste as possible? If you already have objects that you
                                            use in your daily life, you can reuse them in a different and creative way.
                                            Reusing belongs to the 4 R'S of recycling. If you reuse, you prevent
                                            millions of waste from going to landfills and the sea, thus helping to
                                            reduce environmental, maritime pollution and avoiding global warming.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Reuse Save Lives-->

        <!-- Modal: WORLD OCEANS DAY 2020-->
        <div class="modal fade" id="modalWorldOceansDay" tabindex="-1" role="dialog"
            aria-labelledby="modalWorldOceansDay" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">WORLD OCEANS DAY 2020</h2>
                                    <h3 class="d-block d-lg-none">Campaign for SEA SHEPHERD MEXICO – World Oceans Day by
                                        UN</h3>
                                    <img src="img/Portafolio/modalWorldOceansDay/WORLD-OCEANS-DAY-01.jpg"
                                        class="w-100 py-3" alt="World Oceans Day 2020 - 01">
                                    <img src="img/Portafolio/modalWorldOceansDay/WORLD-OCEANS-DAY-02.jpg"
                                        class="w-100 py-3" alt="World Oceans Day 2020 - 02">
                                    <img src="img/Portafolio/modalWorldOceansDay/WORLD-OCEANS-DAY-03.jpg"
                                        class="w-100 py-3" alt="World Oceans Day 2020 - 03">
                                    <img src="img/Portafolio/modalWorldOceansDay/WORLD-OCEANS-DAY-04.jpg"
                                        class="w-100 py-3" alt="World Oceans Day 2020 - 04">
                                    <img src="img/Portafolio/modalWorldOceansDay/WORLD-OCEANS-DAY-05.jpg"
                                        class="w-100 py-3" alt="World Oceans Day 2020 - 05">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block">WORLD OCEANS DAY 2020</h2>
                                        <h3 class="d-none d-lg-block">Campaign for SEA SHEPHERD MEXICO – World Oceans
                                            Day by UN</h3>
                                        <p class="py-5 py-lg-0">Every year the UN, carries out one of the most important
                                            events to understand and protect life on planet earth: The Oceans. <br> This
                                            year they focused a lot on the subject of new innovation methodologies to
                                            solve issues such as: global warming, maritime pollution, coral bleaching,
                                            as well as many other issues. Sea Shepherd, in partnership with other
                                            organizations that care for the oceans in Mexico, participated as a leader
                                            in the area, creating events, seminars and online workshops to communicate
                                            this important event. <br><br>

                                            <h4>INSTAGRAM</h4>
                                            <p class="color-primary"> <a
                                                    href="https://www.instagram.com/seashepherdmexico/" target="_blank"
                                                    style="font-family:Seravek;">/seashepherdmexico</a>
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: WORLD OCEANS DAY 2020-->

        <!-- Modal: WORLD BEE DAY-->
        <div class="modal fade" id="modalDiaMundialdelasAbejas" tabindex="-1" role="dialog"
            aria-labelledby="modalDiaMundialdelasAbejas" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">WORLD BEE DAY</h2>
                                    <h3 class="d-block d-lg-none">Social Media Children’s Design for CVIUM - World Bee
                                        Day</h3>
                                    <img src="img/Portafolio/modalDiaMundialDeLasAbejas/DIA-MUNDIAL-DE-LAS-ABEJAS_WORLD-BEE-DAY-01.jpg"
                                        class="w-100 py-3" alt="Día Mundial de las abejas -01">
                                    <img src="img/Portafolio/modalDiaMundialDeLasAbejas/DIA-MUNDIAL-DE-LAS-ABEJAS_WORLD-BEE-DAY-02.jpg"
                                        class="w-100 py-3" alt="Día Mundial de las abejas -02">
                                    <img src="img/Portafolio/modalDiaMundialDeLasAbejas/DIA-MUNDIAL-DE-LAS-ABEJAS_WORLD-BEE-DAY-03.jpg"
                                        class="w-100 py-3" alt="Día Mundial de las abejas -03">
                                    <img src="img/Portafolio/modalDiaMundialDeLasAbejas/DIA-MUNDIAL-DE-LAS-ABEJAS_WORLD-BEE-DAY-04.jpg"
                                        class="w-100 py-3" alt="Día Mundial de las abejas -04">
                                    <img src="img/Portafolio/modalDiaMundialDeLasAbejas/DIA-MUNDIAL-DE-LAS-ABEJAS_WORLD-BEE-DAY-05.jpg"
                                        class="w-100 py-3" alt="Día Mundial de las abejas -05">
                                    <img src="img/Portafolio/modalDiaMundialDeLasAbejas/DIA-MUNDIAL-DE-LAS-ABEJAS_WORLD-BEE-DAY-06.jpg"
                                        class="w-100 py-3" alt="Día Mundial de las abejas -06">
                                    <img src="img/Portafolio/modalDiaMundialDeLasAbejas/DIA-MUNDIAL-DE-LAS-ABEJAS_WORLD-BEE-DAY-07.jpg"
                                        class="w-100 py-3" alt="Día Mundial de las abejas -07">
                                    <img src="img/Portafolio/modalDiaMundialDeLasAbejas/DIA-MUNDIAL-DE-LAS-ABEJAS_WORLD-BEE-DAY-08.jpg"
                                        class="w-100 py-3" alt="Día Mundial de las abejas -08">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">WORLD BEE DAY</h2>
                                        <h3 class="d-none d-lg-block">Social Media Children’s Design for CVIUM - World
                                            Bee Day</h3>
                                        <p class="py-5 py-lg-0">To take care of the future of the planet and of
                                            humanity, the role that bees play in nature is vital to living. That is why
                                            CVIUM wanted to make a short story for children, so that they would
                                            understand the importance of taking care of bees and forget about the myths
                                            that they have taught us for many years, such as that bees are bad and
                                            sting. It is time to really teach its value to the new generations, who will
                                            change the course of the planet.<br><br>

                                            <h4>INSTAGRAM</h4>
                                            <p class="color-primary"> <a href="https://www.instagram.com/c.vium/"
                                                    target="_blank" style="font-family:Seravek;">/c.vium</a></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: WORLD BEE DAY-->

        <!-- Modal: LET’S LISTEN THE OCEAN-->
        <div class="modal fade" id="modalEscuchemosAlOceano" tabindex="-1" role="dialog"
            aria-labelledby="modalEscuchemosAlOceano" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">LET’S LISTEN THE OCEAN</h2>
                                    <h3 class="d-block d-lg-none">Social Media Illustration for CVIUM - World Oceans Day
                                    </h3>
                                    <img src="img/Portafolio/modalEscuchemosAlOceano/ESCUCHEMOS-AL-OCEANO-LET_S-LISTEN-TO-THE-OCEAN-01.jpg"
                                        class="w-100 py-3" alt="Escuchemos al Océano - 01">
                                    <img src="img/Portafolio/modalEscuchemosAlOceano/ESCUCHEMOS-AL-OCEANO-LET_S-LISTEN-TO-THE-OCEAN-02.jpg"
                                        class="w-100 py-3" alt="Escuchemos al Océano - 02">
                                    <img src="img/Portafolio/modalEscuchemosAlOceano/ESCUCHEMOS-AL-OCEANO-LET_S-LISTEN-TO-THE-OCEAN-03.jpg"
                                        class="w-100 py-3" alt="Escuchemos al Océano - 03">
                                    <img src="img/Portafolio/modalEscuchemosAlOceano/ESCUCHEMOS-AL-OCEANO-LET_S-LISTEN-TO-THE-OCEAN-04.jpg"
                                        class="w-100 py-3" alt="Escuchemos al Océano - 04">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">LET’S LISTEN THE OCEAN</h2>
                                        <h3 class="d-none d-lg-block">Social Media Illustration for CVIUM - World Oceans
                                            Day</h3>
                                        <p class="py-5 py-lg-0">Do you know what noise pollution is? Not only litter
                                            affects life in the oceans, but also the noises made by ships, cruise ships,
                                            boats, and oil machines. It is so annoying for the animals of the sea. Like
                                            having a mosquito in hate all the time! So let's listen to all life in the
                                            ocean ... What does it have to say to us?<br><br>

                                            <h4>INSTAGRAM</h4>
                                            <p class="color-primary"> <a href="https://www.instagram.com/c.vium/"
                                                    target="_blank" style="font-family:Seravek;">/c.vium</a></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: LET’S LISTEN THE OCEAN-->

        <!-- Modal: EARTH GROWING-->
        <div class="modal fade" id="modalEarthGrowing" tabindex="-1" role="dialog" aria-labelledby="modalEarthGrowing"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">EARTH GROWING</h2>
                                    <h3 class="d-block d-lg-none">Poster for CVIUM - Earth Day 2020</h3>
                                    <img src="img/Portafolio/modalEarthGrowing/Earth-Growing-01.jpg" class="w-100 py-3"
                                        alt="Earth Growing - 01">
                                    <img src="img/Portafolio/modalEarthGrowing/Earth-Growing-02.jpg" class="w-100 py-3"
                                        alt="Earth Growing - 02">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">EARTH GROWING</h2>
                                        <h3 class="d-none d-lg-block">Poster for CVIUM - Earth Day 2020</h3>
                                        <p class="py-5 py-lg-0">For Earth Day, I made this poster to raise awareness:
                                            The earth can become very fragile like a flower if we hurt it, but it can
                                            grow infinitely, if we take care of and protect it. Let's take care to water
                                            it with enough water without drowning it or drying it out, so that it
                                            remains healthy until it transforms and reaches the end of its life
                                            cycle.<br><br>

                                            <h4>INSTAGRAM</h4>
                                            <p class="color-primary"> <a href="https://www.instagram.com/c.vium/"
                                                    target="_blank" style="font-family:Seravek;">/c.vium</a></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: EARTH GROWING-->

        <!-- Modal: Coming Soon-->
        <div class="modal fade" id="modalComingSoon" tabindex="-1" role="dialog" aria-labelledby="modalComingSoon"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Coming Soon</h2>
                                    <h3 class="d-block d-lg-none">Coming Soon</h3>
                                    <!--<img src="img/Portafolio/" class="w-100 py-3"  alt="">-->
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block">Coming Soon</h2>
                                        <h3 class="d-none d-lg-block">Coming Soon</h3>
                                        <p class="py-5 py-lg-0">Coming Soon</p>
                                        <div class="d-flex justify-content-center py-3 d-block d-lg-none">
                                            <div class="btnClose d-flex justify-content-center align-items-center"
                                                data-dismiss="modal"><i class="fas fa-times"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Termina Modal: Coming Soon-->

        <!-- Modal: ¿Tú qué sentirías?-->
        <div class="modal fade" id="modalTuquesentirias" tabindex="-1" role="dialog"
            aria-labelledby="modalTuquesentirías" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">¿Tú qué sentirías?</h2>
                                    <h3 class="d-block d-lg-none">Illustration for Sea Shepherd Mexico - Corals Campaign
                                    </h3>
                                    <img src="img/Portafolio/modalTuquesentirías/Tu-que-sentirias-1.jpg"
                                        class="w-100 py-3" alt="¿Tú qué sentirías?-Corals Campaign-01">
                                    <img src="img/Portafolio/modalTuquesentirías/Tu-que-sentirias-2.jpg"
                                        class="w-100 py-3" alt="¿Tú qué sentirías?-Corals Campaign-02">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">¿Tú qué sentirías?</h2>
                                        <h3 class="d-none d-lg-block">Illustration for Sea Shepherd Mexico - Corals
                                            Campaign
                                        </h3>
                                        <p class="py-5 py-lg-0">Corals are dying from global warming, in this campaign
                                            for Sea Shepherd Mexico, we try to show how extreme
                                            consumption directly affects corals and together with fossil fuels, we are
                                            destroying one of the most important ecosystems in the world.
                                            #notowarmingtheocean<br><br>

                                            <h4>INSTAGRAM</h4>
                                            <p class="color-primary"> <a
                                                    href="https://www.instagram.com/seashepherdmexico/" target="_blank"
                                                    style="font-family:Seravek;">/seashepherdmexico</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: ¿Tú qué sentirías?-->

        <!-- Modal: Credo Day-->
        <div class="modal fade" id="modalCredoDay" tabindex="-1" role="dialog" aria-labelledby="modalCredoDay"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Credo Day</h2>
                                    <h3 class="d-block d-lg-none">Internal social campaign for J&J</h3>
                                    <img src="img/Portafolio/modalCredoDay/Credo-Day-1.jpg" class="w-100 py-3"
                                        alt="Credo Day - J&J 2018-01">
                                    <img src="img/Portafolio/modalCredoDay/Credo-Day-2.jpg" class="w-100 py-3"
                                        alt="Credo Day - J&J 2018-02">
                                    <img src="img/Portafolio/modalCredoDay/Credo-Day-3.jpg" class="w-100 py-3"
                                        alt="Credo Day - J&J 2018-03">
                                    <img src="img/Portafolio/modalCredoDay/Credo-Day-4.jpg" class="w-100 py-3"
                                        alt="Credo Day - J&J 2018-04">
                                    <img src="img/Portafolio/modalCredoDay/Credo-Day-5.jpg" class="w-100 py-3 shadow"
                                        alt="Credo Day - J&J 2018-04">
                                    <div class="embed-responsive embed-responsive-16by9 mt-4 d-block d-lg-none">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/vAi8tLtRyxI"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block">Credo Day</h2>
                                        <h3 class="d-none d-lg-block">Internal social campaign for J&J</h3>
                                        <p class="mt-lg-0 mt-4">How do we unite people from different sectors, beliefs,
                                            talents, activities, in the same creed? Campaign that was carried out for
                                            Johnson & Johnson México as the national anniversary of its creed.
                                            <div class="color-primary">
                                                <span style="font-family: Seravek-ExtraLightItalic; font-weight: 600;">
                                                    FINALIST - PREMIO A! DISEÑO 2017 - CATEGORY:
                                                    ADVERTISING</span><br />
                                                <span style="font-weight: 600;">Agency:</span> Artes Balam<br />
                                                <span style="font-weight: 600;"> Concept of the campaign:</span> Claudia
                                                Orozco, Valeria Riquelme, Angie Soto Tinoco <br />
                                                <span style="font-weight: 600;"> Graphic Designer & Conceptual
                                                    Art:</span> Angie Soto Tinoco<br />
                                                <span style="font-weight: 600;"> Graphic Edition:</span> Angie Soto
                                                Tinoco<br />
                                                <span style="font-weight: 600;"> Photographer:</span> Miguel
                                                Cordova<br />
                                                <span style="font-weight: 600;"> Filmamker & Direction:</span> Ivy
                                                Suárez <br />
                                                <span style="font-weight: 600;"> Edition & Color Correction: </span>Luis
                                                Ricardo González<br />
                                                <span style="font-weight: 600;"> Cameraman:</span> Luis Ricardo
                                                González<br />
                                                <span style="font-weight: 600;"> Cameraman:</span> Oscar Caballero<br />
                                                <span style="font-weight: 600;"> Logo Animation:</span> Yanin
                                                Salas<br />
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Video Credo vista Desktop -->
                        <div class="container-fluid d-none d-lg-block pt-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="embed-responsive embed-responsive-16by9 mt-4">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/vAi8tLtRyxI"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Termina Video Credo vista Desktop -->
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Credo Day-->

        <!-- Modal: Reunión Anual Cemefi-->
        <div class="modal fade" id="modalReunionCemefi" tabindex="-1" role="dialog" aria-labelledby="modalReunionCemefi"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">Reunión Anual Cemefi</h2>
                                    <h3 class="d-block d-lg-none">Graphic Identity for Cemefi 2017 Annual Meeting</h3>
                                    <img src="img/Portafolio/modalReunionCemefi/Reunion-Anual-Cemefi-1.jpg"
                                        class="w-100 py-3" alt="Reunión Anual Cemefi 2017-01">
                                    <img src="img/Portafolio/modalReunionCemefi/Reunion-Anual-Cemefi-2.jpg"
                                        class="w-100 py-3" alt="Reunión Anual Cemefi 2017-02">
                                    <img src="img/Portafolio/modalReunionCemefi/Reunion-Anual-Cemefi-3.jpg"
                                        class="w-100 py-3" alt="Reunión Anual Cemefi 2017-03">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">Reunión Anual Cemefi</h2>
                                        <h3 class="d-none d-lg-block">Graphic Identity for Cemefi 2017 Annual Meeting
                                        </h3>
                                        <p class="py-5 py-lg-0">What are the next challenges as a country in the social,
                                            political and human fields? This year's theme: Challenges and Opportunities;
                                            The concept: Each organization is a key piece in helping philanthropy in
                                            Mexico. How do we unite different topics of debate and manage to unite
                                            different ideas and opinions? <br /><br />

                                            <span class="color-primary"
                                                style="font-family: Seravek-ExtraLightItalic; font-weight: 600;">WINNER:
                                                MEXICO AGENCIES COMPETITION</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: Reunión Anual Cemefi-->

        <!-- Modal: toc toc-->
        <div class="modal fade" id="modalTocToc" tabindex="-1" role="dialog" aria-labelledby="modalTocToc"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times" style="font-size: 20px;"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="d-none d-lg-block">works</h5>
                                    <h2 class="color-primary d-block d-lg-none">toc toc</h2>
                                    <h3 class="d-block d-lg-none">Graphic Identity for toc toc Mexico- Food Brand</h3>
                                    <img src="img/Portafolio/modalTocToc/TOC-TOC-01.jpg" class="w-100 py-3"
                                        alt="toc toc 1">
                                    <img src="img/Portafolio/modalTocToc/TOC-TOC-02.jpg" class="w-100 py-3"
                                        alt="toc toc 2">
                                    <img src="img/Portafolio/modalTocToc/TOC-TOC-03.jpg" class="w-100 py-3"
                                        alt="toc toc 3">
                                    <img src="img/Portafolio/modalTocToc/TOC-TOC-04.jpg" class="w-100 py-3"
                                        alt="toc toc 4">
                                    <img src="img/Portafolio/modalTocToc/TOC-TOC-05.jpg" class="w-100 py-3"
                                        alt="toc toc 5">
                                    <img src="img/Portafolio/modalTocToc/TOC-TOC-06.jpg" class="w-100 py-3"
                                        alt="toc toc 6">
                                    <img src="img/Portafolio/modalTocToc/TOC-TOC-07.jpg" class="w-100 py-3"
                                        alt="toc toc 7">
                                    <img src="img/Portafolio/modalTocToc/TOC-TOC-08.jpg" class="w-100 py-3"
                                        alt="toc toc 8">
                                    <img src="img/Portafolio/modalTocToc/TOC-TOC-09.gif" class="w-100 py-3"
                                        alt="toc toc 9">
                                </div>

                                <div class="col-lg-6">
                                    <div class="sidebar">
                                        <h2 class="color-primary d-none d-lg-block pt-lg-5">toc toc</h2>
                                        <h3 class="d-none d-lg-block">Graphic Identity for toc toc Mexico- Food Brand
                                        </h3>
                                        <p class="py-5 py-lg-0">This project is dedicated to all young people who seek
                                            to achieve their goals and dreams, but need a good dose of optimism and
                                            energy. <br /><br />
                                            Toc Toc was born to help these people achieve this, through quality
                                            breakfasts, with a fresh, friendly and modern concept.
                                        </p>
                                        <span class="color-primary pb-4 pb-md-0"
                                            style="font-family: Seravek-ExtraLightItalic;font-weight: 600;">FINALIST -
                                            PREMIO A! DISEÑO 2020 - CATEGORY: BRANDING</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end my-3">
                        <div class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                                class="fas fa-times"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Termina Modal: toc toc-->
        <!-- ////////// Termina Modals Work //////////-->

        <!-- ////////// Modals Formulario //////////-->

        <!-- Modal HIRE ME! -->
        <div class="modal fade" id="formContactMe" data-backdrop="static" data-keyboard="false" tabindex="-1"
            role="dialog" aria-labelledby="formContactMe" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">You like my work, contact me!</h5>
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
                                        <label for="nombre" class="label">Name:</label>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="email" id="mail" name="mail">
                                        <label for="email" class="label">Email:</label>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="text" name="mensaje" id="mensaje" cols="4" rows="6">
                                        <label for="textarea" class="label">Message:</label>
                                    </div>

                                    <div class="input-group checkbox mb-4">
                                        <input type="checkbox" name="terminos" id="terminos" value="true">
                                        <label for="terminos">I accept terms and conditions</label>
                                    </div>
                                    <div class="container d-flex justify-content-lg-end  justify-content-center">
                                        <input class="mb-3" type="submit" id="btn-submit" value="SEND">
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
                        <h5 class="modal-title" id="staticBackdropLabel">Let's work together!</h5>
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
                                        <label for="nombre" class="label">Name:</label>
                                    </div>

                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group mb-4">
                                                    <input type="email" id="mail" name="mail">
                                                    <label for="email" class="label">Email:</label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="input-group mb-4">
                                                    <input type="email" id="mail" name="mail">
                                                    <label for="email" class="label">Company:</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="input-group mb-4">
                                        <input type="text" name="mensaje" id="mensaje" cols="4" rows="6">
                                        <label for="textarea" class="label">Tell me your project:</label>
                                    </div>

                                    <div class="input-group checkbox mb-4">
                                        <input type="checkbox" name="terminos" id="terminos" value="true">
                                        <label for="terminos">I accept terms and conditions</label>
                                    </div>
                                    <div class="container d-flex justify-content-lg-end  justify-content-center">
                                        <input class="mb-3" type="submit" id="btn-submit" value="SEND">
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