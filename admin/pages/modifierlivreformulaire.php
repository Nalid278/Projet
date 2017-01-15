<h2>MODIFICATION</h2>
<?php 
$type = new LivreDB($cnx);
$livre = $type->getLivreById($_GET['id_ebook']);

?>

<?php 
if (isset($_GET['modifier_livre'])) {
    extract($_GET,EXTR_OVERWRITE);
    $log = new LivreDB($cnx);
    $retour = $log->updateLivres($id, $titre, $nbpage, $datesortie, $ref);
    
    if ($retour >= 1) {
        echo "<script>alert('Modification OK');</script>";
        //header("Location: http://lamp-edu.condorcet.be/~dilan.kandemir@condorcet.be/gt_ecole3/admin/index.php?page=modifierlivres");
    } else {
        
        echo "<script>alert('Une erreur s'est produite);</script>";
        //header("Location: http://lamp-edu.condorcet.be/~dilan.kandemir@condorcet.be/gt_ecole3/admin/index.php?page=modifierlivres");
        
    }
}
?>


<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_modifier_livre">
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
                <input type="text" id="titre" name="titre" value="<?php print $livre[0]->titre ?>"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="page">Nombre de pages</label></div>
            <div class="col-sm-4">
                <input type="number" name="nbpage" id="nbpage" value="<?php print $livre[0]->nb_pages ?>"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="datesortie">Date de sortie</label></div>
            <div class="col-sm-4">
                <input type="date" name="datesortie" id="datesortie" value="<?php print $livre[0]->date_sortie ?>"/>
            </div>
        </div>
        <br>
        <!--<div class="row">
            <div class="col-sm-2"><label for="auteur">Auteur</label></div>
            <div class="col-sm-4">
                <input type="text" name="auteur" id="auteur" placeholder="ex : J.K. Rowling"/>
            </div>
        </div>-->
        <div class="row">
            <div class="col-sm-2"><label for="ref">Reference</label></div>
            <div class="col-sm-4">
                <input type="text" name="ref" id="ref" value="<?php print $livre[0]->reference ?>"/>
            </div>
        </div> 
        <br>

        <br/>
        <div class="row">
            <div class="col-sm-4">                    
                <input type="hidden" name="page" value="modifierlivreformulaire">
                <input type="hidden" name="id_ebook" value="<?php print $_GET['id_ebook'] ?>">
                <input type="submit" name="modifier_livre" id="modifier_livre" value="Modifier un livre" class="pull-right"/>&nbsp;           
                <input type="reset" id="reset" value="Annuler" class="pull-left"/>
            </div>
        </div>
    </form>
</div>


