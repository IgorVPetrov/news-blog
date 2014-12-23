<?php

class DbConnecion {
    
    private $dbh;
    private $sth =[];
    
    private function config()    
    {
        return include __DIR__ . '/../config/config_db.php';
    }
    public function __construct($table_name){
        
        $config = $this->config();
        $this->dbh = new PDO($config['dsn'],$config['user'],$config['password']);        
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->sth['all'] = $this->dbh->prepare("SELECT * FROM " .  $table_name);
        $this->sth['all']->setFetchMode(PDO::FETCH_CLASS, ucfirst($table_name)."Model");
        $this->sth['byPk'] = $this->dbh->prepare("SELECT * FROM " .  $table_name .
                                                 "WHERE `id` = :id");
        $this->sth['byPk']->setFetchMode(PDO::FETCH_CLASS, ucfirst(table_name)."Model");
    }
        
    public function findAll(){
        $this->sth['all']->execute();
        return $this->sth['all']->fetchAll();
        
    }
    public function findByPk($id){
        
        return $this->sth['byPk']->execute([':id' => $id])->fetchAll();
        
    }
        
        
    
}
