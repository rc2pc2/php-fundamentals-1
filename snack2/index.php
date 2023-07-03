<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

    <?php
        $accessDenied = 'Access denied';
        $accessGranted = 'Access granted';


        if ( empty($_GET['name'])
        || empty($_GET['mail'])
        || empty($_GET['age'])){
            echo 'Please type a name, an email and an age';
        } else {

            if (!strlen($_GET['name']) > 3){
                echo $accessDenied;
            } elseif (! (str_contains($_GET['mail'], '@') &&  str_contains($_GET['mail'], '.')) ){
                echo $accessDenied;
            } elseif (!is_numeric($_GET['age'])){
                echo $accessDenied;
            } else {
                echo $accessGranted;
            }
        }
    ?>

    <form action="./index.php" method="get">
        <label for="word">
            Please insert a name, an email and an age
        </label>

        <input type="text" name="name" id="word">

        <input type="text" name="mail">

        <input type="number" name="age">
        <input type="submit" value="check">
    </form>

</body>
</html>

