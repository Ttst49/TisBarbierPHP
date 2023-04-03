<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="description" content="Bienvenue chez TisBarbier | découvrez ce que nous avons à offrir à vos cheveux dans le secteur d'Oyonnax et ses alentours">
    <meta name="keywords" content="Barbier, Coiffeur, Oyonnax, Cheveux, salon de coiffure, barber, barbershop">
    <meta charset="UTF-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?></title>
    <link rel="icon" href="../public/image/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Playball&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../../TisBarbier/css/<?= $css ?>.css">



</head>
<body onload="initialize()" >
<div class="banner">
    <p class="content">
        <a class="nameOnBanner" href="index.php"><span>TisBarbier</span></a>
    </p>
</div>


<?= $pageContent ?>


</body>
<footer class="footer">
    <div class="leftFooter">
        <div class="logoFooter"></div>
        <div class="linksFooter">
            <div><h5><a class="linkFooter" href="index.php?type=barber&action=contact">Nous contacter</a></h5></div>
            <div><h5><a class="linkFooter" href="index.php?type=barber&action=prestation">Nos prestations</a></h5></div>
            <div><h5><a class="linkFooter" href="index.php?type=barber&action=mentions">Lire nos mentions légales</a></h5></div>
        </div>
    </div>
    <div class="middleFooter">
        <div><h5>Notre adresse mail: <br> TisBarbier@gmail.com</h5></div>
        <div><h5>Notre numéro de téléphone: <br> 06.30.88.81.93</h5></div>
        <div> <h5>Notre adresse: <br> 49 rue Anatole France <br> 01100 Oyonnax</h5></div>
    </div>
    <div class="rightFooter">
        <div class="socials">
            <h5>Suivez-nous sur nos réseaux <br> <a target="_blank" href="https://instagram.com/tisbarbier"><img class="instagram" src="image/instagram.svg" alt="Instagram Logo"></a>
                <a target="_blank" href="https://www.facebook.com/people/TisBarbier/100084037249214/"><img class="facebook" src="image/facebook.svg" alt="facebook logo"></a></h5>
        </div>
    </div>
</footer>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
        crossorigin=""></script>
<script src="../public/javascript/main.js"></script>

</html>