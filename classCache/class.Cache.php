<?php

class Cache 
{
    protected $cachePath;
    protected $cacheTld;
    protected $newLine;
    
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
        $this->checkConfParams($params);
        
        foreach ($params as $key => $val)
        {
            $this->$key = $val;
        }
        
        $this->checkConf();
    }
    
    /*
     * Check params before
     */
    protected function checkConfParams($params)
    {
        if(!is_array($params))
        {
            $this->error(false, '$config is not array please check it');
            die;
        }
        if(empty($params))
        {
            $this->error(false, '$config is empty array');
            die;
        }
    }
    
    /*
     * Check required protected vars
     */
    protected function checkConf()
    {
        $this->checkCachePath();
        $this->checkCacheTld();
        $this->checkНewLine();
    }
    
    /*
     * check is set cachePath
     */
    protected function checkCachePath()
    {
        if(empty($this->cachePath))
        {
            $this->error(false, 'please set cachePath in $config');
            die;
        }
    }
    
    /*
     * check is set cacheTld
     */
    protected function checkCacheTld()
    {
        if(empty($this->cacheTld))
        {
            $this->error(false, 'please set cacheTls in $config');
            die;
        }
    }
    
    /*
     * Check is set newLine
     */
    protected function checkНewLine()
    {
        if(empty($this->newLine))
        {
            $this->error(false, 'please set newLine in $config');
            die;
        }
    }
    
    /* Display error messages
     * 
     * @var $path bolean
     * @var $error string 
     */
    protected function error($path, $error)
    {
        echo ($path) ? 'Path: ' . __FILE__ . __CLASS__ . __METHOD__ . $this->newLine : '';
        echo 'Error: ' . $error . '';
        die;
    }
}
