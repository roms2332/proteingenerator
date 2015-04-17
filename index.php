<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ProteinGenerator</title>
    </head>
    <body>
        <h1 class="text-center">ProteinGenerator</h1>

        <p>Crée ta protéine :D<br/>
        Les lettres acceptées sont A, T, C, et G.</p>

        <form method="post" action="game.php">
            <input type="text" name="seq" placeholder="Séquence" autofocus required />
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>
