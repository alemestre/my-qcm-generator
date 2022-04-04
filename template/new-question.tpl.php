<?php require '../template/partial/_top.tpl.php'; ?>
    <div class="container">
        <button type="button" class="btn btn-outline-info"><a href="index_question.php">Revenir aux questions</a></button>
        <h1>Nouvelle question</h1>  
            <form method="post" class="px-4 py-2" action="#">
                <div class="mb-3">
                    <label for="question_title" class="form-label">Titre de la question</label>
                    <input type="text" name="title" class="form-control" id="question_title" >
                </div>
                <label> Sélectionner le QCM :
                <select name="QCM_id">
                    <?php foreach($qcms as $qcm): ?>
                        <option value="<?= $qcm->getQCMId() ?>"><?= $qcm->getTitle() ?></option>
                    <?php endforeach; ?>
                </select>
                </label>
                <div class="my-4">
                    <input type="submit" name="submit" class="btn btn-outline-dark" value="Enregistrer"></input>
                </div>
            </form>
            <?php if (!empty($message)) :?>
                <div class="alert alert-warning" >
                    <?= $message;?>
                </div>
            <?php endif ;?>
        </div>
<?php require '../template/partial/_bottom.tpl.php';?>