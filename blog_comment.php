<?php
session_start();
require_once('header.php');
require_once('menu.php');
require_once('PDOConnect.php');

$req = $bdd->prepare('SELECT id, title, author, content, DATE_FORMAT(date_ajout, "%d/%m/%y %Hh%i") AS create_date FROM blog_billet WHERE id=?');
$req->execute(array($_GET['billet']));
$data = $req->fetch();
$title = htmlspecialchars($data['title']);
$author = htmlspecialchars($data['author']);
$content = htmlspecialchars($data['content']);
$date = $data['create_date'];
$billet = $data['id'];
?>

<div class="news">
    <h3>
        <?php echo $title; ?>
    </h3>
    <em>le <?php echo $date; ?></em> par <?php echo $author; ?>
    <p>
        <?php
        echo $content;
        ?>
    </p>
</div>
<div class="commentaires_add_view">

    <div class="comm">
    <h4>Commentaires:</h4>
    <?php
    $req->closeCursor();
    
    $req = $bdd->prepare('SELECT author, content, DATE_FORMAT(date_ajout, "%d/%m/%y %Hh%i") AS date_comm FROM blog_comment WHERE id_billet=? ORDER BY date_ajout');
    $req->execute(array($_GET['billet']));
    while ($data = $req->fetch()) {
        $author_comm = htmlspecialchars($data['author']);
        $heure_comm = $data['date_comm'];
        $content_comm = htmlspecialchars($data['content']);
        ?>
        <div class="separator_comment">
    
            <p>
                Par <?php echo $author_comm; ?> le <em><?php echo $heure_comm; ?></em>
            </p>
            <p>
                <?php echo $content_comm; ?><br>
            </p>
        </div>
    <?php
    }
    ?>
    </div>
    <div class="add_comment">
        <form action="blog_add_comment.php?billet=<?php echo $billet; ?>" method="post">
            <label for="comment">Votre message: </label>
            <textarea name="comment" cols="30" rows="4" minlength="3" required></textarea>
            <input type="hidden" name="billet" value="<?php $_GET['billet'] ?>">
            <input type="submit" value="Envoyer">
        </form>
    </div>
</div>
<br>
<em>
    <a href="blog.php">Retour blog</a>
</em>
<?php
$req->closeCursor();
require_once('footer.php');
