<p>Crée ta protéine :D<br/>
Les lettres acceptées sont A, T, C, et G.</p>

<form method="post">
	<input name="seq" type="text"/>
	<input action="" type="submit"/>
</form>

<?

$test = strpos($_POST['seq'], "Z, E, R");
if($test === false){
	$seq = $_POST['seq'];
	$final = strlen($seq);
	echo $final;
}
else { echo "Seulement ATCG"; }
?>

