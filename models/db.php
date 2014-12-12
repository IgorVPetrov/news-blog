<?php

class DataBase{
    
    private function config()    
    {
        return include __DIR__ . '/../config.php';
    } 
    
    public function __construct() 
    {
        $config = $this->config();
        $link = mysql_connect(
            $config['db']['host'],
            $config['db']['user'],
            $config['db']['password']
        );
        if (!$link) 
        {
           die('Could not connect: ' . mysql_error());
        }
        if(!mysql_select_db($config['db']['dbname']))
        {
           die('Could not select db: ' . mysql_error()); 
        }  
    }    
    
    public function query($sql)
    {

        $res = mysql_query($sql);
        if (!$res) {
            echo mysql_error();
            return [];
        }

        $ret = [];
        while ($row = mysql_fetch_assoc($res))
        {
            $ret[] = $row;
        }
        return $ret;
    }  
}



