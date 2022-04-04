<?php require '../template/partial/_top.tpl.php';?>

<div class="container">
<button type="button" class="my-4 btn btn-outline-info"><a href="index.php">Retour</a></button>
    <h1>Liste des questions</h1>
<table class='my-4' >
    <thead>
        <tr >
            <th>id</th>
            <th>Question</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="mx-4">
        <?php foreach ($questions as $question):?>
        <tr>
            <td><?= $question->getQuestionId() ?></td>
            <td><?= $question->getTitle() ?></td>
            <div >
                <td>
                    <button type="button" class="btn btn-primary btn-sm"><a class="mx-2" href="index_answer.php?question_id=<?= $question->getQuestionId()?>">Ajouter des réponses</a></button>
                    <button type="button" class="btn btn-secondary btn-sm"><a class="mx-2" href="edit-question.php?question_id=<?=$question->getQuestionId();?>">Modifier</a></button>
                    <form  id="delete-form" action="delete-question.php" method="post">
                        <input type="hidden" name="question_id" value=<?= $question->getQuestionId()?>>
                        <input type="submit" name="submit" id="btn-delete" class="btn btn-danger btn-sm" value='Supprimer'>
                    </form>
                </td>
            </div>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<button type="button" class="btn btn-info"><a href="new-question.php">Créer une nouvelle question</a></button>
</div>


<?php require '../template/partial/_bottom.tpl.php';?>