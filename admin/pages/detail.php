<?php  require './lib/php/verifierCnx2.php'; ?>
<h2 class="txtRouge">Détails</h2>
<?php
$type = new LivreDB($cnx);
$livre = $type->getLivreById($_GET['id_ebook']);

?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <?php
                print $livre[0]->titre."<br>"; 
                print $livre[0]->nb_pages." pages<br>";
                print $livre[0]->date_sortie."<br>";
                print $livre[0]->reference;
            ?>
            
        </div>
       
    </div>
</div>


