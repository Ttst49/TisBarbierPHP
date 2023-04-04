<div class="burgerMenu">
    <div id="mySidenav" class="sidenav">
        <a id="closeBtn" href="#" class="close">×</a>
        <ul>
            <li><a class="linkModified" href="index.php"><span>Accueil</span></a></li>
            <li><a class="linkModified" href="index.php?type=advanced&action=realisation"><span>Réalisations</span></a></li>
            <li><a class="linkModified" href="index.php?type=advanced&action=prestation"><span>Prestations</span></a></li>
            <li><a class="linkModified" href="#"><span class="gris">Contact</span></a></li>
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
        <a class="link" href="index.php?type=advanced&action=realisation">Réalisations</a>
        <a class="link" href="index.php?type=advanced&action=prestation">Prestations</a>
        <a class="link gris" href="#">Contact</a>
    </div>
    <a class="logoInvisible" href="index.php"><div class="logo"></div></a>
</div>

<div class="contactPage container-fluid">
    <div class="leftContact">
        <?php if (!$nom && !$mail): ?>
        <h1>Nous contacter</h1>
        <form action="index.php?type=static&action=contact" method="post">
            <input type="hidden" name="_template" value="table">
            <label for="name">Votre nom?</label> <br>
            <input type="text" name="nom" id="nom" required> <br>
            <label for="mail">Votre email?</label> <br>
            <input type="email" name="mail" id="mail" required> <br>
            <label for="message">Votre message?</label> <br>
            <textarea name="message" id="message" cols="30" rows="7" required></textarea> <br>
            <button class="boutonSend" type="submit">Envoyer</button>
        </form>
        <?php else: ?>
            <h1>Nous contacter</h1>
            <form action="index.php?type=static&action=contact&nom=<?= $nom ?>&mail=<?= $mail?>" method="post">
            <input type="hidden" name="_template" value="table">
            <label for="name">Votre nom?</label> <br>
            <input type="text" name="nom" id="nom" value="<?= $nom ?>" required><br>
            <label for="mail">Votre email?</label> <br>
            <input type="email" name="mail" id="mail" value="<?= $mail ?>" required> <br>
            <label for="message">Votre message?</label> <br>
            <textarea name="message" id="message" cols="30" rows="7" required></textarea> <br>
            <button class="boutonSend" type="submit">Envoyer</button>
        </form>
        <?php endif; ?>

    </div>
    <div class="rightContact"">
        <div class="backgroundMaps">
            <div id="map"></div>
            <div class="bottom card">
            </div>
        </div>
    </div>
</div>

