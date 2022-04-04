<?php
require '../app/Manager/QcmManager.php';
require '../app/Manager/QuestionManager.php';

$qcmManager = new QcmManager();
$qcms = $qcmManager->getAll();


$message ="";

if(isset($_POST['submit']))
{
    if(!empty($_POST['title']))
    {
        $manager = new QuestionManager();
        $question_id=$manager->insert($_POST['title'],$_POST['QCM_id']);

        if($question_id)
        {
            header('Location: /index_question.php'); die;
        }
        else
        {
            $message = "Une erreur s'est produite lors de l'enregistrement";
        }

    }
    else 
    {
        $message = 'le titre est obligatoire';
    }
}

require '../template/new-question.tpl.php';