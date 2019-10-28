<?php
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
?>

<div class="news">
    <h3>
        <?php echo $title; ?>
        <em>le <?php echo $date; ?></em> par <?php echo $author; ?>
    </h3>
    <p>
        <?php
        echo $content;
        ?>
    </p>
</div>
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
$req->closeCursor();
?>

<div class="add_comment">
    <form action="blog_add_comment.php" method="post">
        <label for="pseudo">Votre pseudo: </label>
        <input type="text" name="pseudo" minlength="4" required> 4 car. min.<br>
        <label for="comment">Votre message: </label>
        <textarea name="comment" cols="30" rows="4" minlength="3" required></textarea>
        <input type="submit" value="Envoyer">
    </form>
</div>
<br>
<em>
    <a href="javascript:history.back()">Retour blog</a>
</em>
<?php
require_once('footer.php');
