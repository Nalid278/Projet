<?php  require './lib/php/verifierCnx.php'; ?>
<h2 class="txtRouge">Membres inscrits</h2>
<?php
$type = new MembreDB($cnx);
$liste_l = $type->getTousLesUtilisateurs();
$nbrT = count($liste_l);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <?php
                for ($i = 1; $i < $nbrT; $i++) {
                    print $i.". ";
                    print utf8_encode($liste_l[$i]->nom). "   ";
                    ?> <a class="txtBlue" href ="index.php?id_membre=<?php print $liste_l[$i]->id_membre;?>&page=supprimermembresok">
                        Supprimer
                    </a><br><?php
                }
            ?>
            
        </div>
       
    </div>
</div>


