<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.

Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>Résultat</h2>

<?PHP
$age = "17";
$sexe = strtoupper("F");

if($sexe == "H" && $age>=20 || $sexe == "F" && $age>=18 && $age<=35){
    echo "Age : $age <br>";
    echo "Sexe : $sexe <br>";
    echo "La personne est imposable <br>";
}else{
    echo "Age : $age <br>";
    echo "Sexe : $sexe <br>";
    echo "La personne est n'est pas imposable <br>";
}

?>