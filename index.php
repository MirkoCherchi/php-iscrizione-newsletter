<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Bootstrap -->
</head>

<body class="p-4">

    <!-- header -->

    <header class="container text-center">
        <h1>PHP Iscrizione Newsletter</h1>
    </header>

    <!-- /header -->

    <!-- main -->

    <main class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["email"])) {
            $email = $_GET["email"];
            $isValid = filter_var($email, FILTER_VALIDATE_EMAIL);
            $message = '';

            if ($isValid) {
                $message = 'Successo: la mail contiene un punto e una chiocciola';
                $alertClass = 'alert-success';
            } else {
                $message = 'Errore: la mail NON contiene un punto e una chiocciola';
                $alertClass = 'alert-danger';
            }

            echo '<div class="alert ' . $alertClass . '" role="alert">' . $message . '</div>';
        }
        ?>

        <form method="get" action="index.php">
            <div class="mb-3">
                <label for="email" class="form-label">Inserisci Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>

    <!-- /main -->

    <!-- /footer -->
    <footer class="my-5 container">
        <p class="text-primary">Controllo Email by Mirko Cherchi</p>
    </footer>
    <!-- footer -->
</body>

</html>