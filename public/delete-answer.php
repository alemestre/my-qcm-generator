<?php

if(isset($_POST['submit']) && isset($_POST['answer_id']))
{

    require '../app/Manager/AnswerManager.php';
    $answerManager = new AnswerManager();
    $answerManager->delete($_POST['answer_id']);

    header('Location: /index_answer.php'); die;

}