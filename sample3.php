<!DOCTYPE html>
<html>
<head>
    <title>1から365の数字</title>
</head>
<body>
    <h1>1から365の数字</h1>
    <?php
        for ($i = 1; $i <= 365; $i++) {
            print($i." ");
            if ($i % 20 == 0) print( "<br>"); 
        }
    ?>
</body>
</html>
