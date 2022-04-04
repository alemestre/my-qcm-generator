<?php require '../template/partial/_top.tpl.php'; ?>
    <div class="container">
        <div class="my-4">
            <button type="button" class="btn btn-outline-info"><a href="index_answer.php">Revenir aux réponses</a></button>
        </div>
            <h2>Modifier la réponse : </h2>  
            <form method="post" class="px-4 py-2" action="#">
                <div class="mb-3">
                    <input type="hidden" name="answer_id" value=<?=$answer->getAnswerId()?>>
                    <label for="answer_text" style="width: 100%" class="form-label">
                        <input name="text" value="<?=htmlspecialchars($answer->getText());?>" class="form-control" id="answer_text"></input>
                    </label>
                </div>
                <select name="question_id">
                    <?php foreach($questions as $question): ?>
                        <option value="<?= $question->getQuestionId() ?>"><?= $question->getTitle() ?></option>
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