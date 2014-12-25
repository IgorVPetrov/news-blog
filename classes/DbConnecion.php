<?php

class DbConnecion {
    
    private $dbh;
    private $sth;
    private $table_name;
    
    private function config()    
    {
        return include __DIR__ . '/../config/config_db.php';
    }
    public function __construct($table_name){
        
        $config = $this->config();
        $this->table_name = $table_name;
        $this->dbh = new PDO($config['dsn'],$config['user'],$config['password']);        
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    }
        
    public function query($sql,$params=null){
        $this->sth = $this->dbh->prepare($sql);
        $this->sth->setFetchMode(PDO::FETCH_CLASS, ucfirst($this->table_name)."Model");
        $this->sth->execute($params);
        return $this->sth->fetchAll();
        
    }
    public function query_no_return($sql,$params=null){
        $this->sth = $this->dbh->prepare($sql);
        return $this->sth->execute($params);   
    }
    
    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }
    
    
    
        
        
    
}
