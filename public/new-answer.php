<?php
require '../app/Manager/AnswerManager.php';
require '../app/Manager/QuestionManager.php';

$questionManager = new QuestionManager();
$questions = $questionManager->getAll();


$message ="";

if(isset($_POST['submit']))
{
    var_dump($_POST);

    if(!empty($_POST['text']))
    {
        $text =$_POST['text'];
        echo $text;

        if(!empty($_POST['question_id']))
        {
            $question_id =$_POST['question_id'];
            echo $question_id;

            if(isset($_POST['isTheGoodAnswer']))
            {
                $isTheGoodAnswer = $_POST['isTheGoodAnswer'];
                echo $isTheGoodAnswer;
                $manager = new AnswerManager();
                $answer_id=$manager->insert($text,$question_id, $isTheGoodAnswer);
                echo $answer_id;
                // header('Location: /index_answer.php'); die;
            }
            else 
            {
                $message ='<p>Merci d\'indiquer si la réponse est bonne ou fausse </p>';
            }
        }
        else 
        {
            $message ='<p>Merci de préciser la question </p>';
        }

    }
    else 
    {
        $message = 'le texte de la réponse est obligatoire';
    }
}

require '../template/new-answer.tpl.php';