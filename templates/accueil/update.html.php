<div class="post mt-3">

    <a style="position:absolute; left: 30px;" href="index.php?type=accueil&action=index" class="btn btn-outline-success">retour</a>

    <div class="image mb-3"style="display: flex; flex-direction: row;justify-content: center;align-items: center; margin-left: 10px;margin-right: 10px">
        <img src="image/<?= $accueil->getImage() ?>" width="1000" height="1000">
    </div>

    <form action="index.php?type=accueil&action=update&id=<?= $accueil->getId() ?>" enctype="multipart/form-data" method="get">
        <label for="imageUpdate">nouvelle image</label>
        <input type="file" name="imageUpdate" id="imageUpdate" value="boom.jpg">
        <button class="btn-warning btn" type="submit">Update</button>
    </form>


</div>

<hr>
