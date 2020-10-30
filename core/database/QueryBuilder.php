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

    public function selectSome(
        $table,$join_products_orders,$where_clause,$order_bestseling,$order_all_or_new,$limit,$index
        )
        {
        $statement = $this->pdo->prepare("select * from $table $join_products_orders $where_clause $order_bestseling $order_all_or_new  LIMIT $index,$limit");
        $statement -> execute();   
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function countQueryResult(
        $table,$join_products_orders,$where_clause,$order_bestseling,$order_all_or_new
        )
        {
        $statement = $this->pdo->prepare("select * from $table $join_products_orders $where_clause $order_bestseling $order_all_or_new ");
        $statement -> execute();   
        return count($statement->fetchAll(PDO::FETCH_OBJ));
    }

    public function selectOne($table,$id){
        $statement = $this->pdo->prepare("select * from $table where id = $id");
        $statement -> execute();   
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    // AUTH METHODS

    public function authUser($email,$password){
        $statement = $this->pdo->prepare("select * from customers where email = '$email' AND password = '$password'");
        $statement -> execute();   
        return count($statement->fetchAll(PDO::FETCH_OBJ));
    }

    public function checkUsernameEmailTaken($field,$value){
        $statement = $this->pdo->prepare("select * from customers where $field = '$value'");
        $statement -> execute();   
        return count($statement->fetchAll(PDO::FETCH_OBJ));
    }

    public function addUser($email,$username,$fName,$lName,$password){
        $statement = $this->pdo->prepare("insert into customers (email, username, first_name, last_name, password) values ('$email','$username','$fName','$lName','$password')");
        $statement -> execute();   
        // return count($statement->fetchAll(PDO::FETCH_OBJ));
    }

    public function setTokenForPasswordReset($email,$token){
        $statement = $this->pdo->prepare("insert into password_resets (email, token) values ('$email','$token')");
        $statement -> execute();   
        // return count($statement->fetchAll(PDO::FETCH_OBJ));
    }
}