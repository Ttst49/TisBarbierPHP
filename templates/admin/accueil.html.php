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

<?php use App\Session;

if ( Session::getUser()){ ?>

<div class="main">
    <div class="container"><h1 class="welcomeText title">Bienvenue chez TisBarbier</h1></div>
</div>

<div class="slogan">
    <div class="container"><h2 class="textSlogan"><a href="index.php?type=user&action=signOut">Se déconnecter</a></h2></div>
</div>

<div class="presentation">
    <div><h3 class="titlePresentation title">Découvrez Baptiste</h3></div>
    <div class="backgroundDefault">
        <div class="left"></div>
        <div> <h4 class="right">
                Dans un salon soigné et épuré, profitez du professionnalisme et du sérieux d’un coiffeur barbier passionné. <br>
                Il vous attend, paire de ciseaux et rasoir à la main pour faire de vous quelqu’un de nouveau. <br>
                Depuis plus de 14 ans, Baptiste s’efforce de fournir un travail de qualité. <br>
            </h4></div>

    </div>
</div>

<div class="prestations">
    <div><h3 class="titlePrestations title">Découvrez ce que nous avons déjà accomplis par ici</h3></div>
    <div class="backgroundDefault">
        <div class="content">
            <div class="barbe">
                <div class="backgroundBarbe"></div>
                <div><h4 class="textBarbe">Barbe</h4></div>
            </div>
            <div class="cheveux">
                <div class="backgroundCheveux"></div>
                <div><h4 class="textCheveux">Cheveux</h4></div>
            </div>
            <div class="total">
                <div class="backgroundTotal"></div>
                <div><h4  class="textTotal">La Totale</h4></div>
            </div>
            <a style="text-decoration: none;" href=""><div class="boutonPrestation">GO</div></a>
        </div>
    </div>
</div>

<div class="contact">
    <div><h3 class="titleContact title">Nous contacter</h3></div>
    <div class="backgroundContact">
        <div><h4 class="textContact">Enchanté, quel est votre nom?</h4></div>
        <div>
            <form action="index.php?type=barber&action=contact" method="post">
                <h5  class="form">
                    <label for="nom"></label>
                    <input type="text" name="nom" id="nom" class="nom" placeholder="Nom" required>
                    <label for="mail"></label>
                    <input type="email" name="mail" id="mail" class="mail" placeholder="Mail" required>
                </h5>
                <h5 class="centered"><button class="boutonContact">Continuer</button></h5>
            </form>

        </div>
    </div>
</div>

<div class="infos container">
    <img class="carte" src="/../TisBarbier/img/carteBaptiste.png" alt="Presentation Card">
</div>


<?php }else{ ?>
    <p class="link">Erreur</p>
<?php } ?>
