<?php require '../template/partial/_top.tpl.php'; ?>
    <div class="container">
        <button type="button" class="btn btn-outline-info"><a href="index_answer.php">Revenir aux réponses</a></button>
        <h1 class="mb-4">Nouvelle réponse</h1>  
        
            <form method="post" class="px-4 py-2" action="#">
                <div class="my-3">
                    <label for='question'> Sélectionner une question : 
                        <select name="question_id">
                        <?php foreach($questions as $question): ?>
                        <option value="<?= $question->getQuestionId() ?>"><?= $question->getTitle() ?></option>
                        <?php endforeach; ?>
                        </select>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="reponse_texte" class="form-label">Texte de la réponse : </label>
                    <input type="text" name="text" class="form-control" id="reponse_texte" >
                </div>
                <div class="mb-3">
                    <label>Est ce la bonne réponse à la question ?</label>
                    <input type="radio" id="true" name="isTheGoodAnswer" value='true'> Oui </input>
                    <input type="radio" id="false" name="isTheGoodAnswer" value='false'> Non </input>
                </div>
               
                <input type="submit" name="submit" class="btn btn-outline-dark" value="Enregistrer"></input>
            </form>
            <?php if (!empty($message)) :?>
                <div class="alert alert-warning" >
                    <?= $message;?>
                </div>
            <?php endif ;?>
        </div>
<?php require '../template/partial/_bottom.tpl.php';?>