<?php

require_once '../app/Entity/Entity.php';

class QCM extends Entity
{
    private string $title;
    private $QCM_id;


    /** @var Question[] */
    private array $questions;

    /**
     * @param Question $question
     * 
     * @return [type]
     */
    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;
    }

    /**
     * Get the value of questions
     */ 
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Permet d'afficher le template HTML d'un QCM
     * @return [type]
     */
    public function show()
    {
       include 'template.php';
    }

    /**
     * Permet de vérifier les réponses du QCM
     * @return [type]
     */
    public function check()
    {
        // ...
        $this->show();
        foreach($_POST['answers'] as $questionKey => $answerKey)
        {
            $question = $this->questions[$questionKey];
            $answers = $question->getAnswers();
            $checkedAnswer = $answers[$answerKey];
            $result = $checkedAnswer->getIsTheGoodAnswer() ? 'bonne' : 'fausse';
            echo "<p>La réponse à la question " . $question->getTitle() . " est " . $result . "</p>";
        }
    }


    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getQCMId()
    {
        return $this->QCM_id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->QCM_id = $id;

        return $this;
    }

    /**
     * Set the value of QCM_id
     *
     * @return  self
     */ 
    public function setQCMId($QCM_id)
    {
        $this->QCM_id = $QCM_id;

        return $this;
    }
}