<?php 
require '../app/Manager/QcmManager.php';

$QCM_id = !empty($_GET['qcm_id']) ? $_GET['qcm_id'] : null;

$manager = new QCMManager();

$qcm = $manager->get($QCM_id);


$message ="";

if (isset($_POST['submit']))
{
    if (!empty($_POST['title']))
    {
        $updated_title = $_POST['title'];
        $manager->updateOne($updated_title, $QCM_id);
        header('Location: index.php');
    }
    else 
    {
        $message = "<p> Le titre est obligatoire </p>";
    }

}
    
require '../template/edit-qcm.tpl.php';