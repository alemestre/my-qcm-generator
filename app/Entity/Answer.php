<?php

require_once '../app/Entity/Entity.php';

class Answer extends Entity
{

    private string $text;
    private int $answer_id;
    private int $question_id;
    private bool $isTheGoodAnswer;

    public function __construct()
    {
        
    }

    // TODO : ajouter les propriétés

    // TODO : ajouter les méthodes


    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of isTheGoodAnswer
     */ 
    public function getIsTheGoodAnswer()
    {
        return $this->isTheGoodAnswer;
    }

    /**
     * Set the value of isTheGoodAnswer
     *
     * @return  self
     */ 
    public function setIsTheGoodAnswer($isTheGoodAnswer)
    {
        $this->isTheGoodAnswer = $isTheGoodAnswer;

        return $this;
    }

    /**
     * Get the value of question_id
     */ 
    public function getQuestionId()
    {
        return $this->question_id;
    }

    /**
     * Get the value of answer_id
     */ 
    public function getAnswerId()
    {
        return $this->answer_id;
    }

    /**
     * Set the value of answer_id
     *
     * @return  self
     */ 
    public function setAnswerId($answer_id)
    {
        $this->answer_id = $answer_id;

        return $this;
    }

    /**
     * Set the value of question_id
     *
     * @return  self
     */ 
    public function setQuestionId($question_id)
    {
        $this->question_id = $question_id;

        return $this;
    }
}