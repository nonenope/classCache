<?php

class Cache 
{
    protected $cachePath;
    protected $cacheTld;
    
    function __construct() 
    {
        //echo __DIR__;
    }
    
    public function setConf($params)
    {
        foreach ($params as $key => $val)
        {
            $this->$key = $val;
        }
    }
}
