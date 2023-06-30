<!-- SCRIPT PHP -->
<?php 

?>

<!-- TEMPLATE HTML -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDN CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Head Title -->
        <title>php-badwords</title>
    </head>
    <body>
        <!-- Form Container -->
        <div class="container my-5">
            <!-- Form Row -->
            <div class="row">
                <!-- Title Col -->
                <div class="col-12 my-5 text-center">
                    <!-- Title -->
                    <h1>PHP-BADWORDS</h1>
                </div>
                <!-- Form Col -->
                <div class="col-12">
                    <!-- Form GET -->
                    <form action="./script.php" method="GET" class="d-flex flex-wrap justify-content-center bg-dark bg-opacity-50 rounded-4 p-5">
                        <!-- Input Censored Word -->
                        <input type="text" name="censored-word" placeholder="Inserisci la parola da censurare" class="form-control text-danger fw-bold w-100 p-2 my-5">
                        <!-- Paragraph TextArea -->
                        <textarea name="paragraph" cols="30" rows="10" placeholder="Inserisci il testo" class="form-control fw-bold w-100"></textarea>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success btn-lg my-5">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>