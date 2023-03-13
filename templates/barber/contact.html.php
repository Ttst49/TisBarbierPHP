<div class="contactPage container-fluid">
    <div class="leftContact">
        <?php if (!$nom && !$mail): ?>
        <form action="#" method="get">
            <label for="name">Votre nom?</label> <br>
            <input type="text" name="name" id="name"> <br>
            <label for="mail">Votre email?</label> <br>
            <input type="text" name="mail" id="mail"> <br>
            <label for="message">Votre message?</label> <br>
            <textarea name="message" id="message" cols="30" rows="7"></textarea> <br>
            <button class="boutonSend" type="submit">Envoyer</button>
        </form>
        <?php else: ?>
        <form action="#" method="get">
        <label for="name">Votre nom?</label> <br>
        <input type="text" name="name" id="name" value="<?= $nom ?>"><br>
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

