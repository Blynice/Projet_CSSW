
<?php
$page = isset($_GET['sidenav'])?$_GET['sidenav']:'article-delete';
switch($page){

  case 'article-delete':
  $title = 'article-delete';
  $contenu = 'inc/article-delete.php';
  break;

  case 'article-mdp':
   $title = 'article-mdp';
   $contenu = 'inc/article-mdp.php';
   break;

   case 'article-select':
   $title = 'article-select';
   $contenu = 'inc/article-select.php';
   break;

   case 'article-update':
   $title = 'article-update';
   $contenu = 'inc/article-update.php';
   break;

   case 'article-cestquoisql.php':
   $title = 'article-cestquoisql';
   $contenu = 'inc/article-cestquoisql.php';
   break;

   case 'article-phpmyadmin.php':
   $title = 'article-phpmyadmin';
   $contenu = 'inc/article-phpmyadmin.php';
   break;

   case 'article-lesjointures.php':
   $title = 'article-lesjointures';
   $contenu = 'inc/lesjointures.php';
   break;

   case 'article-insert.php':
   $title = 'article-insert';
   $contenu = 'inc/insert.php';
   break;

   case 'article-sqlCreate.php':
   $title = 'article-sqlCreate';
   $contenu = 'inc/article-sqlCreate.php';
   break;

}

?>

<?php include ("header.php"); ?>
<body>
<?php include ("navbar.php"); ?>
<article class ="container-fluid">
<button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
    <h2> Apprendre MySql </h2>
        <?php echo breadcrumbs(); ?>

        <img class="sqllogo1" src="http://localhost/Greta/docs/img/mysql_logo.png"><br>

        <p><a href="#"> MySql </a> est un système de gestion de base de données ( SGBD ). Issu du monde libre, il est l'un des logiciels de gestion de base de données le plus utilisé au monde. </p>

        <p> Mysql est un serveur de base de données relationnelles SQL, il est multi-thread ( peut exécuter plusieurs processus en même temps ) et multi-utilisateur qui fonctionne aussi bien sur Windows que sur Linux ou Mac OS. Les bases de données sont accessibles en utilisant de nombreux languages serveur, dont PHP, que nous utiliserons comme exemple. </p>

    <hr>


        <h3> Accéder à MySQL sur Linux </h3>
        <p> Pour les utilisateurs linux, vous pouvez installer mysql à l'aide de la commande </p>

        <p> aptitude install mysql </p>

        <p> Puis entrez la commande: </p>

        <p> mysql </p>


    <hr>

        <h3> Accéder à MySQL sur Windows </h3>

        <p> Si vous avez correctement installé <a href="#"> WampServer </a> , vous pouvez cliquer sur l'icône WampServer et accéder au module <a href="#"> MySQL console </a> dans l'onglet MySQL: </p>

        <img class="sqllogo" src="http://localhost/Greta/docs/img/lancer.png">

        <p> Une console devrait apparaître : </p>

        <img class="sqllogo" src="http://localhost/Greta/docs/img/console.png">

        <p> Par défaut il n'y a pas de mot de passe, vous pouvez donc appuyer sur la touche entrée et vous accédez à MySQL en étant identifié en tant que root, c'est à dire avec un compte qui a tous les droits. </p>

        <img class="sqllogo" src="http://localhost/Greta/docs/img/consolesql.png">

        <p> C'est dans cette console que vous pourrez entrer vos requètes SQL ( voir chapitre suivant ) </p>

    <hr>

        <button type="button" class="btn btn-warning">UNE QUESTION SUR L`ARTICLE</button>




<?php include("footer.php") ?>
