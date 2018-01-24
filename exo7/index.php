<!DOCTYPE html>
<html>
<head>
<title>Exo 7</title>
</head>
<body>

<p>Écrire un formulaire qui demande le nom et le sexe de l'utilisateur (M ou Mme).
Ce formulaire appelle une page qui affichera « Bonjour monsieur Truc » ou « Bonjour madame Bidule » suivant le cas.

</p>
<br>


<form action="" method="post">
    Nom: <input type="text" name="nom"><br>
    <div>
    	<label for="type">Sexe : </label>
    	<select id="type" name="sexe" size="1">
    			<option value="Monsieur">Homme
    			<option value="Madame">Femme
    		</select>
    </div>
    <input type="submit">
</form>

<?php
if (!empty($_POST['nom']))
{
        echo "Bonjour, ".$_POST['sexe']." ".$_POST['nom'];
        unset($_POST['sexe']);
        unset($_POST['nom']);
}
?>

</body>
</html>
