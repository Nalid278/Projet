<?php  require './lib/php/verifierCnx.php'; ?>
<?php

$type = new MembreDB($cnx);
$retour = $type->deleteMembre($_GET['id_membre']);



if ($retour >= 1) {
    echo "<script>alert('Supression OK');</script>";
    header("refresh:1,http://lamp-edu.condorcet.be/~dilan.kandemir@condorcet.be/gt_ecole3/admin/index.php?page=supprimermembres");
} else {

    echo "<script>alert('Une erreur s'est produite);</script>";
    header("refresh:1,http://lamp-edu.condorcet.be/~dilan.kandemir@condorcet.be/gt_ecole3/admin/index.php?page=supprimermembres");
}
?>
