<?php

class QueryBuilder{
    
    protected $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from $table");
        $statement -> execute();   
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectSome($table,$limit,$index){
        $statement = $this->pdo->prepare("select * from $table ORDER BY id LIMIT $index,$limit");
        $statement -> execute();   
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}