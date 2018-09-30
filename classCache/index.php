<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'class.Cache.php';
        $cache = new Cache;
        
        $config = array(
            'cachePath' => 'cache/',
            'cacheTld'  => 'cache',
            'newLine'   => '<br>'
        );
         
        $cache->setConf($config);
        ?>
    </body>
</html>
