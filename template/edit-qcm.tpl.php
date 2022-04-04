<?php require '../template/partial/_top.tpl.php'; ?>
    <div class="container">
        <div class="my-4">
            <button type="button" class="btn btn-outline-info"><a href="index.php">Retour</a></button>
        </div>
            <h2>Modifier le titre du QCM : </h2>  
            <form method="post" class="px-4 py-2" action="#">
                <div class="mb-3">
                    <input type="hidden" name="QCM_id" value=<?=$qcm->getQCMId()?>>
                    <label for="qcm_title" style="width: 100%" class="form-label">
                        <input name="title" value="<?=htmlspecialchars($qcm->getTitle());?>"></input>
                    </label>
                </div>
                <input type="submit" name="submit" class="btn btn-outline-dark" value="Enregistrer la modification"></input>
            </form>
            <?php if (!empty($message)) :?>
            <div class="alert alert-warning" >
                <?= $message;?>
            </div>
            <?php endif ;?>
        </div>
<?php require '../template/partial/_bottom.tpl.php';?>