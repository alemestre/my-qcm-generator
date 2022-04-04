<?php require '../template/partial/_top.tpl.php';?>

<div class="container">
<button type="button" class="my-4 btn btn-outline-info"><a href="index_question.php">Retour</a></button>
    <h1>Mes réponses</h1>
<table class='my-4' >
    <thead>
        <tr >
            <th>id</th>
            <th>Réponses</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="mx-4">
        <?php foreach ($answers as $answer):?>
        <tr>
            <td><?= $answer->getAnswerId() ?></td>
            <td><?= $answer->getText() ?></td>
            <td>
                <button type="button" class="btn btn-secondary btn-sm"><a class="mx-2" href="edit-answer.php?answer_id=<?=$answer->getAnswerId();?>">Modifier</a></button>
            </td>
            <td>     
            <form id="delete-form" action="delete-answer.php" method="post">
                        <input type="hidden" name="answer_id" value=<?= $answer->getAnswerId()?>>
                        <input type="submit" name="submit" id="btn-delete" class="btn btn-danger btn-sm" value='Supprimer'>
                    </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<button type="button" class="btn btn-primary"><a href="new-answer.php">Créer une nouvelle réponse</a></button>
</div>


<?php require '../template/partial/_bottom.tpl.php';?>