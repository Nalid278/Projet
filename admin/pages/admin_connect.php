<?php
if (isset($_POST['submit_login'])) {

    $log = new AdminDB($cnx);
    $log2 = new MembreDB($cnx);
    $retour = $log->isAuthorized($_POST['login'], $_POST['password']);
    $retour2 = $log2->isAuthorized($_POST['login'], $_POST['password']);
    if ($retour == 1) {
        $_SESSION['admin'] = 1;
        $message = "Authentifi&eacute admin;";
       
       
        print "<meta http-equiv=\"refresh\": Content=\"0;url=./index.php\">";
        
    } else {
        $message = "Données incorrectes";
    }

    if ($retour2 == 1) {
        $_SESSION['membre'] = 1;
        $message = "Authentifié membre;";
        
        print "<meta http-equiv=\"refresh\": Content=\"0;url=./index.php\">";
    } else {
        $message = "Données incorrectes";
    }
}
?>


<section id="message"><?php if (isset($message)) //print $message;   ?></section>
<div class="container" id="inline">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method='post' id="form_auth_">    
        <div class="row">
            <div class="col-sm-offset-1 txt150">Authentifiez-vous<br/><br/></div>
        </div>
        <div class="row">
            <div class="col-sm-2 txtRouge txtGras">Login : </div>
            <div class="col-sm-4"><input type="text" id="login_" name="login" /></div><br/><br/>
        </div>
        <div class="row">
            <div class="col-sm-2 txtRouge txtGras">Mot de passe :</div>
            <div class="col-sm-4"><input type="password" id="password_" name="password" /></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><br/>
                <input type="submit" name="submit_login" id="submit_login_" value="Login" />&nbsp;&nbsp;&nbsp;
                <input type="reset" id="annuler" value="Annuler" />
            </div>
        </div>            
    </form>
</div>
