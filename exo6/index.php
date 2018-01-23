<!DOCTYPE html>
<html>
<head>
<title>Exo 6</title>
</head>
<body>

<p>Écrire un formulaire qui demande le nom et l'âge de l'utilisateur.
Le bouton submit de ce formulaire provoquera l'affichage d'une page qui saluera l'utilisateur avec cette phrase :
« Bonjour machin, vous avez xx ans... » (avec les bonnes valeurs, bien entendu).
</p>
<br>


<form action="" method="post">
    Prenom: <input type="text" name="prenom"><br>
    Age: <input type="number" name="age"><br>
    <input type="submit">
</form>

<p>Bonjour : <?php echo $_POST['prenom']; ?> ! vous avez <?php echo $_POST['age']; ?> ans...</p>
</body>
</html>
