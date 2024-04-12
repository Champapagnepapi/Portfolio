<?php
// Démarrer la session
session_start();

// Définir le temps d'expiration de la session (en secondes)
$inactive_timeout = 60; 

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Vérifier le temps écoulé depuis la dernière activité
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $inactive_timeout)) {
        // Déconnexion de l'utilisateur si le temps d'inactivité est dépassé
        session_unset();     // Détruire les données de session
        session_destroy();   // Détruire la session elle-même
        header("Location: Authentification.php"); // Rediriger vers la page de connexion
        exit;
    }

    // Mettre à jour le temps de la dernière activité
    $_SESSION['last_activity'] = time();
    // Redirection vers la page compétences.php si la session est toujours active
    header("Location: competences.php");
    exit;
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les champs login et pwd existent dans la requête POST
    if (isset($_POST["login"]) && isset($_POST["pwd"])) {
        // Récupérer les valeurs saisies dans les champs login et pwd
        $login = $_POST["login"];
        $password = $_POST["pwd"];

        // Vérifier si le login et le mot de passe sont corrects
        if ($login === "jury" && $password === "Not24get") {
            // Initialiser la session
            $_SESSION['loggedin'] = true;
            $_SESSION['last_activity'] = time();
            // Redirection vers la page compétences.php si la connexion réussit
            header("Location: competences.php");
            exit;
        } else {
            // Afficher un message d'erreur si le login ou le mot de passe est incorrect
            $errors[] = "Login ou mot de passe incorrect.";
        }
    } else {
        // Afficher un message d'erreur si les champs login et pwd ne sont pas présents dans la requête POST
        $errors[] = "Veuillez saisir un login et un mot de passe.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <div class="container">
        <?php
        // Afficher les messages d'erreur s'il y en a
        if (isset($errors)) {
            foreach ($errors as $error) {
                echo '<p class="error">', $error, ' </p>';
            }
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="align">
                <h1>Connexion</h1>
                <div class="form-group">
                    <label for="login" class="inline">Login :</label>
                    <input id="login" name="login" type="text" class="form-control" value="jury">
                </div>
                <div class="form-group">
                    <label for="pwd" class="inline">Mot de passe :</label>
                    <input id="pwd" name="pwd" type="password" class="form-control" value="Not24get">
                </div>
                <input type="submit" class="btn btn-primary" value="Connexion" />
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
