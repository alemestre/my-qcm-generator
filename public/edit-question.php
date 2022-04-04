<?php 
require '../app/Manager/QcmManager.php';
require '../app/Manager/QuestionManager.php';
$qcmManager = new QcmManager;
$qcms=$qcmManager->getAll();

$question_id = !empty($_GET['question_id']) ? $_GET['question_id'] : null;

$manager = new QuestionManager();

$question = $manager->get($question_id);


$message ="";

if (isset($_POST['submit']))
{
    if (!empty($_POST['title']))
    {
        $updated_title = $_POST['title'];
    }
    else 
    {
        $message = "<p> Le titre est obligatoire </p>";
    }
    if (!empty($_POST['QCM_id']))
    {
        $QCM_id = $_POST['QCM_id'] ;
    }
    else 
    {
        $message .="<p> Le choix d'un QCM est obligatoire </p>";
    }
    if(isset($updated_title) && isset($QCM_id))
    {
        
        if ($QCM_id==$question->getQCMId())
        {
            $updated_question = $manager->updateOne($updated_title,$question_id, $QCM_id);
            header('Location: index_question.php');
        }
        else 
        {
            $message .= "<p> La question ne correspond pas au QCM sélectionné </p>";
        }
    }
}
    
require '../template/edit-question.tpl.php';