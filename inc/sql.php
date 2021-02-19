
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

    <article class="container-fluid">
      <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>s
    <h2> MySql: SQL c'est quoi? </h2>
      <?php echo breadcrumbs(); ?>


        <p>SQL <b> ( Structured Query Language ) </b> est un langage informatique qui sert à exploiter les bases de données. Il est
            utilisé pour exploiter <b> MySQL. </b></p>

            <p> Les instructions SQL sont très simples à apprendre puisqu'elles ressemblent énormément aux phrases ordinaires de
                l'anglais. Si vous comprenez l'anglais, vous avez déjà compris SQL. </p>

            <p> Il existe des logiciels graphiques, comme Phpmyadmin, qui permettent de réaliser des actions SQL sans écrire la
            moindre ligne SQL.</p>
    <br>
    <hr>

        <h2> Une base de données c'est quoi? </h2>
        <p> Une base de données ( ou <b> database en anglais </b> ) est un conteneur qui permet de stocker des informations structurées et qui sont exploitables facilement. <br>
        Une base de données est composée de tables qui sont elles-mêmes composées de <b> colonnes </b> et de <b> lignes/entrées. </b>
        </p>

    <br>
    <hr>

        <h2> CRUD MySQL </h2>
        <p> En informatique on appelle CRUD ( Create, Read, Update, Delete ) désigne les 4 opérations de base d'un logiciel. Le terme est un clin d'oeil au mot "crude" qui signifique justement "rudimentaire". </p>

        <p> Nous allons donc maintenant étudier le CRUD de MySQL. </p>
    <br>
    <hr>

        <h2> Create: Créer une base de données </h2>

        <p> Pour créer une nouvelle base de données </p>

        <p id="grey"> CREATE DATABASE monsiteweb; </p>

        <p> Entrez cette requete dans la console MySQL et validez en apppuyant sur la touche "entrée" : </p>

        <img src="http://localhost/Greta/docs/img/mysqlcreate.png">
    <br>
    <hr>

        <h2> Create: Créer une table de données </h2>

        <p> La table est une composante de la base de données. Nous allons mainteant créer la table "visiteurs" qui stockera des informations sur les visiteurs. </p>

        <p> Pour cela vous devez avant toute chose dire au module que vous allez travailler sur le base de données "monsiteweb" : </p>

        <p id="grey"> &nbsp USE monsiteweb; </p>

        <p> Puis : </p>

        <p id="grey"> &nbsp CREATE TABLE visiteurs <br>
            &nbsp ( adresse_ip varchar(255), date datetime );
        </p>

        <img src="http://localhost/Greta/docs/img/mysqltable.png">

        <p> Lorsque l'on créer une table ( qui peut se représenter comme un tableau avec une double entrée ) on doit indiquer un nom pour chaque colonne et typer les données. Ainsi on doit indiquer si dans la colonne en question on y stock des chiffres, des lettres, les deux, des formats de date, etc. </p>

        <p> Dans notre cas, nous avons choisi de créer une tableau avec deux colonnes, la première enregistrant des données qui auront le format d'une adresse IP, c'est à dire : XXX.XXX.XXX.XXX où X est un chiffre. Dans ce cas la, il y aura des chiffres et des points, il s'agit donc d'un format alphanumérique ; nous l'indiquons grâce au type <b> VARCHAR(255) </b> 255 étant le nombre de caractères que l'on peut enregistrer au maximum pour une entrée. </p>

        <p> La deuxième colonne est un format <b> DATETIME </b>, c'est à dire qu'il stockera une date dans un format défini par MySQL.</p>
    <br>
    <hr>

        <h2> Read: Lire une base de données </h2>

        <p> Il est possible de voir la liste des tables d'une base de données à l'aide de la commande: </p>

        <p id="grey"> &nbsp SHOW TABLES; </p>
        <img src="http://localhost/Greta/docs/img/mysqlshowtables.png">
        <p> et voir le contenu d'une table à l'aide de la commande <b> DESCRIBE </b> : </p>

        <p id="grey"> &nbsp DESCRIBE visiteur;</p>
        <img src="http://localhost/Greta/docs/img/mysqldescribetable.png">
        <p> On remarque que MySQL nous retourne un tableau à double entrée avec le nom des colonnes qui compose la table et leur type de données.
        </p>
    <br>
    <hr>

        <h2> Insérer une entrée </h2>
        <p> Nous allons maintenant entrer une données dans ce tableau visiteurs : </p>

        <p id="grey"> &nbsp   INSERT INTO <br>
            &nbsp   visiteurs <br>
            &nbsp   SET <br>
            &nbsp   date = NOW(), <br>
            &nbsp   adresse_ip = "10.2.12.15";</p>

        <img src="http://localhost/Greta/docs/img/mysqlinsert.png">

        <p> On remarque que pour indiquer la date et l'heure à mysql il suffit d'appeler une fonction: <b> NOW() </b>. </p>
    <br>
    <hr>

        <h2> Lire les entrées </h2>
        <p> Pour lire toutes les entrées d'une table on utilise la commande suivante: </p>
        <p id="grey"> &nbsp SELECT * FROM visiteurs; </p>
        <img src="http://localhost/Greta/docs/img/mysqlselect.png">
        <p> On remarque que MySQL nous retourne un tableau avec les valeurs que nous avons renseignées plus haut. </p>
    <br>
    <hr>

        <h2> Modifier une entrée </h2>
        <p> Pour modifier une entrée on utilise la commande <b> UPDATE.</b> </p>
        <p id="grey"> &nbsp UPDATE visiteurs SET adresse_ip = "10.0.0.1";  </p>
        <p> Ensuite exécutons la requete <b> SELECT </b> pour voir si notre demande de modification a réussi : </p>
        <img src="http://localhost/Greta/docs/img/mysqlupdate.png">
    <br>
    <hr>

        <h2> Supprimer une entrée </h2>
        <p> On utilise la commande <b> "DELETE" </b> pour supprimer une entrée: </p>
        <p id="grey"> &nbsp DELETE FROM visiteurs WHERE adresse_ip = "10.0.0.1";  </p>

    <hr>

      <button type="button" class="btn btn-warning">UNE QUESTION SUR L`ARTICLE</button>



<?php include("footer.php") ?>
