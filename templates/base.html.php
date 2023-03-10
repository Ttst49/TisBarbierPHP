<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Playball&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../TisBarbier/css/style.css">
    <link rel="stylesheet" href="../../TisBarbier/css/<?= $css ?>.css">



</head>
<body>

<div class="banner">
    <p class="content">
        <a class="nameOnBanner" href="index.php"><span>TisBarbier</span></a>
    </p>
</div>

<div class="burgerMenu">
    <div id="mySidenav" class="sidenav">
        <a id="closeBtn" href="#" class="close">×</a>
        <ul>
            <li><a class="linkModified" href="#"><span class="gris">Accueil</span></a></li>
            <li><a class="linkModified" href="realisations.html"><span>Réalisations</span></a></li>
            <li><a class="linkModified" href="prestations.html"><span>Prestations</span></a></li>
            <li><a class="linkModified" href="contact.html"><span>Contact</span></a></li>
        </ul>
    </div>

    <a href="#" id="openBtn">
  <span class="burger-icon">
    <span class="backgroundMenu">
      <img class="menu" src="img/menu.svg" alt="menu burger">
    </span>
  </span>
    </a>
</div>

<div class="navbar">
    <a href="index.php"><div class="logo"></div></a>
    <div class="links">
        <a class="link" href="index.php?type=barber&action=realisation">Réalisations</a>
        <a class="link" href="index.php?type=barber&action=prestation">Prestations</a>
        <a class="link" href="index.php?type=barber&action=contact">Contact</a>
    </div>
    <a class="logoInvisible" href="index.php"><div class="logo"></div></a>
</div>

<?= $pageContent ?>


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
            <h5>Suivez-nous sur nos réseaux <br> <img class="instagram" src="img/instagram.svg" alt="Instagram Logo"> <img class="facebook" src="img/facebook.svg" alt="facebook logo"></h5>
        </div>
    </div>
</footer>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
        crossorigin=""></script>
<script src="../../TisBarbier/javascript/main.js"></script>
</html>