<?php
require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;

?>

<html>
<head></head>
<body>
<p>
    <?php

    $name = null;

    if (isset($_GET["name"])) {
        $name = $_GET["name"];

        echo "Hai " . $name;

        $log = new Logger('index.php');
        $log->info("Hello World");
    }

    ?>
</p>
</body>
</html>