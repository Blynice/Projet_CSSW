
<?php
$page = isset($_GET['sidenav'])?$_GET['sidenav']:'article-phpmyadmin.php';
switch($page){

  case 'article-delete':
  $title = 'article-delete';
  break;

  case 'article-mdp':
   $title = 'article-mdp';
   break;

   case 'article-select':
   $title = 'article-select';
   break;

   case 'article-update':
   $title = 'article-update';
   break;

   case 'article-cestquoisql.php':
   $title = 'article-cestquoisql';
   break;

   case 'article-phpmyadmin.php':
   $title = 'article-phpmyadmin';
   break;

   case 'article-lesjointures.php':
   $title = 'article-lesjointures';
   break;

   case 'article-insert.php':
   $title = 'article-insert';
   break;

   case 'article-sqlCreate.php':
   $title = 'article-sqlCreate';
   break;

}

?>

<?php
include "header.php"
?>
  <?php include ("navbar.php"); ?>
<article class="container-fluid">
<button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
    <div class="row">
        <div class="col-12 col-sm-8">
            <h2>Lancer PHPMYADMIN</h2>
            <?php echo breadcrumbs(); ?>
            <p>Pour lancer PHPMYADMIN, cliquez sur l'icone WampServer puis sélectionnez phpMyAdmin</p>
            <div>
                <img src="http://localhost/Greta/docs/img/phpmyadmin.png" class="mx-auto d-block img-fluid" alt="phpmyadmin">
            </div>
            <p class="mt-3 mb-3 ">Le navigateur s'ouvre :</p>
            <div>
                <img src="http://localhost/Greta/docs/img/phpmyadmin_base.png" alt="phpmyadmin_base">
            </div>
            <hr>
        </div>
        <div class="col-12">
            <h2>Créer une nouvelle table</h2>
            <p>Pour créer une nouvelle table indiquer un nom dans le champs "Nouvelle table" puis le nombre de colonnes désirés en enfin cliquez sur "exécuter".</p>
            <img src="http://localhost/Greta/docs/img/phpmyadmin_table.png" class="img-fluid" alt="table">
            <p class="mt-3">Vous pouvez entrer les types des colonnes puis validez en cliquant sur "Sauvegarder".</p>
            <div>
                <img src="http://localhost/Greta/docs/img/phpmyadmin_creation_table.png" alt="creation table">
            </div>
            <hr>
        </div>
        <div class="col-12">
            <h2>Consulter une table</h2>
            <p>Pour consulter une table cliquez sur le nom de la table dans la page d'accueil.</p>
            <img src="http://localhost/Greta/docs/img/phpmyadmin_consulter_table.png" class="img-fluid" alt="consulter table">
            <p class="mt-3">On peut consulter sur cette vue les colonnes et leur type.</p>
            <hr>
        </div>
        <div class="col-12">
            <h2>Insérer une donnée</h2>
            <p>Pour insérer une données, cliquez sur l'onglet "Insérer" et remplissez les champs. sur le bouton "Exécuter".</p>
            <img src="http://localhost/Greta/docs/img/phpmyadmin_insert.png" class="img-fluid" alt="insert table">
            <p class="mt-3">Puis validez en cliquant sur le bouton "Exécuter" :</p>
            <img src="http://localhost/Greta/docs/img/phpmyadmin_insert_valid.png" class="img-fluid" alt="valide table">
            <p class="mt-3">Une message de confirmation vous informe de la bonne execution de la requete que vous pouvez consulter d'ailleurs.</p>
            <p>Cliquez sur l'onglet "Afficher pour consulter la table" :</p>
            <div>
                <img src="http://localhost/Greta/docs/img/phpmyadmin_consulter_table_pleine.png" class="img-fluid" alt="table pleine">
            </div>
            <p class="mt-3">On remarque la présence des nos deux entrées.</p>
            <hr>
        </div>
        <div class="col-12">
            <h2>Supprimer une donnée</h2>
            <p>Pour supprimer une donnée, il suffit de la sélectionner dans la vue "table" et de cliquer sur l'icone effacer</p>
            <img src="http://localhost/Greta/docs/img/phpmyadmin_delete.png" class="img-fluid" alt="delete table">
            <hr>
        </div>
        <div class="col-12">
            <h2>Editer une donnée</h2>
            <p>Pour éditer une données, cliquez sur l'icône modidier dans la vue "Table"</p>
            <hr>
        </div>
    </div>
    <div class="btn btn-danger mt-5">Une question sur l'article?</div>

<?php include("footer.php") ?>
