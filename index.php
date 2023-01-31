<?php
    session_start();

    include __DIR__ . '/partials/functions.php';

    $password = "";

    if(isset($_GET['lenght']) && $_GET['lenght'] !== ''){
        
        $password = generatePassword($_GET['lenght']);
    }

    $_SESSION['password'] = $password;

    if($_SESSION['password'] && $_GET['lenght'] !== ''){
        header('Location: ./password.php');
    }

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
            <h1 class="text-center">Genera una password sicura</h1>
            <form action="./index.php" method="GET" class="row align-items-center mt-3">
                <div class="col-auto">
                    <label for="input-lenght" class="form-label">Lunghezza della password</label>
                </div>
                <div class="col-auto">
                    <input type="number" class="form-control" id="input-lenght" name="lenght" value="<?php echo isset($_GET['lenght']) ? $_GET['lenght'] : '' ?>">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Invia</button>
                </div>
            </form>
        </div>
    </body>
</html>