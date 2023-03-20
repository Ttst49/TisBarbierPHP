<div class="post mt-3">

    <a style="position:absolute; left: 30px;" href="index.php?type=images&action=index" class="btn btn-outline-success">retour</a>

    <?php if ($image): ?>

    <div class="image mb-3"style="display: flex; flex-direction: row;justify-content: center;align-items: center; margin-left: 10px;margin-right: 10px">
        <img src="image/<?= $image->getImage() ?>" width="1000" height="750">
    </div>

    <form style="background-color: white" class="form" enctype="multipart/form-data" action="index.php?type=images&action=update&id=<?= $image->getId() ?>" method="post">
        <label for="image">nouvelle image</label>
        <input type="file" name="image" id="image">
        <input type="hidden" name="idUpdate" id="idUpdate" value="<?= $image->getId() ?>">
        <input type="hidden" name="ancienneImage" value="<?= $image->getImage() ?>">
        <button class="btn-warning btn" type="submit">Update</button>
    </form>


    <?php endif; ?>

    <?php if ($offre): ?>

        <div class="price mb-3"style="display: flex; flex-direction: column;justify-content: center;align-items: center; font-size: 4vh; color: #384896">
            <h1><span class="tarifs"><?= $offre->getContent()?>:</span></h1>
            <h2><p><?= $offre->getPrice() ?>€</p></h2>
        </div>

        <form style="background-color: white" class="form" enctype="multipart/form-data" action="index.php?type=offre&action=update&id=<?= $offre->getId() ?>" method="post">
            <label for="price">nouveau prix</label>
            <input type="number" name="price" id="price">
            <input type="hidden" name="idUpdate" id="idUpdate" value="<?= $offre->getId() ?>">
            <input type="hidden" name="ancienPrix" value="<?= $offre->getPrice() ?>">
            <button class="btn-warning btn" type="submit">Update</button>
        </form>


    <?php endif; ?>


</div>

<hr>
