<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $config = array(
            'cachePath' => 'cache/',
            'cacheTld'  => 'cache',
            'newLine'   => '<br>'
        );
        
        require_once 'class.Cache.php';
        $cache = new Cache($config);
        ?>
    </body>
</html>
