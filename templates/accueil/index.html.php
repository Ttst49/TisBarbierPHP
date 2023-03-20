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
      <img class="menu" src="/image/menu.svg" alt="menu burger">
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

<?php use App\Session;

if ( Session::getUser()){ ?>

    <?php
    if ($accueils){
        foreach ($accueils as $accueil): ?>






        <h1><strong><img src="image/<?= $accueil->getImage();?>" height="750" width="1000"></i></strong></h1>

        <a href="index.php?type=accueil&action=update&id=<?= $accueil->getId() ?>" class="btn btn-outline-info">update</a>

        <div class="mt-3 mb-5" style="width: 60vh;height: 5px;background-color: orange"></div>

            <a href="index.php?type=offre&action=index"><button>page suivante</button></a>



    <?php endforeach; } ?>

       <?php
        if ($offres){
            foreach ($offres as $offre): ?>

                <h1><span class="titleAbove" style="color: white"><?= $offre->getContent()?>:</span></h1>
                <h2><strong class="link"><?= $offre->getPrice() ?>€</i></strong></h2>

                <a href="index.php?type=offre&action=update&id=<?= $offre->getId() ?>" class="btn btn-outline-info">update</a>

                <div class="mt-3 mb-5" style="width: 60vh;height: 5px;background-color: orange"></div>


            <?php endforeach; } ?>


<?php }else{ ?>
    <p class="link">Erreur</p>
<?php } ?>
