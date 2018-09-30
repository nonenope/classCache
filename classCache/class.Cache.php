<?php

class Cache 
{
    protected $cachePath;
    protected $cacheTld;
    protected $newLine;
    protected $cacheName;
    
    function __construct($params = null) 
    {
        $this->checkConfParams($params);
        
        foreach ($params as $key => $val)
        {
            $this->$key = $val;
        }
        
        $this->checkConf();
    }
    
    
    public function set($cacheName, $value, $exp = -1)
    {
        $this->setCacheName($cacheName);
        echo $this->cacheName;
    }
    
    
    
    protected function setCacheName($cacheName)
    {
        if(empty($cacheName))
        {
            $this->error (false, 'Cache name not specify');
        }
        if(!is_string($cacheName))
        {
            $this->error(false, 'Cache name must be a string');
        }
        $this->cacheName = sha1($cacheName);
    }
    
    /*
     * Check params before
     */
    protected function checkConfParams($params)
    {
        if(!is_array($params))
        {
            $this->error(false, '$config is not array please check it');
        }
        if(empty($params))
        {
            $this->error(false, '$config is empty array');
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
