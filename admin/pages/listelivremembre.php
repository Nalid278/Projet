<h2 class="txtRouge">Livres disponibles</h2>
<?php
$type = new LivreDB($cnx);
$liste_l = $type->getTousLesLivres();
$nbrT = count($liste_l);
$j=1;
?>

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <?php
                for ($i = 0; $i < $nbrT; $i++) {
                    print $j. ". Titre : ";
                    print utf8_encode($liste_l[$i]->titre). "   ";
                    ?> <a class="txtBlue" href ="index.php?id_ebook=<?php print $liste_l[$i]->id_ebook; ?>&page=commandelivre">
                        Commander
                    </a><br><?php
                    $j = $j+1;
                }
            ?>
            
        </div>
       
    </div>
</div>


