<?php

if(isset($_POST['submit']) && isset($_POST['QCM_id']))
{

    require '../app/Manager/QcmManager.php';
    $qcmManager = new QcmManager();
    $qcmManager->delete($_POST['QCM_id']);

    header('Location: /index.php'); die;

}