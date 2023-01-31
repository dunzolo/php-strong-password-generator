<?php
    function generatePassword($lenght){
        $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|";
        $password = "";

        for ($i = 0; $i < $lenght; $i++) {
            $char = rand(0, strlen($alphabet) - 1);
            $password .= $alphabet[$char];
        }

        return $password;
    }
?>