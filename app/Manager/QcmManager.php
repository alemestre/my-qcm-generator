<?php 

require '../app/Entity/QCM.php';

class QcmManager {

    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo= new PDO('mysql:host=localhost:3306;dbname=qcm', 'root', '');
        } catch (PDOException $e) 
        {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getAll(){
        $sql = 'SELECT * FROM qcm';
        $req=$this->pdo->prepare($sql);
        $req->execute();

        $qcms= $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($qcms as $qcm)
        {
            $obj = new QCM();
            $obj->setTitle($qcm['title']);
            $obj->setId($qcm['QCM_id']);
            $result[]=$obj;
        }

        return $result;
    }


}