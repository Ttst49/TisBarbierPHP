<div class="contactPage container-fluid">
    <div class="leftContact">
        <?php if (!$nom && !$mail): ?>
        <form action="index.php?type=barber&action=contact" method="post">
            <label for="name">Votre nom?</label> <br>
            <input type="text" name="nom" id="nom"> <br>
            <label for="mail">Votre email?</label> <br>
            <input type="text" name="mail" id="mail"> <br>
            <label for="message">Votre message?</label> <br>
            <textarea name="message" id="message" cols="30" rows="7"></textarea> <br>
            <button class="boutonSend" type="submit">Envoyer</button>
        </form>
        <?php else: ?>
        <form action="index.php?type=barber&action=contact&nom=<?= $nom ?>&mail=<?= $mail?>" method="post">
        <label for="name">Votre nom?</label> <br>
        <input type="text" name="nom" id="nom" value="<?= $nom ?>"><br>
        <label for="mail">Votre email?</label> <br>
        <input type="text" name="mail" id="mail" value="<?= $mail ?>"> <br>
        <label for="message">Votre message?</label> <br>
        <textarea name="message" id="message" cols="30" rows="7"></textarea> <br>
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

