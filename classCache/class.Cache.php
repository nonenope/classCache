<?php

class Cache 
{
    protected $cachePath;
    protected $cacheTld;
    
    function __construct() 
    {
        //echo __DIR__;
    }
    
        
    /*  Cache Setup
     * 
     *  @var $params sting/array 
     */
    public function setConf($params)
    {
        foreach ($params as $key => $val)
        {
            $this->$key = $val;
        }
    }
}
