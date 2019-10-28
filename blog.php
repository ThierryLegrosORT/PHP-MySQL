<?php
require_once('header.php');
require_once('menu.php');
require_once('PDOConnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog minimaliste</title>
</head>
<body>
    <div class="blog_block">
        <div class="blog_read">
            <?php
            $response = $bdd->query('SELECT id, author, title, content, DATE_FORMAT(date_ajout, "%d/%m/%y %Hh%i") AS time_billet FROM blog_billet ORDER BY id DESC LIMIT 0, 5');
            while($data = $response->fetch()){
                $author = htmlspecialchars($data['author']);
                $title = htmlspecialchars($data['title']);
                $time_billet = $data['time_billet'];
                $content = htmlspecialchars($data['content']);
                $id = htmlspecialchars($data['id']);
                ?>
                <p>
                    <?php echo $time_billet . ': ' . $title . ' by ' . $author . '<br><br>' . $content; ?><br>
                    <a href="blog_comment.php?billet=<?php echo $id; ?>">Afficher les commentaires</a>
                </p>
                <?php
            }
            $response->closeCursor();
            ?>
        </div>
    </div>
    
</body>
</html>

<?php
require_once('footer.php');