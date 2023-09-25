<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form name="inscription" method="post" action="form.php">
        Entrez votre pseudo : <input type="text" name="pseudo"/><br/>
        Entrez votre ville : <input type="text" name="ville"/><br/>
        Entrez votre adresse email : <input  type="text" name="email"/></br>
        <input type="submit" name="valider" value="OK"/>
    </form>
    <?php
     if (isset($_POST['valider'])) {
        $pseudo = $_POST['pseudo'];
        $ville = $_POST['ville'];
        echo '<p> Bonjour ' .$pseudo. '  de  ' .$ville. '</p>';
    }
    ?>
</body>
</html>