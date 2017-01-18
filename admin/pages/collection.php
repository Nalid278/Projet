<?php  require './lib/php/verifierCnx2.php'; ?>
<h2 class="txtRouge">Mes livres</h2>
<?php
$monid=$_SESSION['membre'];
$type = new MeslivresDB($cnx);
$liste_l = $type->getMesLivres($monid);
$nbrT = count($liste_l);
$j=1;
?>

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <?php
                for ($i = 0; $i < $nbrT; $i++) {
                    print $j." . Titre : ";
                    print utf8_encode($liste_l[$i]->titre). "   ";
                    ?> <!--<a class="txtBlue" href ="index.php?id_ebook=&page=printLivre">-->
                        <a href="./pages/printLivres.php?id_ebook=<?php print $liste_l[$i]->id_ebook;?>" target="_blank" class="pull-right">
                    Imprimer
                    </a><br><?php
                    $j=$j+1;
                }
            ?>
            
        </div>
       
    </div>
</div>

<a href="./pages/printLivres.php?id_ebook=<?php print $liste_l[$i]->id_ebook;?>" target="_blank" class="pull-right">