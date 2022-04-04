<?php

if(isset($_POST['submit']) && isset($_POST['question_id']))
{

    require '../app/Manager/QuestionManager.php';
    $questionManager = new QuestionManager();
    $questionManager->delete($_POST['question_id']);

    header('Location: /index_question.php'); die;

}