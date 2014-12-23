<?php

abstract class AModel{
    
    static protected $table;
    
    static function GetTableName(){
        
        return static::$table;
    }
    
    static public function findAll(){
        
       $dbh = new DbConnecion(static::GetTableName());
       return  $dbh->findAll();
    }
    static public function findByPk($id){
       $dbh = new DbConnecion(static::GetTableName());
       return  $dbh->findByPk($id);   
    }
    
    
}

