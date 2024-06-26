<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Gérer son identité professionnelle - Portfolio, Linkedin, CV numérique</title>
    <style>
        /* Styles personnalisés */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 30px;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            font-weight: bold;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 30px;
        }

        .section-title {
            color: #007bff;
            margin-top: 30px;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }

        .qr-code {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .qr-code img {
            margin: 0 10px;
            border: 2px solid #007bff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .image-section {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .image-section img {
            margin: 10px;
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-back {
            display: block;
            margin: 20px auto;
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <a href="competences.php" class="btn btn-primary">Retour</a>
    <h1>Gérer son identité professionnelle - Portfolio, Linkedin, CV numérique</h1>
    <div class="container">





        <div class="text-center">
            <h2>QR Code de mon CV numérique  <a href="https://cvnumeriqueyannntangda.azurewebsites.net/">Accéder au CV</a></h2>
            
            <img src="https://api.qrserver.com/v1/create-qr-code/?data=https%3A%2F%2Fcvnumeriqueyannntangda.azurewebsites.net%2F&amp;size=200x200" alt="QR Code pour le CV numérique">
        </div>


        <div class="text-center">
            <h2>QR Code du Portfolio</h2>
            <img src="https://api.qrserver.com/v1/create-qr-code/?data=https%3A%2F%2Fyann-ntangda.ovh%2F&amp;size=200x200" alt="QR Code pour le portfolio">

        </div>

        <div class="image-section">
            <img src="img/link1.png" alt="Linkedin 1">
            <img src="img/link2.png" alt="Linkedin 2">
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>