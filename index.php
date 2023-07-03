<?php
    $randomNum = rand(1, 10);
    var_dump($randomNum);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentals 1</title>
</head>
<body>
    <h1>
        Fundamentals
    </h1>
    <div>
        <p>
            The random generated number
            <?php
                $result = $randomNum . ' is ';
                if ($randomNum % 2 === 0) {
                    //  ? $result = $result . " is even";
                    $result .= "even";
                } else {
                    // # $result = $result . " is odd";
                    $result .= "odd";
                }

                echo $result;
            ?>
        </p>
    </div>

    <?php

        // ? null coalescing operator
        $data = $_GET['data'] ?? 'empty data';
        var_dump($data);

    ?>
</body>
</html>

