<?php require '../template/partial/_top.tpl.php'; ?>  
    <div class="container">
    <button type="button" class="my-4 btn btn-outline-info"><a href="index_question.php">Revenir aux questions</a></button>
        <h1>Nouveau QCM</h1> 
            <form method="post" action="new-qcm.php">
                <div class="mb-3">
                    <label for="qcm_title" class="form-label">Titre du QCM</label>
                    <input type="text" name="title" class="form-control" id="qcm_title" >
                </div>
                <input type="submit" name="submit" class="btn btn-outline-dark" value="Créer"></input>
            </form>
            <?php if(!empty($message)) :?>
            <div class="alert alert-warning">
                <?= $message;?>
            </div>
            <?php endif ;?>
        </div>
<?php require '../template/partial/_bottom.tpl.php';?>