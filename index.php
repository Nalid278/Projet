<!doctype html>
<?php
include ('./admin/lib/php/adm_liste_include.php');
$cnx = Connexion::getInstance($dsn, $user, $pass);

session_start();
?>

<html>
    <head>
        <title>Projet web</title>
        <link rel="stylesheet" type="text/css" href="./admin/lib/css/bootstrap-3.3.7/dist/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="./admin/lib/css/gt_ecole.css"/> 
        <script src="admin/lib/js/jquery-3.1.1.js"></script>
        <script src="admin/lib/css/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
        <script src="admin/lib/js/functionsBtJquery.js"></script>
        <script src="admin/lib/js/functionsJquery.js"></script>
        <script src="admin/lib/js/functionsJqueryVal.js"></script>
        <script src="admin/lib/js/messagesJqueryVal.js"></script>
        
        <meta charset='UTF-8'/>
    </head>

    <body>
        <header>
            <div class="container" >
                <img src="admin/images/gt_banniere.jpg" alt="banProjetWeb" title="banProjetWeb" id="banniere"/>
            </div>
        </header>
        <br/>
        <div class="container" id='contenu'>
            <div class="row">
                <div class="col-sm-2">
                    <nav>
                        <?php
                        if (file_exists('./lib/php/gt_menu.php')) {
                            include ('./lib/php/gt_menu.php');
                        }
                        ?>   
                    </nav>
                </div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="./admin/index.php" class="pull-right">Administration</a>
                        </div>
                    </div>
                    
                    <section id="main">
                        <?php
                        if (!isset($_SESSION['page'])) {
                            $_SESSION['page'] = "accueil";
                        }
                        if (isset($_GET['page'])) {
                            $_SESSION['page'] = $_GET['page'];
                        }
                        $path = './pages/' . $_SESSION['page'] . '.php';
                        if (file_exists($path)) {
                            include ($path);
                        } else {
                            ?>
                            <span class="txtGras txtRouge">Oups!La page demandée n'existe pas</span>
                            <meta http-refresh: Content="1;url=index.php?page=accueil"/>
                            <?php
                        }
                        ?>  
                    </section>
                </div>
            </div>

            <footer class="footer">
                <?php
                if (file_exists('./admin/lib/php/footer.php')) {
                    include ('./admin/lib/php/footer.php');
                }
                ?>  
            </footer>
        </div>
    </div>


</body>
</html>
