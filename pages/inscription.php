
<?php
if (isset($_GET['sinscrire'])) {
    extract($_GET, EXTR_OVERWRITE);
    $log = new MembreDB($cnx);


    if (empty($pseudo) || empty($mdp) || empty($email) || empty($nom) || empty($prenom)) {
        $erreur = "<span class='txtGras txtRouge'>Veuillez renseigner tous les champs</span>";
    } else {




        $retour = $log->inscription($pseudo, $mdp, $email, $nom, $prenom);
        if ($retour == 1) {
            $message = "Inscription réussie";
            print utf8_decode($message);
        } else {
            $message = "Données incorrectes !";
            print $message;
        }
    }
}
?>



<div class="container">
    <div class="row">
            <div class="col-sm-4">
                <?php
                if(isset($erreur)) print $erreur;
                ?>
                <br>
            </div>
        </div>
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_s_inscrire">
        <div class="row">
            <div class="col-sm-2"><label for="pseudo">Pseudo</label></div>
            <div class="col-sm-4">
                <input type="text" id="pseudo" name="pseudo" />
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="mdp">Mot de passe</label></div>
            <div class="col-sm-4">
                <input type="text" name="mdp" id="mdp" />
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="email">email</label></div>
            <div class="col-sm-4">
                <input type="text" name="email" id="email" />
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="nom">Nom</label></div>
            <div class="col-sm-4">
                <input type="text" name="nom" id="nom"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="prenom">Prénom</label></div>
            <div class="col-sm-4">
                <input type="text" name="prenom" id="prenom" />
            </div>
        </div> 
        <br>

        <br/>
        <div class="row">
            <div class="col-sm-4">                    
                <input type="hidden" name="page" value="inscription">
                <input type="submit" name="sinscrire" id="sinscrire" value="S'inscrire" class="pull-right"/>&nbsp;           
                <input type="reset" id="reset" value="Annuler" class="pull-left"/>
            </div>
        </div>
    </form>
</div>