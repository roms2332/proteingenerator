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

        <form method="post" action="#">
            <input type="text" name="seq" placeholder="Séquence" autofocus required />
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>

<?php
// $sequence = $_POST['seq'];
$sequence = strtolower('atgtactaa');
$seqSize = strlen($sequence);
echo $sequence .' : ';

if (preg_match('/^(atg)[t|a|c|g]*(taa|tag|tga)$/', $sequence) && ($seqSize%3==0)) {
    echo 'Valid sequence';

    $start = substr($sequence, 0, 3);
    $stop = substr($sequence, $seqSize-3, $seqSize);

    $decodes = array();
    $decodes[] = $start;

    for ($i=3; $i < $seqSize; $i += 3) { 
        $decodes[] = substr($sequence, $i, 3);
    }

    var_dump($decodes);
} else {
    echo 'Invalid sequence';
}
