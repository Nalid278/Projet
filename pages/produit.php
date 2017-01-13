<h2 class="txtRouge">Nos produits</h2>
<?php
$type = new Type_gateauDB($cnx);
$liste_t = $type->getTypeGateau();
$nbrT = count($liste_t);
if (isset($_GET['submit_type'])) {
    extract($_GET, EXTR_OVERWRITE);
    if ($choix_gateau != 1) {
        $liste = new Vue_gateauxDB($cnx);
        $liste_g = $liste->getListeGateaux($choix_gateau);
        $nbrG = count($liste_g);
    }
}
?>


<div class="container">
    <div class="row">
        <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
            <div class="col-sm-2">
                <select name="choix_gateau" id="choix_gateau">
                    <option value="1">Choisissez</option>
                    <?php
                    for ($i = 0; $i < $nbrT; $i++) {
                        ?>                    
                        <option value="<?php print $liste_t[$i]->id_gt_type_gateau; ?>">
                            <?php print utf8_encode($liste_t[$i]->type_gateau); ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>

            </div>
            <div class="col-sm-1">
                <input type="submit" name="submit_type" value="Choisir" id="submit_type"/>
            </div> 
        </form>
    </div>
</div>
<br/>
<?php
if (isset($nbrG) && $nbrG > 0) {
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 txtRouge txtGras txt150">
                <?php print utf8_encode($liste_g[0]['type_gateau']); ?>            
            </div>
        </div>
        <?php
        for ($i = 0; $i < $nbrG; $i++) {
            ?>
            <div class="row">
                <div class="col-sm-3">
                    <img src="./admin/images/<?php print $liste_g[$i]['image']; ?>" alt="Gâteau"/>                
                </div>
                <div class="col-sm-4 txtGras">
                    <?php
                    print $liste_g[$i]['nom_gateau'] . "<br/><br/>";
                    print $liste_g[$i]['prix_unitaire'] . " &euro;<br/><br/>";
                    ?>
                    <a class="txtBlue" href =".index.php?id_gateau=<?php print $liste_g[$i]['id_gt_gateau']; ?>">
                        Commander
                    </a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
        <?php
    }
    ?>

