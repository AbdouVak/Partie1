<h1>Exercice 1</h1>

<p>Soit la phrase notre "Notre formation DL commence aujourd'hui".<br>
Ecrire un algorithme permetant de compter le nombre de caracter contenus dans cette phrase</p>

<h2>Résultat</h2>

<?PHP

$phrase = "Notre formation DL commence aujourd'hui";
$longeur = strlen($phrase);
echo "La phrase '$phrase' continent $longeur caractères<br>";
echo "La phrase '$phrase' continent ".strlen($phrase). "caractères<br>";
?>
