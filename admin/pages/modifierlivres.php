<?php  require './lib/php/verifierCnx.php'; ?>
<h2 class="txtRouge">Livres disponibles</h2>
<?php
$type = new LivreDB($cnx);
$liste_l = $type->getTousLesLivres();
$nbrT = count($liste_l);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <?php
                for ($i = 1; $i < $nbrT; $i++) {
                    print $i." . Titre : ";
                    print utf8_encode($liste_l[$i]->titre). "   ";
                    ?> <a class="txtBlue" href ="index.php?id_ebook=<?php print $liste_l[$i]->id_ebook;?>&page=modifierlivreformulaire">
                        Modifier
                    </a><br><?php
                }
            ?>
            
        </div>
       
    </div>
</div>


