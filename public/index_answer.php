<?php
require '../app/Manager/AnswerManager.php';
require '../app/Manager/QuestionManager.php';

$answerManager = new answerManager();
$answers = $answerManager->getAll();

$questionManager = new QuestionManager();

$questions = $questionManager->getAll();

require '../template/index_answer.tpl.php';


