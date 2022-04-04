<?php require '../template/partial/_top.tpl.php'; ?>

<div class="container">
    <h1>Mes Qcms</h1>
<table class='my-4'>
    <thead>
        <tr >
            <th>id</th>
            <th>QCM</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="mx-4">
        <?php foreach ($qcms as $qcm):?>
        <tr>
            <td><?= $qcm->getQCMId() ?></td>
            <td><?= $qcm->getTitle() ?></td>
            <div >
                <td>
                <button type="button" class="btn btn-primary btn-sm"><a class="mx-2" href="index_question.php?qcm_id=<?=$qcm->getQCMId()?>">Ajouter des questions</a></button>
                <button type="button" class="btn btn-secondary btn-sm"><a class="mx-2" href="edit-qcm.php?qcm_id=<?=$qcm->getQCMId()?>">Modifier</a></button>
                <form id="delete-form" action="delete-qcm.php" method="post">
                        <input type="hidden" name="QCM_id" value=<?= $qcm->getQCMId()?>>
                        <input type="submit" name="submit"  class="btn btn-danger btn-sm" value='Supprimer'>
                    </form>
                </td>
            </div>
        </tr>
        
        <?php endforeach;?>
    </tbody>
</table>
<button class="btn btn-outline-info my-4"><a href="new-qcm.php">Créer un nouveau QCM</a></button>
</div>


<?php require '../template/partial/_bottom.tpl.php';?>



