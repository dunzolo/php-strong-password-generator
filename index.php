<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if(isset($_GET['lenght']) && $_GET['lenght'] !== ''){
        $length = $_GET['lenght'];

        $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|";
        $password = "";

        for ($i = 0; $i < $length; $i++) {
            $char = rand(0, strlen($alphabet) - 1);
            $password .= $alphabet[$char];
        }
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
            <input class="form-control" type="text" value="<?php echo isset($password) ? $password : 'Password non generata'?>" disabled readonly>
            <form class="row align-items-center mt-3">
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