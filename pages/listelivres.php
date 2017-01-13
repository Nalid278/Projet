<h2 class="txtRouge">Un aperçu de nos livres ...</h2>
<?php
$type = new LivreDB($cnx);
$liste_l = $type->getTousLesLivres();
$nbrT = count($liste_l);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <?php
                for ($i = 0; $i < 5; $i++) {
                    print $liste_l[$i]->id_ebook. ". Titre : ";
                    print utf8_encode($liste_l[$i]->titre). "<br/><br/>";
                }
            ?>
        </div>
       
    </div>
</div>
<h2 class="txtRouge">Et bien plus encore !</h2>

