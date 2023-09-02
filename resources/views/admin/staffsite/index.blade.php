<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur le site du CDAFAL68</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #007bff;
        }
        p {
            line-height: 1.6;
        }
        .navigation {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }
        .navigation a {
            color: #007bff;
            text-decoration: none;
            padding: 6px 0;
            transition: color 0.2s;
        }
        .navigation a:hover {
            color: #0056b3;
        }
        .profile-icon {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 24px;
            color: #007bff;
        }
        .logout-link {
            position: fixed;
            bottom: 20px;
            right: 20px;
            color: #007bff;
        }
    </style>
</head>
<body>
<div class="container">
    <i class="fas fa-user-circle profile-icon"></i>
    <h1>Bienvenue sur le site du CDAFAL68</h1>
    <p>Ce site est réservé aux membres du personnel du CDAFAL68. Actuellement en phase de test, votre participation est essentielle pour son amélioration.</p>
    <p>Si vous rencontrez des problèmes ou des bugs, veuillez les signaler en détail à Madame Kobel, la directrice de l'association.</p>
    <p>Aucun cookie n'est utilisé sur ce site pour votre confidentialité.</p>

    <div class="navigation">
        <a href="{{route('adherent.index')}}">Gestion des adhérents</a>
        <a href="{{route('kid.index')}}">Gestion des enfants</a>
        <a href="{{route('dashboard.index')}}">Dashboard</a>
        <a href="#">À propos du site</a>
        <a href="#">Mode d'emploi</a>
        <a href="{{route('formation.index')}}">Site des formations</a>
        <a href="{{route('staffsite.bugreport')}}">Signaler un problème</a>
    </div>
</div>
<a href="logout.php" class="logout-link">Se déconnecter</a>
</body>
</html>
