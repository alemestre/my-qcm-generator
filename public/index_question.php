<?php
require '../app/Manager/QuestionManager.php';
require '../app/Manager/QcmManager.php';

$qcmManager = new QcmManager();
$qcms = $qcmManager->getAll();


$questionManager = new QuestionManager();

$questions = $questionManager->getAll();

require '../template/index_question.tpl.php';


