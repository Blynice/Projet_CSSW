
<?php
$page = isset($_GET['sidenav'])?$_GET['sidenav']:'article-select';
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
      <h2>SQL SELECT<h2>
      <?php echo breadcrumbs(); ?>

      <h3>Les requetes SELECT en MySQL</h3>
      <p>La commande SELECT est la plus importante à comprendre en MySQL. Maitriser cette commande vous permettra d'établir des statistiques, sortir la valeur précise d'un chiffre d'affaire, trouver un item précis et pertinant, bref c'est la pierre angulaire de tout votre logiciel /site web.</p>
      <h3>Table d'exemple</h3>
      <p>Nous utiliserons les données suivantes pour les exemples:</p>
      <ul>
          <li> CREATE DATABASE IF NOT EXISTS monsiteweb; </li>
          <li> 	USE monsiteweb; </li>
          <li> DROP TABLE IF EXISTS visiteurs; </li>
          <li> CREATE TABLE visiteurs </li>
          <li> ( id int, adresse_ip varchar(255), date datetime ); </li>
          <li> DROP TABLE IF EXISTS users; </li>
          <li> CREATE TABLE users </li>
          <li> ( id int, name varchar(255), adresse_ip varchar(255) ); </li>
          <li> 	INSERT INTO visiteurs (id, date, adresse_ip)  </li>
          <li> VALUES  </li>
          <li> ( "1", "2013-11-20 15:05:13", "5.20.4.96" ),  </li>
          <li> ( "2", "2012-05-15 23:55:10", "105.12.3.6" ), </li>
          <li> ( "3", "2013-10-08 12:14:06", "52.24.23.3" ), </li>
          <li> ( "4", "2013-06-07 04:15:00", "36.45.25.204" ), </li>
          <li> ( "5", "2014-11-20 23:03:45", "49.102.45.101" ); </li>
          <li> INSERT INTO users (id, name, adresse_ip)  </li>
          <li> VALUES  </li>
          <li> ( "1", "Olivier ENGEL", "5.20.4.96" ), </li>
          <li> ( "2", "Batman", "105.12.3.6" ), </li>
          <li> ( "3", "Zorro", "52.24.23.3" ), </li>
          <li> ( "4", "Superman", "36.45.25.204" ); </li>
      </ul>
      <h3>Les opérations</h3>
      <ul>
        <li>	SELECT 1 + 2;</li>
        <li>-> 3</li>
        <li>SELECT 1 * 2;</li>
        <li>	-> 2 </li>
        <li>SELECT 1 / 2;</li>
        <li>-> 0.5</li>
        <li>SELECT 1 - 2;</li>
        <li>-> -1</li>
      </ul>
      <h3>Manipulation des caractères</h3>
      <ul>
        <li>SELECT LENGTH("test");</li>
        <li>-> 4</li>
        <li>SELECT LOWER("Test");</li>
        <li>-> "test"</li>
        <li>SELECT UPPER("test");</li>
        <li>-> "TEST"</li>
        <li>SELECT TRIM(" test  ");</li>
        <li>-> "test"</li>
        <li>	SELECT QUOTE(" L'orange");</li>
        <li>-> "L\`orange"</li>
        <li>SELECT REPLACE("olivier engel", "engel", "angel");</li>
        <li>-> "olivier angel"</li>
        <li>SELECT REVERSE("olivier");</li>
        <li>-> "reivilo"</li>
        <li>SELECT CONCAT("olivier", " ", engel");</li>
        <li>-> "olivier engel"</li>
      </ul>
      <h3>Les expressions régulières avec MySQL</h3>
      <ul>
          <li>	SELECT "olivier" REGEXP "^ol";    </li>
          <li>-> 1</li>
          <li>	SELECT "olivier" REGEXP "ol|ul";     </li>
          <li>-> 1</li>
          <li>SELECT "olivier" REGEXP "oli(.)?ier";  </li>
          <li>-> 1</li>
      </ul>
      <h3>Les dates en MySQL</h3>
      <ul>
        <li>	SELECT NOW();</li>
        <li>-> 2014-01-05 23:45:01</li>
        <li>Ajouter 31 jours à une date:</li>
        <li>SELECT DATE_ADD('2014-01-02', INTERVAL 31 DAY);</li>
        <li>-> 2014-01-05 23:45:01</li>
        <li>Autre syntaxe pour ajouter 1 jour à une date</li>
        <li>SELECT SELECT '2014-01-02' + INTERVAL 31 DAY;</li>
        <li>-> 2014-01-05 23:45:01</li>
        <li>Ajouter 1 Heure</li>
        <li>	SELECT SELECT '2014-01-02' + INTERVAL 1 HOUR;</li>
        <li>-> 2014-01-02 01:00:00</li>
        <li>Supprimer 1 Heure</li>
        <li>SELECT SELECT '2014-01-02 00:01:00' - INTERVAL 1 HOUR;</li>
        <li>-> 2014-01-02 00:00:00</li>
        <li>Extrait la partie DATE</li>
        <li>SELECT DATE('2014-03-01 01:02:03');</li>
        <li>-> 2014-03-01</li>
        <li>Indique le nombre de jours entre deux dates</li>
        <li>SELECT DATEDIFF('2014-01-31 03:00:59','2013-04-10');</li>
        <li>-> 296</li>
      </ul>
      <h3>Le SELECT simple</h3>
      <p>La requete suivante affichera le tableau dans sa globalité:</p>
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
 <h3>Sélectionner des colonnes</h3>
 <div col-sm-4>
 <div class="card p-2 m-3" style="width:300px">
 <div class="row">

   <div class="col-sm-6">
     <div class="card-body-right">
       <p class="card-text">SELECT date, id FROM visiteurs;</p>
     </div>
      </div>
      <div class="col-sm-6">
        <img class="card-img" src="http://creersonsiteweb.net/images/sql9.png" alt="Card image"/>
      </div>
   </div>
   </div>
 </div>
<h3>Donner un alias à une colonne</h3>
<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT date as date_1, id as iden FROM visiteurs;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql10.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>
<h3>Filtrer avec WHERE</h3>
<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT * FROM visiteurs WHERE id = 4;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql2.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>


<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT * FROM visiteurs WHERE id != 3;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql15.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>

<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT * FROM visiteurs WHERE id < 4;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql3.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>

<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT * FROM visiteurs WHERE id >= 2;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql4.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>


<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT * FROM visiteurs WHERE id > 1 AND id < 4;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql5.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>

<h3>COUNT</h3>
<p>Il est possible de compter le nombre d'items d'une sélection.</p>

<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT COUNT(*) FROM visiteurs;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql6.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>

<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT COUNT(*) FROM visiteurs WHERE id > 2;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql7.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>

<h3>MAX</h3>
<p>La fonction MAX retourne la plus grande valeur de la sélection.</p>
<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT MAX(id) FROM visiteurs;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql12.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>
<h3>MIN</h3>
<p>La fonction MIN retourne la plus petite valeur de la sélection.</p>
<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT MIN(id) FROM visiteurs;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql13.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>
<h3>SUM</h3>
<p>Il est possible d'additionner la valeur des items d'une sélection.</p>
<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT SUM(id) FROM visiteurs WHERE id > 2;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql8.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>
<p>La somme de (3+4+5) = 12</p>
<h3>AVG</h3>
<p>AVG ( pour average ) permet de calculer une moyenne sur une selection</p>
<div col-sm-4>
<div class="card p-2 m-3" style="width:300px">
<div class="row">

  <div class="col-sm-6">
    <div class="card-body-right">
      <p class="card-text">SELECT AVG(id) FROM visiteurs;</p>
    </div>
     </div>
     <div class="col-sm-6">
       <img class="card-img" src="http://creersonsiteweb.net/images/sql11.png" alt="Card image"/>
     </div>
  </div>
  </div>
</div>
<p>La moyenne de (1+2+3+4+5) / 5 = 3</p>
<button type="button" class="btn btn-warning">UNE QUESTION SUR L`ARTICLE</button>
    
      <!-- include footer.php(Oceane) -->
<?php include("footer.php") ?>
