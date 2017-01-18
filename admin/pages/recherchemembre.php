<?php  require './lib/php/verifierCnx.php'; ?>
<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_modifier_membre">
        <div class="row">
            <div class="col-sm-2"><label for="id">ID</label></div>
            <div class="col-sm-4">
                <input type="text" id="id" name="id" readonly/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="pseudo">Pseudo</label></div>
            <div class="col-sm-4">
                <input type="text" id="pseudo" name="pseudo" readonly/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="mdp">Mot de passe</label></div>
            <div class="col-sm-4">
                <input type="text" name="mdp" id="mdp" readonly/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="nom">Nom</label></div>
            <div class="col-sm-4">
                <input type="text" name="nom" id="nom" />
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="prenom">Prenom</label></div>
            <div class="col-sm-4">
                <input type="text" name="prenom" id="prenom" readonly/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2"><label for="email">Email</label></div>
            <div class="col-sm-4">
                <input type="text" name="email" id="email" readonly/>
            </div>
        </div> 
        <br>

        <br/>
        <div class="row">
            <div class="col-sm-4">                    
            <input type="hidden" name="page" value="recherchemembre">
                <input type="submit" name="chercher" id="chercher" value="Chercher" class="pull-right"/>&nbsp;           
                <input type="reset" id="reset" value="Annuler" class="pull-left"/>
            </div>
        </div>
    </form>
</div>


