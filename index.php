<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Password generator</title>
    
    <!-- link to bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container my-5">
        <h1 class="mb-4">
            Password generator
        </h1>
        <form action="" method="get">
            <select class="form-select mb-4 " name="length">
                <option selected>Seleziona La lunghezza della password</option>
                <option value="8">8</option>
                <option value="16">16</option>
                <option value="32">32</option>
            </select>
            <input type="submit" value="Genera">
        </form>
  

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
    
    // se la lunghezza non è nulla richiamo la funzione
    if (isset($length)) {
        $randomPassword = generate_password($length);

        // mostro la password finale
        echo "Password: $randomPassword";
    } 
    ?>
    </div>

    <!-- link to bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>