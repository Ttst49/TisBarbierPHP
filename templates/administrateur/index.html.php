<div class="burgerMenu">
    <div id="mySidenav" class="sidenav">
        <a id="closeBtn" href="#" class="close">×</a>
        <ul>
            <li><a class="linkModified" href="#"><span class="gris">Accueil</span></a></li>
            <li><a class="linkModified" href="../../index.php?type=advanced&action=realisation"><span>Réalisations</span></a></li>
            <li><a class="linkModified" href="../../index.php?type=advanced&action=prestation"><span>Prestations</span></a></li>
            <li><a class="linkModified" href="../../index.php?type=static&action=realisation"><span>Contact</span></a></li>
        </ul>
    </div>

    <a href="#" id="openBtn">
  <span class="burger-icon">
    <span class="backgroundMenu">
      <img class="menu" src="../../public/image/menu.svg" alt="menu burger">
    </span>
  </span>
    </a>
</div>

<div class="navbar">
    <a href="../../index.php"><div class="logo"></div></a>
    <div class="links">
        <a class="link" href="../../index.php?type=advanced&action=realisation">Réalisations</a>
        <a class="link" href="../../index.php?type=advanced&action=prestation">Prestations</a>
        <a class="link" href="../../index.php?type=static&action=contact">Contact</a>
    </div>
    <a class="logoInvisible" href="../../index.php"><div class="logo"></div></a>
</div>

<?php use App\Session;

if ( Session::getUser()){ ?>

    <?php
    if ($images){
        foreach ($images as $image): ?>



        <h1><strong><img src="https://lockedup.ga/image/<?= $image->getImage();?>" height="750" width="1000"></i></strong></h1>

        <a href="../../index.php?type=images&action=update&id=<?= $image->getId() ?>" class="btn btn-outline-info">update</a>

        <div class="mt-3 mb-5" style="width: 60vh;height: 5px;background-color: orange"></div>


    <?php endforeach; ?>

        <a href="../../index.php?type=offre&action=index"><button>page suivante</button></a>

        <?php } ?>

       <?php
        if ($offres){
            foreach ($offres as $offre): ?>

                <h1><span class="titleAbove" style="color: white"><?= $offre->getContent()?>:</span></h1>
                <h2><strong class="link"><?= $offre->getPrice() ?>€</i></strong></h2>

                <a href="../../index.php?type=offre&action=update&id=<?= $offre->getId() ?>" class="btn btn-outline-info">update</a>

                <div class="mt-3 mb-5" style="width: 60vh;height: 5px;background-color: orange"></div>



            <?php endforeach; ?>
        <a href="../../index.php?type=images&action=index"><button>page précédente</button></a>
            <?php } ?>



<?php }else{ ?>
    <p class="link">Erreur</p>
<?php } ?>

