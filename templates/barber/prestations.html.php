<div class="burgerMenu">
    <div id="mySidenav" class="sidenav">
        <a id="closeBtn" href="#" class="close">×</a>
        <ul>
            <li><a class="linkModified" href="index.php"><span>Accueil</span></a></li>
            <li><a class="linkModified" href="index.php?type=barber&action=realisation"><span>Réalisations</span></a></li>
            <li><a class="linkModified" href="#"><span class="gris">Prestations</span></a></li>
            <li><a class="linkModified" href="index.php?type=barber&action=contact"><span>Contact</span></a></li>
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
    <a href="$index.php"><div class="logo"></div></a>
    <div class="links">
        <a class="link" href="index.php?type=barber&action=realisation">Réalisations</a>
        <a class="link gris" href="#">Prestations</a>
        <a class="link " href="index.php?type=barber&action=contact">Contact</a>
    </div>
    <a class="logoInvisible" href="index.php"><div class="logo"></div></a>

</div>

<div class="prestationsCards">
    <div class="cartePrestation">
        <div class="title">Barbe <img class="icon" src="./image/beard.png" alt="logo barbe"></div>
        <div class="presentationText">
            <span>-nouvelle barbe, nouveau départ</span>
            <br>
            <span>- changez de style dès maintenant</span>
            <br>
            <?php foreach ($offres as $offre) {
            if ($offre->getId()===4): ?>
                <span>-À partir de <price> <?= $offre->getPrice(); ?>€</price></span>
            <?php endif; } ?>


        </div>
    </div>
    <div class="cartePrestation">
        <div class="title">Cheveux <img class="icon" src="./image/hair.png" alt="Logo cheveux"></div>
        <div class="presentationText">
            <span>-nouvelle coupe, nouveau look</span>
            <br>
            <span>-changez de style dès maintenant</span>
            <br>
            <?php foreach ($offres as $offre) {
                if ($offre->getId()===7): ?>
                    <span>-À partir de <price> <?= $offre->getPrice(); ?>€</price></span>
                <?php endif; } ?>
        </div>
    </div>
    <div class="cartePrestation premium">
        <div class="title premiumTitle">La totale <img class="icon" src="./image/laTotale.png" alt="logo La Totale"></div>
        <div class="presentationText premiumText">
            <span>nouvelle coupe, <br> nouvelle barbe, <br> Nouvel homme</span>
            <br> <div class="dot"></div>
            <span>car chaque détail <br> compte</span>
            <br> <div class="dot"></div>
            <?php foreach ($offres as $offre) {
                if ($offre->getId()===10): ?>
                    <span>-À partir de <price> <br> <?= $offre->getPrice(); ?>€</price></span>
                <?php endif; } ?>
        </div>
    </div>
</div>

<div class="tarifs">
    <div><h2 class="titleTarifs">Tarifs</h2></div>
    <div class="tarifsCheveux">
        <h3  class="titleAbove">Cheveux</h3>
        <hr>
        <div class="infosPrixCheveux">
            <?php foreach ($offres as $offre) {
                if ($offre->getId()===5): ?>
                    <span class="individualPrice">|<br>coupe enfant <br> <price> <?= $offre->getPrice(); ?>€</price></span>
                <?php endif; } ?>
            <?php foreach ($offres as $offre) {
                if ($offre->getId()===6): ?>
                    <span class="individualPrice">|<br>coupe ado <br> <price> <?= $offre->getPrice(); ?>€</price></span>
                <?php endif; } ?>
            <?php foreach ($offres as $offre) {
                if ($offre->getId()===7): ?>
                    <span class="individualPrice">|<br>coupe homme <br> <price> <?= $offre->getPrice(); ?>€</price></span>
                <?php endif; } ?>
            <?php foreach ($offres as $offre) {
                if ($offre->getId()===8): ?>
                    <span class="individualPrice">|<br>coupe ciseaux <br> <price> <?= $offre->getPrice(); ?>€</price></span>
                <?php endif; } ?>
        </div>
    </div>
    <div class="allUnder">
        <div class="tarifsOther">
            <div class="tarifsBarbe">
                <h3 class="titleAbove">Barbe</h3>
                <hr>
                <div class="infosPrixBarbe">
                    <?php foreach ($offres as $offre) {
                        if ($offre->getId()===4): ?>
                            <span class="individualPrice">|<br>Taille de barbe <br> <price> <?= $offre->getPrice(); ?>€</price></span>
                        <?php endif; } ?>
                    <?php foreach ($offres as $offre) {
                        if ($offre->getId()===10): ?>
                            <span class="individualPrice">|<br>Forfait coupe + barbe <br> <price> <?= $offre->getPrice(); ?>€</price></span>
                        <?php endif; } ?>
                </div>
            </div>
            <div class="tarifsSpecial">
                <h3 class="titleAbove">Spécial</h3>
                <hr>
                <div class="infosPrixSpecial">
                    <?php foreach ($offres as $offre) {
                        if ($offre->getId()===9): ?>
                            <span class="individualPrice">|<br>Permanente <br> <price> <?= $offre->getPrice(); ?>€</price></span>
                        <?php endif; } ?>
                    <?php foreach ($offres as $offre) {
                        if ($offre->getId()===11): ?>
                            <span class="individualPrice">|<br>Décoloration + patine <br> <price> <?= $offre->getPrice(); ?>€</price></span>
                        <?php endif; } ?>
                </div>
            </div>
        </div>

        <div class="boutonInterest">
            <h3 class="titleInterested"><span>Intéressé?</span></h3>
            <a href="index.php?type=barber&action=contact"><button class="interest" type="button">Nous contacter</button></a>
        </div>
    </div>
</div>