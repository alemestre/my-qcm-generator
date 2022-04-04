<?php require '../template/partial/_top.tpl.php'; ?>
    <div class="container">
        <div class="my-4">
            <button type="button" class="btn btn-outline-info"><a href="index_question.php">Revenir aux questions</a></button>
        </div>
            <h2>Modifier la question : </h2>  
            <form method="post" class="px-4 py-2" action="#">
                <div class="mb-3">
                    <input type="hidden" name="question_id" value=<?=$question->getQuestionId()?>>
                    <label for="question_title" style="width: 100%" class="form-label">
                        <input name="title" value="<?=htmlspecialchars($question->getTitle());?>" class="form-control" id="question_title"></input>
                    </label>
                </div>
                <select name="QCM_id">
                    <?php foreach($qcms as $qcm): ?>
                        <option value="<?= $qcm->getQCMId() ?>"><?= $qcm->getTitle() ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" name="submit" class="btn btn-outline-dark" value="Enregistrer la modification"></input>
            </form>
            <?php if (!empty($message)) :?>
            <div class="alert alert-warning" >
                <?= $message;?>
            </div>
            <?php endif ;?>
        </div>
<?php require '../template/partial/_bottom.tpl.php';?>