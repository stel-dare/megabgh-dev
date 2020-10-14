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

    public function selectSome($table,$limit){
        $statement = $this->pdo->prepare("select * from $table ORDER BY category_name LIMIT $limit");
        $statement -> execute();   
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}