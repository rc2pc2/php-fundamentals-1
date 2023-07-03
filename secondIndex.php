<?php
    $randomNum = rand(1, 10);
    var_dump($randomNum);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentals 1.2</title>
</head>
<body>
    <h1>
        Fundamentals
    </h1>
    <div>
        <p>
            <?php
                $array = [
                    'gina',
                    'ginetto',
                    'ginuzzo',
                    'giorgetto'
                ];

                $array[] = 'giorgina';
                array_push($array, 'giorginetta', 'topo gigio', 'topolina');

                // $array['GINA'] = [1,2,3,4,5];

                var_dump($array);

                $arrayLit = [
                    'name' => 'Gina',
                    'surname' => 'Ginotti',
                ];

                // $arrayLit['name'] = [1,2,3,4,5];

                var_dump($arrayLit);
            ?>
        </p>
    </div>

    <ul>
        <?php for ($i=0; $i < 10 ; $i++) { ?>
            <li>
                <p>
                    Element number <?php echo $i; ?>
                </p>
            </li>
        <?php } ?>
    </ul>

    <ul>
        <?php foreach ( $arrayLit as $key => $element ) { ?>
            <li>
                <p>
                    Key <?php echo $key; ?>
                    Element <?php echo $element; ?>
                </p>
            </li>
        <?php } ?>
    </ul>

</body>
</html>

