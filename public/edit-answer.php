<?php 
require '../app/Manager/AnswerManager.php';
require '../app/Manager/QuestionManager.php';
$questionManager = new QuestionManager;
$questions=$questionManager->getAll();

$answer_id = !empty($_GET['answer_id']) ? $_GET['answer_id'] : null;

$manager = new AnswerManager();

$answer = $manager->get($answer_id);


$message ="";

if (isset($_POST['submit']))
{
    if (!empty($_POST['text']))
    {
        $updated_text = $_POST['text'];
    }
    else 
    {
        $message = "<p> Le texte est obligatoire </p>";
    }
    if (!empty($_POST['question_id']))
    {
        $question_id = $_POST['question_id'] ;
    }
    else 
    {
        $message .="<p> Le choix d'une question est obligatoire </p>";
    }
    if (isset($question_id) && isset($updated_text))
    {
        if ($question_id==$answer->getQuestionId())
        {
            $manager->updateOne($updated_text,$answer_id, $question_id);
            header('Location: index_answer.php');
        }             
        else 
        {
            $message .= "<p> La réponse ne correspond pas à la question sélectionnée </p>";
        }
    }

}
    
require '../template/edit-answer.tpl.php';