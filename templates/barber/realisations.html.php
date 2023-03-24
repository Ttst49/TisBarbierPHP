<div class="burgerMenu">
    <div id="mySidenav" class="sidenav">
        <a id="closeBtn" href="#" class="close">×</a>
        <ul>
            <li><a class="linkModified" href="index.php"><span>Accueil</span></a></li>
            <li><a class="linkModified" href="#"><span class="gris">Réalisations</span></a></li>
            <li><a class="linkModified" href="index.php?type=barber&action=prestation"><span>Prestations</span></a></li>
            <li><a class="linkModified" href="index.php?type=barber&action=contact"><span>Contact</span></a></li>
        </ul>
    </div>

    <a href="#" id="openBtn">
  <span class="burger-icon">
    <span class="backgroundMenu">
      <img class="menu" src="./image/menu.svg" alt="menu burger">
    </span>
  </span>
    </a>
</div>

<div class="navbar">
    <a href="index.php"><div class="logo"></div></a>
    <div class="links">
        <a class="link gris" href="#">Réalisations</a>
        <a class="link" href="index.php?type=barber&action=prestation">Prestations</a>
        <a class="link" href="index.php?type=barber&action=contact">Contact</a>
    </div>
    <a class="logoInvisible" href="index.php""><div class="logo"></div></a>

</div>

<div class="barbeLine">
    <div class="pics pics1">
        <?php foreach ($images as $image) {
            if ($image->getId()===2): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===3): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===4): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <span>Barbe</span>
        <?php foreach ($images as $image) {
            if ($image->getId()===5): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===6): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===7): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
    </div>
</div>

<div class="cheveuxLine">
    <div class="pics pics2">
        <?php foreach ($images as $image) {
            if ($image->getId()===8): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===9): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===10): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <span>Cheveux</span>
        <?php foreach ($images as $image) {
            if ($image->getId()===11): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===12): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===13): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
    </div>
</div>

<div class="totalLine">
    <div class="pics pics3">
        <?php foreach ($images as $image) {
            if ($image->getId()===14): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===15): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===16): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <span>La totale</span>
        <?php foreach ($images as $image) {
            if ($image->getId()===17): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===18): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
        <?php foreach ($images as $image) {
            if ($image->getId()===19): ?>
                <img class="pic" src= "./image/<?= $image->getImage() ?>" alt="<?= $image->getAlt() ?>">
            <?php endif; } ?>
    </div>
</div>

<div onload="moveToMiddle()" class="systemProfessional">
    <hr>
    <p>
        TisBarbier est accompagné dans son salon par la marque System Professional. <br>
        Venez découvrir leur efficacité directement via notre barbier ou bien venez acheter les produits que nous vendons
        <br> directement dans le salon pour faire vos propres expérimentations
    </p>
    <div class="systemLogo">

    </div>
</div>
