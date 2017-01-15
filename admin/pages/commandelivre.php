<?php
$type = new LivreDB($cnx);
$type2 = new MembreDB($cnx);
$iddumembre = $_SESSION['membre'];
$membre = $type2->getUtilisateurById($iddumembre);
$livre = $type->getLivreById($_GET['id_ebook']);
$date = date("Y-m-d");

if (isset($_GET['commander_livre'])) {
    extract($_GET,EXTR_OVERWRITE);
    $log = new MeslivresDB($cnx);
    $retour = $log->commande($iddumembre, $id, $date);
    if ($retour == 1) {
        $message = "Commande réussie";
        print utf8_decode($message);
    } else {
        $message = "Données incorrectes !";
        print $message;
    }
}
?>

<h2><?php print utf8_decode("Résumé");?></h2>

<h3><?php print utf8_decode("Vous êtes");?></h3>
<?php print $membre[0]->nom ?>&nbsp<?php print $membre[0]->prenom ?>

<h3>Date</h3>
<?php echo $date ?>
    

<h3>Livre choisi</h3><br>
<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="commande_livre">
        <div class="row">
            <div class="col-sm-2"><label for="id">ID</label></div>
            <div class="col-sm-4">
                <input type="text" id="id" name="id" value="<?php print $livre[0]->id_ebook ?>" readonly/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="titre">Titre</label></div>
            <div class="col-sm-4">
                <input type="text" id="titre" name="titre" value="<?php print $livre[0]->titre ?>" readonly/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="page">Nombre de pages</label></div>
            <div class="col-sm-4">
                <input type="number" name="nbpage" id="nbpage" value="<?php print $livre[0]->nb_pages ?>" readonly/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="datesortie">Date de sortie</label></div>
            <div class="col-sm-4">
                <input type="date" name="datesortie" id="datesortie" value="<?php print $livre[0]->date_sortie ?>" readonly/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="ref">Reference</label></div>
            <div class="col-sm-4">
                <input type="text" name="ref" id="ref" value="<?php print $livre[0]->reference ?>" readonly/>
            </div>
        </div> 
        <br>

        <br/>
        <div class="row">
            <div class="col-sm-4">                    
                <input type="hidden" name="page" value="commandelivre">
                <input type="hidden" name="id_ebook" value="<?php print $_GET['id_ebook'] ?>">
                <input type="submit" name="commander_livre" id="commander_livre" value="Commander un livre" class="pull-right"/>&nbsp;           
                <input type="reset" id="reset" value="Annuler" class="pull-left"/>
            </div>
        </div>
    </form>
</div>


