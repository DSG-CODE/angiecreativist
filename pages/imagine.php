<?php include ('header.php');?>

<div class="modal-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="d-none d-lg-block"><?php echo $lang['PORTFOLIO_MODAL_WORK'];?></h5>
                <h2 class="color-primary d-block d-lg-none"><?php echo $lang['PORTFOLIO_MODAL_IMAGINE_TITLE'];?></h2>
                <h3 class="d-block d-lg-none"><?php echo $lang['PORTFOLIO_MODAL_IMAGINE_SUBTITLE'];?></h3>
                <img src="../img/Portafolio/modalImagine/Imagine-1.jpg" class="w-100 py-3"
                    alt="Imagine-World Book Day-2020-01">
                <img src="../img/Portafolio/modalImagine/Imagine-2.jpg" class="w-100 py-3"
                    alt="Imagine-World Book Day-2020-02">
                <img src="../img/Portafolio/modalImagine/Imagine-3.jpg" class="w-100 py-3"
                    alt="Imagine-World Book Day-2020-03">
                <img src="../img/Portafolio/modalImagine/Imagine-4.jpg" class="w-100 py-3"
                    alt="Imagine-World Book Day-2020-04">
            </div>

            <div class="col-lg-6">
                <div class="sidebar">
                    <h2 class="color-primary d-none d-lg-block"><?php echo $lang['PORTFOLIO_MODAL_IMAGINE_TITLE'];?></h2>
                    <h3 class="d-none d-lg-block"><?php echo $lang['PORTFOLIO_MODAL_IMAGINE_SUBTITLE'];?></h3>
                    <p class="py-5 py-lg-0"><?php echo $lang['PORTFOLIO_MODAL_IMAGINE_CONTENT'];?><br /><br />

                        <span class="color-primary pb-4 pb-md-0 text-uppercase"
                            style="font-family: Seravek-ExtraLightItalic;font-weight: 600;"><?php echo $lang['PORTFOLIO_MODAL_IMAGINE_FINALIST'];?></span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ('footer.php');?>