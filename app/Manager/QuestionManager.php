<?php

require '../app/Entity/Question.php';
require_once '../app/Manager/Manager.php';

class QuestionManager extends Manager{
    
    public function getAll() : array
    {
        $req = $this->getPdoInstance()->prepare("SELECT * FROM `question`");
        $req->execute();
        $questions = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($questions as $question) 
        {
            $result[] = (new Question())->hydrate($question);

        }
        return $result;
    }

    public function getQuestionsFromQCM($QCM_id) : array
    {
        $req = $this->getPdoInstance()->prepare("SELECT * FROM `question` WHERE QCM_id=:QCM_id");
        $req->execute([
            'QCM_id'=>$QCM_id
        ]);
        $questionsQCM = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($questionsQCM as $questionQCM) 
        {
            $result[] = (new Question())->hydrate($questionQCM);

        }
        return $result;
    }

    public function get(string $question_id) : Question
    {
        $req = $this->getPdoInstance()->prepare("SELECT * FROM `question` WHERE question_id=:question_id");
        $req->execute([
            'question_id'=>intval($question_id)
        ]);
        $question = $req->fetch(PDO::FETCH_ASSOC);
        
        $obj = (new Question())->hydrate($question);
    
        return $obj;
    }


    
    public function insert(string $title, string $QCM_id) : int
    {
        $sql = "INSERT INTO question (title, QCM_id) VALUES (:title, :QCM_id)";
        $req=$this->getPdoInstance()->prepare($sql);
        $req->execute([
            'title'=>$title,
            'QCM_id'=>intval($QCM_id)
        ]);

        return $this->getPdoInstance()->lastInsertId();
    }

    public function updateOne(string $title, string $question_id, string $QCM_id) 
    {
        $sql = "UPDATE question SET title=:title WHERE question_id= :question_id AND QCM_id= :QCM_id";
        $req=$this->getPdoInstance()->prepare($sql);
        $req->execute([
            'title'=>$title,
            'question_id'=>intval($question_id),
            'QCM_id'=>intval($QCM_id)
        ]);

    }

    public function delete(string $question_id)
    {
        $sql = "DELETE FROM question WHERE question_id= :question_id";
        $req=$this->getPdoInstance()->prepare($sql);
        $req->execute([
            'question_id'=>intval($question_id),
        ]);
    }
}
