<footer class="container-fluid" style="background: #fff;">
    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end mt-3">
        <a href="../index.php<?php echo $lang['MENU_LANGUAJE_LINK'];?>#work" class="btnClose d-flex justify-content-center align-items-center" data-dismiss="modal"><i
                class="fas fa-times"></i></a>
    </div>
</footer>
<!-- Termina Footer -->
<!--Termina Main Content-->

<!--Scripts Bootstrap funcionamiento-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--Termina scripts de bootstrap-->
<!-- Preload -->
<script src="../js/preload.js"></script>
<!--SmoothScroll-->
<script src="../js/smooth-scroll.min.js"></script>
<!--Inicializa SmoothScroll-->
<!-- <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script> -->
<!-- Efecto filtrado en portafolio -->
<script src="../js/filtro-portafolio.js"></script>
<!-- Efectos WOW -->
<script src="../js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!-- Efectos Scroll - AOS -->
<!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 1500,
        });
    </script> -->
<!-- Efectos Scroll - AOS-->
<!--Menú Movil-->
<script src="../js/menumovil.js"></script>
<!--Formulario Validaciones-->
<script src="../js/formulario.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js">
</script>
<!--Protección Copyright-->
<script>
    $(function () {
        $(document).bind("contextmenu", function (e) {
            return false;
        });
    });
</script>
</body>

</html>