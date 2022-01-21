<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire 2</title>
</head>
<body>

    <form action="index.php" method="post" enctype="multipart/form-data">
        <div>
            <select name="genre">
                <option>Mr</option>
                <option>Mme</option>
            </select>
        </div>
        <div>
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="fichier">Choisir un fichier texte ou image (.txt, .png, .jpg)</label>
            <input type="file" name="fichier" id="fichier">
        </div>
        <input type="submit" value="Envoyer">
    </form>

</body>
</html>

<?php

if (isset($_POST['submit'])){
    $genre = strip_tags(trim($_POST["genre"]));
    $prenom = strip_tags(trim($_POST["prenom"]));
    $nom = strip_tags(trim($_POST["nom"]));

    echo $genre." ".$nom." ".$prenom."<br>";
}

if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] === 0){
    $allowedMimeTypes = ['application/pdf'];

    if (in_array($_FILES['fichier']['type'], $allowedMimeTypes)) {
        $tmp_name = $_FILES['fichier']['tmp_name'];
        $name = $_FILES['fichier']["name"];
        move_uploaded_file($tmp_name, $name);

        echo $tmp_name." <br> ".$name;
    }
    else{
        echo "Vous avez fourni un fichier non en PDF";
    }
}
