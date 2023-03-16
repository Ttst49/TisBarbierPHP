<div class="post mt-3">

    <a style="position:absolute; left: 30px;" href="index.php?type=accueil&action=index" class="btn btn-outline-success">retour</a>

    <div class="image mb-3"style="display: flex; flex-direction: row;justify-content: center;align-items: center; margin-left: 10px;margin-right: 10px">
        <img src="image/<?= $accueil->getImage() ?>" width="1000" height="750">
    </div>

    <form style="background-color: white" class="form" enctype="multipart/form-data" action="index.php?type=accueil&action=update&id=<?= $accueil->getId() ?>" method="post">
        <label for="image">nouvelle image</label>
        <input type="file" name="image" id="image">
        <input type="hidden" name="idUpdate" id="idUpdate" value="<?= $accueil->getId() ?>">
        <button class="btn-warning btn" type="submit">Update</button>
    </form>


</div>

<hr>
