<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Inscription</title>
</head>

<body>

    <form action="register.php" method="post">

        <h1 class="text-center">S'inscrire</h1>

        <div class="form-group">
            <label for="nom">Nom : </label>
            <input type="text" class="form-control" name="nom" placeholder="Votre nom..." required />
        </div>

        <div class="form-group">
            <label for="prenom">Prénom : </label>
            <input type="text" class="form-control" name="prenom" placeholder="Votre prénom..." required />
        </div>

        <div class="form-group">
            <label for="email">Email : </label>
            <input type="email" class="form-control" name="email" placeholder="xxxx@xxxx.fr" required />
        </div>

        <div class="form-group">
            <label for="password"> Mot de passe : </label>
            <input type="password" class="form-control" name="password" placeholder="Mot de passe..." required />
        </div>

        <div class="form-group">
            <label for="numVoie">Numéro de la voie : </label>
            <input type="number" class="form-control" name="numVoie" placeholder="Numéro de voie..." />
        </div>

        <div class="form-group">
            <label for="rue">Rue : </label>
            <input type="text" class="form-control" name="rue" placeholder="rue..." />
        </div>

        <div class="form-group">
            <label for="infoComp">Information complémentaire : </label>
            <input type="text" class="form-control" name="infoComp" placeholder="Numéro maison etc..." />
        </div>

        <div class="form-group">
            <label for="ville">Ville : </label>
            <input type="text" class="form-control" name="ville" placeholder="Ville..." />
        </div>

        <div class="form-group">
            <label for="codePostal">Code Postal : </label>
            <input type="number" class="form-control" name="codePostal" placeholder="Code Postal..." />
        </div>

        <div class="submit-button text-center">
            <input type="submit" class="btn hvr-hover" name="submit" value="S'inscrire" class="box-button" />
        </div>

        <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
    </form>

</body>

</html>