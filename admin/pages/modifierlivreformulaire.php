<h2>TEST</h2>
<?php 
$type = new LivreDB($cnx);
$livre = $type->getLivreById($_GET['id_ebook']);
print $livre[0]->titre;
        ?>


