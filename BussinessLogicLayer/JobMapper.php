<?php

require_once "Database.php";

class JobMapper extends DatabaseConfig implements JobRepository {
    private $connection;
    private $query;

    public function __construct(){
        $this->connection = $this->getConnection();
    }

    public function insertJob(Job $job){
        $this->query = "insert into puna (emri, pershkrimi, foto)
        values (:emri, :pershkrimi, :foto)";

        $statement = $this->connection->prepare($this->query);
        
        $emri = $job->getEmri();
        $pershkrimi = $job->getPershkrimi();
        $foto = $job->getFoto();

        $statement->bindParam(":emri", $emri);
        $statement->bindParam(":pershkrimi", $pershkrimi);
        $statement->bindParam(":foto", $foto);

        $statement->execute();
    }

    public function getAllJobs(){
        $this->query = "select * from puna";
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getJobById($job_id){
        $this->query = "select * from puna where puna_id=:puna_id";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam("puna_id",$job_id );
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteJob($pid){
        $this->query = "DELETE FROM puna WHERE puna_id=:id";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":id", $pid);
        $statement->execute();
    }
}
?>