<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déployer un service - PPE Worktogether</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #333;
    
        
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #007bff;
            font-weight: bold;
            margin-top: 50px;
            margin-bottom: 30px;
            text-align: center;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-bottom: 20px;
            text-align: center;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .content-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .image-container {
            margin-bottom: 30px;
            text-align: center;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
            text-align: justify;
            line-height: 1.6;
        }

        /* Style pour les liens */
        a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        
      
      
    </style>
</head>

<body>
    <a href="competences.php" class="btn mt-3">Retour</a>
    <h1>Déployer un service - PPE Worktogether (Solution Web - Projet léger)</h1>
    <div class="container">
        <div class="content-container">
            <p>
                Dans le cadre du projet PPE Worktogether, nous devons déployer un service web pour répondre aux besoins des utilisateurs. Le déploiement d'un service est une étape cruciale qui nécessite une planification minutieuse et une exécution précise pour garantir le bon fonctionnement du service une fois qu'il est mis à disposition des utilisateurs.
            </p>

            <div class="image-container">
                <img src="img/dep1.png" alt="Étape 1: Configuration du serveur">
            </div>

            <div class="image-container">
                <img src="img/dep2.png" alt="Étape 1: Configuration du serveur">
            </div>

            <div class="image-container">
                <img src="img/deploy1.png" alt="Étape 1: Configuration du serveur">
            </div>
            

            <p>
                La première étape du déploiement consiste à configurer le serveur sur lequel le service sera hébergé. Cela implique généralement la configuration des paramètres du serveur, l'installation des logiciels nécessaires et la mise en place des bases de données si nécessaire.
            </p>

            <div class="image-container">
                <img src="img/deploy2.png" alt="Étape 2: Déploiement du code source">
            </div>

            <p>
                Une fois que le serveur est configuré, nous pouvons procéder au déploiement du code source du service. Cela peut être fait en transférant les fichiers du service sur le serveur via FTP ou en utilisant des outils de déploiement automatisés tels que GitLab CI/CD ou Jenkins.
            </p>

            <div class="image-container">
                <img src="img/deploy3.png" alt="Étape 3: Vérification et tests">
            </div>

            <p>
                Enfin, après le déploiement, il est essentiel de vérifier et de tester le service pour s'assurer qu'il fonctionne correctement. Cela peut impliquer des tests de charge, des tests d'interface utilisateur et des tests de sécurité pour identifier et corriger tout problème potentiel avant de rendre le service accessible aux utilisateurs finaux.
            </p>
        </div>
    </div>
</body>

</html>