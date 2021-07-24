<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nam = array(
            1990,
            1991,
            1992,
            1993,
            1994
        );
        foreach ($nam as $key => $value) {
            echo $value. "<br>";
        }
        foreach ($nam as $key => $value) {
            echo $key. "<br>";
            
        }
    ?>  
</body>
</html>