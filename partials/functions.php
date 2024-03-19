<?php

// prelevo la lunghezza
    $length = $_GET['length'];

    // funzione per generare la password che richieda come variabile la lunghezza inserita
    function generate_password ($length) {

        // caratteri disponibili
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*_?';
        $password = '';

        // genero un carattere casuale per la lunghezza del valore selezionato
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $password;
    }
    
    // se la lunghezza non è nulla e coincide col valore della select:
    if (isset($length)) {
        // richiamo la funzione
        if ($length >= 8 && $length <= 64) {
            $randomPassword = generate_password($length);

            // mostro la password finale
            echo "Password: <br> <strong> $randomPassword </strong>";
        }else {
            echo "Seleziona una lunghezza e riprova";
        }
    } 