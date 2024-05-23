<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Gestion des droits des utilisateurs</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #007bff;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .content {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content p {
            text-align: justify;
            line-height: 1.6;
        }

        .back-button {
            display: block;
            width: fit-content;
            margin: 20px auto;
        }

        .text-img-container {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .text-img-container img {
            max-width: 50%;
            height: auto;
            margin-left: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <a href="competences.php" class="btn btn-primary">Retour</a>
    <h1>Mettre en place et vérifier les niveaux d’habilitation associés à un service</h1>
    <div class="container">
        <div class="text-img-container">
            <p>J'ai mis en place dans mon projet un système de rôles qui permet, d'une part, de refuser l'accès au projet lourd aux utilisateurs n'ayant pas les droits nécessaires et, d'autre part, de permettre aux administrateurs de gérer les utilisateurs et leurs droits.</p>
            <img src="img/role.png" class="img-fluid" alt="Système de rôle">
        </div>

        <div class="text-img-container">
            <p>Dans cet exemple, je tente de me connecter à mon projet lourd qui permet la gestion administrative et tout ce qui concerne Worktogether.
                Étant donné qu'ici les informations saisies appartiennent à un utilisateur qui n'a pas les droits nécessaires pour accéder à ce projet, le système de rôle mis en place affiche un message d'erreur.</p>
            <img src="img/droitc.png" class="img-fluid" alt="Message d'erreur">
        </div>

        <div class="text-img-container">
            <p>Voici l'interface administrateur permettant de gérer les utilisateurs et leurs droits. Les administrateurs peuvent ajouter, modifier ou supprimer des utilisateurs et assigner des rôles appropriés, ainsi que des packs, baies, etc.</p>
            <img src="img/admin.png" class="img-fluid" alt="Interface administrateur">
        </div>

        <div class="text-img-container">
            <p>Cette capture d'écran montre l'interface affichée lorsque les informations de connexion sont correctes et que les utilisateurs ont les droits nécessaires.</p>
            <img src="img/admin2.png" class="img-fluid" alt="Gestion des utilisateurs">
        </div>
    </div>
</body>

</html>