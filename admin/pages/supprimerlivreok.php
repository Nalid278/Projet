<?php

$type = new LivreDB($cnx);
$retour = $type->deleteLivre($_GET['id_ebook']);



if ($retour >= 1) {
    echo "<script>alert('Supression OK');</script>";
    header("refresh:1, http://lamp-edu.condorcet.be/~dilan.kandemir@condorcet.be/gt_ecole3/admin/index.php?page=supprimerlivres");
} else {

    echo "<script>alert('Une erreur s'est produite);</script>";
    header("refresh:1, http://lamp-edu.condorcet.be/~dilan.kandemir@condorcet.be/gt_ecole3/admin/index.php?page=supprimerlivres");
}
?>
