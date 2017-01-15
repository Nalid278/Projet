<!doctype html>
<?php
include ('./lib/php/adm_liste_include.php');
$cnx = Connexion::getInstance($dsn, $user, $pass);

session_start();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./lib/css/bootstrap-3.3.7/dist/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="./lib/css/gt_ecole.css"/>
        <script type="text/javascript" src="./lib/js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="./lib/css/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <img src="./images/gt_banniere.jpg" alt="banProjetWeb" id="banniere"/>
            </div>
        </header>
        <div class="container" id="contenu">
            <div class="row">
                <div class="col-sm-2">
                    <nav>
                        <?php
                        if (!isset($_SESSION['admin']) && !isset($_SESSION['membre'])) {
                            if (file_exists('./lib/php/adm_connect.php')) {
                                include('./lib/php/adm_connect.php');
                            }
                        } else {
                            if (isset($_SESSION['admin'])) {
                                if (file_exists('./lib/php/adm_menu.php')) {
                                    include('./lib/php/adm_menu.php');
                                }
                            }

                            if (isset($_SESSION['membre'])) {
                                if (file_exists('./lib/php/membre_menu.php')) {
                                    include('./lib/php/membre_menu.php');
                                }
                            }
                        }
                        ?>
                    </nav>  
                </div> 
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php if (isset($_SESSION['admin'])) { ?>
                                <a href="./index.php?page=disconnect" class="pull-right margin1">D&eacute;connexion</a>
                            <?php } else if (isset($_SESSION['membre'])) {
                                ?>
                                <a href="./index.php?page=disconnect" class="pull-right margin1">D&eacute;connexion</a>
                                <?php
                            } else {
                                ?>
                                <a href="./index.php" class="pull-right">Connexion</a>
                                <?php
                            }
                            ?>

                        </div>
                    </div> 

                    <?php
                    if (!isset($_SESSION['admin']) && !isset($_SESSION['membre'])) {
                        $_SESSION['page'] = "admin_connect";
                    } else {
                        if (isset($_SESSION['page']) && isset($_SESSION['admin'])) {
                            $_SESSION['page'] = "accueil_admin";
                        }
                        if (isset($_SESSION['page']) && isset($_SESSION['membre'])) {
                            $_SESSION['page'] = "accueil_membre";
                        }

                        if (isset($_GET['page'])) {
                            $_SESSION['page'] = $_GET['page'];
                        }
                    }



                    $path = './pages/' . $_SESSION['page'] . '.php';
                    if (file_exists($path)) {
                        include($path);
                    } else {
                        print "Page introuvable";
                    }
                    ?>
                </div>
            </div>
            <footer>               
                webmaster#projetweb
            </footer>
        </div>
    </body>
</html>
