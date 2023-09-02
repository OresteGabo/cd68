<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signaler un Problème</title>
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
        h1 {
            color: #007bff;
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            margin-bottom: 6px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            resize: vertical;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        small {
            color: #777;
            margin-top: 6px; /* Adjusted margin */
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Signaler un Problème</h1>
    <p>Si vous avez rencontré un bug ou un problème sur le site, veuillez remplir le formulaire ci-dessous pour nous en informer.</p>

    <form action="submit-report.php" method="POST">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <p><small>Si vous ne fournissez pas d'email, nous utiliserons votre email de connexion pour vous contacter.</small></p>

        <label for="issue">Problème rencontré:</label>
        <textarea id="issue" name="issue" rows="6" required></textarea>
        <p><small>Expliquez en détail ce que vous essayiez de faire, comment l'erreur est survenue, etc.</small></p>

        <button type="submit">Envoyer</button>
    </form>

    <p>Nous vous remercions de votre contribution pour améliorer notre site.</p>
</div>
</body>
</html>
