<?php  require './lib/php/verifierCnx.php'; ?>
<?php


if (isset($_GET['encoder_livre'])) {
    extract($_GET,EXTR_OVERWRITE);
    $log = new LivreDB($cnx);
    $retour = $log->insert($titre, $nbpage, $ref, $datesortie);
    if ($retour == 1) {
        $message = "Livre ajouté";
        print utf8_encode($message);
    } else {
        $message = "Données incorrectes !";
        print $message;
    }
}
?>



<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_ajout_livre">
        <div class="row">
            <div class="col-sm-2"><label for="titre">Titre</label></div>
            <div class="col-sm-4">
                <input type="text" id="titre" name="titre" placeholder="ex : Harry Potter à l'Ecole des Sorciers"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="page">Nombre de pages</label></div>
            <div class="col-sm-4">
                <input type="number" name="nbpage" id="nbpage" />
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="datesortie">Date de sortie</label></div>
            <div class="col-sm-4">
                <input type="date" name="datesortie" id="datesortie" />
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
                <input type="text" name="ref" id="ref" />
            </div>
        </div> 
        <br>

        <br/>
        <div class="row">
            <div class="col-sm-4">                    
                <input type="hidden" name="page" value="ajoutlivres">
                <input type="submit" name="encoder_livre" id="encoder_livre" value="Encoder un livre" class="pull-right"/>&nbsp;           
                <input type="reset" id="reset" value="Annuler" class="pull-left"/>
            </div>
        </div>
    </form>
</div>