<?php

require '../app/Entity/QCM.php';
require_once '../app/Manager/Manager.php';

class QcmManager extends Manager{
    
    
    public function getAll()
    {
        $req = $this->getPdoInstance()->prepare("SELECT `QCM_id`, `title` FROM `qcm`");
        $req->execute();
        $qcms = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($qcms as $qcm) 
        {
            $result[] = (new QCM())->hydrate($qcm);
        }
        return $result;
    }

    public function get(string $QCM_id) : QCM
    {
        $req = $this->getPdoInstance()->prepare("SELECT * FROM `qcm` WHERE QCM_id=:QCM_id");
        $req->execute([
            'QCM_id'=>intval($QCM_id)
        ]);
        $qcm = $req->fetch(PDO::FETCH_ASSOC);
        var_dump($qcm);echo $QCM_id;
        $obj = (new QCM())->hydrate($qcm);
    
        return $obj;
    }

    public function insert(string $title) : int
    {
        $sql = "INSERT INTO qcm (title) VALUES (:title)";
        $req=$this->getPdoInstance()->prepare($sql);
        $req->execute([
            'title'=>$title
        ]);

        return $this->getPdoInstance()->lastInsertId();
    }

    public function updateOne(string $title, string $QCM_id) 
    {
        $sql = "UPDATE qcm SET title=:title WHERE QCM_id= :QCM_id";
        $req=$this->getPdoInstance()->prepare($sql);
        $req->execute([
            'title'=>$title,
            'QCM_id'=>intval($QCM_id)
        ]);

    }

    public function delete(string $QCM_id)
    {
        $sql = "DELETE FROM qcm WHERE QCM_id= :QCM_id";
        $req=$this->getPdoInstance()->prepare($sql);
        $req->execute([
            'QCM_id'=>intval($QCM_id),
        ]);
    }

    
}