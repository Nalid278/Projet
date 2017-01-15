<h2>MODIFICATION</h2>
<?php 
$type = new MembreDB($cnx);
$membres = $type->getUtilisateurById($_GET['id_membre']);

?>

<?php 
if (isset($_GET['modifier_membre'])) {
    extract($_GET,EXTR_OVERWRITE);
    $log = new MembreDB($cnx);
    $retour = $log->updateMembres($id, $pseudo, $mdp, $nom, $prenom, $email);
    
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
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_modifier_membre">
        <div class="row">
            <div class="col-sm-2"><label for="id">ID</label></div>
            <div class="col-sm-4">
                <input type="text" id="id" name="id" value="<?php print $membres[0]->id_membre ?>" readonly/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="pseudo">Pseudo</label></div>
            <div class="col-sm-4">
                <input type="text" id="pseudo" name="pseudo" value="<?php print $membres[0]->pseudo ?>"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="mdp">Mot de passe</label></div>
            <div class="col-sm-4">
                <input type="text" name="mdp" id="mdp" value="<?php print $membres[0]->mdp ?>"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="nom">Nom</label></div>
            <div class="col-sm-4">
                <input type="text" name="nom" id="nom" value="<?php print $membres[0]->nom ?>"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="prenom">Prenom</label></div>
            <div class="col-sm-4">
                <input type="text" name="prenom" id="prenom" value="<?php print $membres[0]->prenom ?>"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="email">Email</label></div>
            <div class="col-sm-4">
                <input type="text" name="email" id="email" value="<?php print $membres[0]->email ?>"/>
            </div>
        </div> 
        <br>

        <br/>
        <div class="row">
            <div class="col-sm-4">                    
                <input type="hidden" name="page" value="modifiermembreformulaire">
                <input type="hidden" name="id_membre" value="<?php print $_GET['id_membre'] ?>">
                <input type="submit" name="modifier_membre" id="modifier_membre" value="Modifier un membre" class="pull-right"/>&nbsp;           
                <input type="reset" id="reset" value="Annuler" class="pull-left"/>
            </div>
        </div>
    </form>
</div>


