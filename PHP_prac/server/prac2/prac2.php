<html lang="ru">
<head>
    <title>Zubkov Mihail IKBO-30-20</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <?php
        $number = $_GET['num'];
        switch($number){
            case 1:
                echo "<div class='d1'></div>";
                break;
            case 2:
                echo "<div class='d2'></div>";
                break;
            case 3:
                echo "<div class='d3'></div>";
                break;
            case 4:
                echo "<div class='d13'></div>";
                break;
        }
    ?>
    
</body>
</html>