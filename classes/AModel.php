<?php

abstract class AModel{
    
    static protected $table;
    static protected $columns;
    
    static function GetTableName(){
        
        return static::$table;
    }
    
    static public function findAll($order="DESC"){
       $dbh = new DbConnecion(static::GetTableName());
       $sql = "SELECT * FROM " . static::GetTableName(). " ORDER BY `id` ". $order;
       return  $dbh->query($sql);
    }
    static public function findByPk($id){
       $dbh = new DbConnecion(static::GetTableName());
       $sql = "SELECT * FROM " . static::GetTableName() . " WHERE `id` = " . $id; 
       $result = $dbh->query($sql);
       return  $result[0]; 
    }
    static public function deleteByPk($id){
       $dbh = new DbConnecion(static::GetTableName());
       $sql = "DELETE FROM " . static::GetTableName() . " WHERE `id` = " . $id; 
       $result = $dbh->query_no_return($sql);
       return $result;
    }
    static public function getConnection(){
        return new DbConnecion(static::GetTableName());
    }
    
    public function save(){
        
        $tokens = [];
        $values = [];
        $columns =[];
        
        $dbh = static::GetConnection();
        
        foreach(static::$columns as $column)
        {
            $tokens[]=':' . $column;
            $values[':' . $column]= $this->$column;
            $columns[] = $column . '=:' . $column;
        }
        if(!isset($this->id))
        {
            $sql = 'INSERT INTO ' . static::$table . ' (' .
                implode(',', static::$columns) . ') 
                VALUES (' . implode(',', $tokens) . ')';
            $dbh->query_no_return($sql,$values);
            $this->id = $dbh->lastInsertId();
        }
        else 
        {
            $sql= 'UPDATE ' . static::$table .
                  ' SET ' . implode(',', $columns) .
                  ' WHERE `id`=:id';
            $dbh->query_no_return($sql,[':id' => $this->id] + $values);
           
        }   
    }
    
    
}

