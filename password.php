<?php
    session_start();

    $_SESSION['lenght'] = $_GET['lenght'];
    $password = $_SESSION['password'] ;


    if(empty($_SESSION['lenght'])){
        header('Location: ./index.php');
    }

    var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>PHP Strong Password Generator</title>
    </head>
    <body>
        <div class="container mt-5">
            <input class="form-control" type="text" value="<?php echo $password; ?>" disabled readonly>
        </div>
    </body>
</html>