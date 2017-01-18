<?php  require './lib/php/verifierCnx.php'; ?>
<h2 class="txtRouge">Membres inscrits</h2>
<?php
$type = new MembreDB($cnx);
$liste_m = $type->getTousLesUtilisateurs();
$nbrT = count($liste_m);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <?php
                for ($i = 1; $i < $nbrT; $i++) {
                    print $i.". Membre : ";
                    print utf8_encode($liste_m[$i]->nom). "   ";
                    ?> <a class="txtBlue" href ="index.php?id_membre=<?php print $liste_m[$i]->id_membre;?>&page=modifiermembreformulaire">
                        Modifier
                    </a><br><?php
                }
            ?>
            
        </div>
       
    </div>
</div>


