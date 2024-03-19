<?php
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
    