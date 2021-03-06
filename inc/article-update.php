<?php
$page = isset($_GET['sidenav'])?$_GET['sidenav']:'article-update';
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
      <h2>SQL UPDATE</h2>
  <?php echo breadcrumbs(); ?>
      <h3>UPDATE</h3>
      <p>La commande update permet de modifier les entrées d'une table.</p>
      <h3>Table d'exemple</h3>
      <p>Nous utiliserons les données suivantes pour les exemples:</p>
      <ul>
        <li>CREATE DATABASE IF NOT EXISTS monsiteweb;</li>
        <li>USE monsiteweb;</li>
        <li>DROP TABLE IF EXISTS visiteurs;</li>
        <li>CREATE TABLE visiteurs</li>
        <ul><li>( id int, adresse_ip varchar(255), date datetime );</li></ul>
        <li>INSERT INTO visiteurs (id, date, adresse_ip) </li>
        <li>VALUES</li>
        <ul>
          <li>( "1", "2013-11-20 15:05:13", "5.20.4.96" ),</li>
          <li>( "2", "2012-05-15 23:55:10", "105.12.3.6" ),</li>
          <li>( "3", "2013-10-08 12:14:06", "52.24.23.3" ),</li>
          <li>( "4", "2013-06-07 04:15:00", "36.45.25.204" ),</li>
          <li>( "5", "2014-11-20 23:03:45", "49.102.45.101" );</li>
        </ul>
      </ul>
      <h3>Modifier des données</h3>
      <div col-sm-4>
      <div class="card p-2 m-3" style="width:300px">
      <div class="row">

        <div class="col-sm-6">
          <div class="card-body-right">
            <p class="card-text">SELECT * FROM visiteurs;</p>
          </div>
           </div>
           <div class="col-sm-6">
             <img class="card-img" src="http://creersonsiteweb.net/images/sql1.png" alt="Card image"/>
           </div>
        </div>
        </div>
      </div>

      <div col-sm-4>
      <div class="card p-2 m-3" style="width:300px">
      <div class="row">

        <div class="col-sm-6">
          <div class="card-body-right">
            <p class="card-text">UPDATE visiteurs SET adresse_ip = "0.0.0.0";</p>
          </div>
           </div>
           <div class="col-sm-6">
             <img class="card-img" src="http://creersonsiteweb.net/images/sql14.png" alt="Card image"/>
           </div>
        </div>
        </div>
      </div>
      <h3>Modifier des données avec filtre</h3>

      <div col-sm-4>
      <div class="card p-2 m-3" style="width:300px">
      <div class="row">

        <div class="col-sm-6">
          <div class="card-body-right">
            <p class="card-text">UPDATE visiteurs SET adresse_ip = "6.6.6.6" WHERE id = 3;</p>
          </div>
           </div>
           <div class="col-sm-6">
             <img class="card-img" src="http://creersonsiteweb.net/images/sql16.png" alt="Card image"/>
           </div>
        </div>
        </div>
      </div>
      <h3>Modifier des données avec une jointure</h3>
      <ul>
        <li>UPDATE</li>
        <ul><li>viseteurs as a,</li> <li>users as b</li></ul>
        <li>SET</li>
        <ul><li>a.adresse_ip = b.adresse_ip</li></ul>
        <li>WHERE</li>
        <ul><li>a.id = b.id;</li></ul>
      </ul>
      <div col-sm-4>
      <div class="card p-2 m-3" style="width:300px">
      <div class="row">

        <div class="col-sm-6">
          <div class="card-body-right">
            <p class="card-text"></p>
          </div>
           </div>
           <div class="col-sm-6">
             <img class="card-img" src="http://creersonsiteweb.net/images/sql17.png" alt="Card image"/>
           </div>
        </div>
        </div>
      </div>
      <button type="button" class="btn btn-warning">UNE QUESTION SUR L`ARTICLE</button>

      <!-- include footer.php(Oceane) -->
<?php include("footer.php") ?>
