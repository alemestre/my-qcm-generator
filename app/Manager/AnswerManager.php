<?php
require '../app/Entity/Answer.php';
require_once '../app/Manager/Manager.php';

class AnswerManager extends Manager{
    
    public function getAll()
    {
        $req = $this->getPdoInstance()->prepare("SELECT * FROM `answer`");
        $req->execute();
        $answers = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($answers as $answer) 
        {
            $result[] = (new Answer())->hydrate($answer);
        }
        return $result;
    }

    public function get(string $answer_id) : Answer
    {
        $req = $this->getPdoInstance()->prepare("SELECT * FROM `answer` WHERE answer_id=:answer_id");
        $req->execute([
            'answer_id'=>$answer_id
        ]);
        $answer = $req->fetch(PDO::FETCH_ASSOC);
        
        $obj = (new Answer())->hydrate($answer);
    
        return $obj;
    }


    
    public function insert(string $text, string $question_id, bool $isTheGoodAnswer) : int
    {
        $sql = "INSERT INTO answer (text, question_id, isTheGoodAnswer) VALUES (:text, :question_id, :isTheGoodAnswer)";
        $req=$this->getPdoInstance()->prepare($sql);
        $req->execute([
            'text'=>$text,
            'question_id'=>intval($question_id),
            'isTheGoodAnswer'=>intval($isTheGoodAnswer) ? 1 : 0
        ]);
        var_dump($req);

        return $this->getPdoInstance()->lastInsertId();
    }

    public function updateOne(string $text, string $answer_id, string $question_id) 
    {
        $sql = "UPDATE answer SET text=:text WHERE answer_id= :answer_id AND question_id= :question_id";
        $req=$this->getPdoInstance()->prepare($sql);
        $req->execute([
            'text'=>$text,
            'answer_id'=>intval($answer_id),
            'question_id'=>intval($question_id)
        ]);

    }

    public function delete(string $answer_id)
    {
        $sql = "DELETE FROM answer WHERE answer_id= :answer_id";
        $req=$this->getPdoInstance()->prepare($sql);
        $req->execute([
            'answer_id'=>intval($answer_id),
        ]);
    }
}
