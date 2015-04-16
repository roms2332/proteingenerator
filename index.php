<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RomProt</title>
    </head>
    <body>
        <h1 class="text-center">RomPort</h1>

        <p>Crée ta protéine :D<br/>
        Les lettres acceptées sont A, T, C, et G.</p>

        <form method="post" action="#">
            <input type="text" name="seq" placeholder="Séquence" autofocus required />
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>

<?php
echo $_POST['seq'] .' : ';

if (preg_match('/^[t|a|c|g]*$/', strtolower($_POST['seq']))) {
	$aa = floor(strlen($_POST['seq']) / 3);
	echo "Valid sequence, ".$aa." amino-acids. ";
} else {
    echo "Invalid sequence";
}
?>
