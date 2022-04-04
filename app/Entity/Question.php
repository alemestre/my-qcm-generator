<?php

require_once '../app/Entity/Entity.php';

class Question extends Entity
{

    // TODO : ajouter les propriétés
    private int $question_id;
    
    private string $title;

    private array $answers;

    private int $QCM_id;

    public function __construct()
    {
    
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

    // TODO : Compléter les méthodes

    public function addAnswer(Answer $answer)
    {
        $this->answers[] = $answer;
    }

    /**
     * Get the value of answers
     */ 
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Get the value of QCM_id
     */ 
    public function getQCMId()
    {
        return $this->QCM_id;
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

    /**
     * Get the value of id
     */ 
    public function getQuestionId()
    {
        return $this->question_id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setQuestionId($id)
    {
        $this->question_id = $id;

        return $this;
    }
}