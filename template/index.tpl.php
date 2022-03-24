<?php require '../template/partials/_top.tpl.php' ;?>
<h1>QCM</h1>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Titres</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($qcms as $qcm) :?>
        <tr>
            <td><?=$qcm->getId()?></td>
            <td><?=$qcm->getTitle()?></td>
            <td></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>

<div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" >
    <label class="form-check-label" for="flexRadioDefault1"></label>
</div>


<?php require '../template/partials/_top.tpl.php' ;?>