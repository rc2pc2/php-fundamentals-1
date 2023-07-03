<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check word</title>
</head>
<body>

    <?php

        $words = [
            'mare',
            'sole',
            'vesuvio',
            'pizza',
            'mozzarella',
            'paperino'
        ];

        if ( empty($_GET['word'])){
            echo 'Please type a word to see if it is present';
        } else {
            if ( in_array($_GET['word'], $words) ){
                echo 'found it!';
            } else {
                echo '4000004 not found';
            }
        }
    ?>

    <form action="./checkWord.php" method="get">
        <label for="word">
            Check if a word is present
        </label>

        <input type="text" name="word" id="word">
        <input type="submit" value="check">
    </form>

</body>
</html>

