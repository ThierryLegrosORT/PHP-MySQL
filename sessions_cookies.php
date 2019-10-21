<?php
session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['age'] = $_POST['age'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions & cookies</title>
</head>
<body>
    <h1>Bienvenue sur ma page session & cookies</h1>
    <p>
        Tu t'appelles <?php echo $_SESSION['name']; ?> et tu as <?php echo $_SESSION['age']; ?> ans. <br />
        Tu es plus connu sous le pseudo de <?php echo $_SESSION['pseudo'] ?>.<br />
        Cliques <a href="/test12.php">ici</a> pour voir si ça fonctionne...
    </p>
</body>
</html>