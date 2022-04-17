<?php
    include "../configuracion.php"
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
    <link rel="shortcut icon" href="../img/favicon-Angie.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
    <!--     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="200" style="box-sizing: border-box;"
    ondragstart="return false" onselectstart="return false" oncontextmenu="return false" class="hiddent">

    <header class="container-fluid mb-4 mt-0" style="background: #fff;">
    <div class="modal-footer border-0 d-flex justify-content-center justify-content-lg-end">
        <a onclick="back()" class="btnClose d-flex justify-content-center align-items-center"><i class="fa-solid fa-arrow-left-long"></i></a>
    </div>
</header>
