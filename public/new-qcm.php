<?php
require '../app/Manager/QcmManager.php';

$message ="";

if(isset($_POST['submit']))
{
    if(!empty($_POST['title']))
    {
        $manager = new QcmManager();
        $qcm_id=$manager->insert($_POST['title']);

        if($qcm_id)
        {
            header('Location: ./');die;
        }
        else
        {
            $question ="Une erreur s'est produite";
        }
    }
    else 
    {
        $message = 'le titre est obligatoire';
    }
}

require '../template/new-qcm.tpl.php';