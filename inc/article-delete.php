
<?php
$page = isset($_GET['sidenav'])?$_GET['sidenav']:'article-delete';
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
<?php include ("header.php"); ?>
  <body>


        <?php include ("navbar.php"); ?>
      <article class="container-fluid">
<button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

      <h2>SQL DELETE /DROP / TRUNCATE</h2>
          <?php echo breadcrumbs(); ?>
      <h3>DELETE</h3>
      <p>On utilise la commande "DELETE" pour supprimer une entrée:</p>
      <p>DELETE FROM visiteurs WHERE adresse_ip = "10.0.0.1"; </p>
      <h3>Truncate</h3>
      <p>On utilise la commande "TRUNCATE" pour vider une table:</p>
      <p>Truncate TABLE visiteurs;  </p>
      <h3>DROP</h3>
      <p>On utilise la commande "DROP" pour supprimer une table:</p>
      <p>DROP TABLE visiteurs;  </p>
<button type="button" class="btn btn-warning">UNE QUESTION SUR L`ARTICLE</button>




<?php include("footer.php") ?>
