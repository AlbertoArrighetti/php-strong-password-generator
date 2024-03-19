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
        <form action="" method="get" class="mb-3 row">
            <select class="form-select mb-4 col" name="length">
                <option selected>Seleziona La lunghezza della password</option>
                <option value="8">8</option>
                <option value="16">16</option>
                <option value="32">32</option>
                <option value="64">64</option>
            </select>
            <div class="col">
                <input type="submit" value="Genera" class="btn btn-primary ">
            </div>
        </form>
  
        <div class="result">
            <div class="mb-3 fw-bold "> 
                Password: 
            </div>
            <span class="bg-dark text-white py-2 px-4 fw-semibold">
                <?php 
                
                    // prelevo la lunghezza
                    $length = $_GET['length'];

                    // richiamo la funzione
                    include __DIR__ . "/partials/functions.php";

                    // se la lunghezza non è nulla e coincide col valore della select:
                    if (isset($length)) {
                        // richiamo la funzione
                        if ($length >= 8 && $length <= 64) {
                            $randomPassword = generate_password($length);

                            // mostro la password finale
                            echo $randomPassword;
                        }else {
                            echo "Seleziona una lunghezza e riprova";
                        }
                    } 
                ?>
            </span>
        </div>
    </div>

    <!-- link to bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>