
<?php
$page = isset($_GET['sidenav'])?$_GET['sidenav']:'article-sqlCreate.php';
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
<article class="container-fluid mb-5">
<button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
    <hr>
    <div class="row">
        <div class="col-12">
            <h2>CREATE Database</h2>
            <?php echo breadcrumbs(); ?>
            <p>
                Une base de données est un conteneur composé de tables de données. Pour créer une base de données sur MySQL, vous pouvez utiliser la commande suivante:
            </p>
            <p class="bg-grey">CREATE DATABASE monsiteweb;</p>
            <p>Pour voir les tables d'une base de données vous pouvez utiliser la commande :</p>
            <p class="bg-grey">SHOW TABLES;</p>
            <p>Pour travailler dans l'environnement de la base de données :</p>
            <p class="bg-grey">USE monsiteweb;</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <h2>CREATE Table</h2>
            <p>
                Une table est une composante d'une base de données. Si une base de données était une armoire, une table de données serait un tiroire. Bien construire une table de données est primordial pour la rapidité de votre logiciel / site web ainsi que pour la cohérence des données.
            </p>
            <p>Il est nécessaire d'indiquer un type pour chaque colonne qui compose le tableau.</p>

            <p>Voici les types existants:</p>
            <ul>
                <li>TINYINT[(nbr de caractères)]</li>
                <li>SMALLINT[(nbr de caractères)]</li>
                <li>MEDIUMINT[(nbr de caractères)]</li>
                <li>INT[(length)]</li>
                <li>INTEGER[(nbr de caractères)]</li>
                <li>BIGINT[(nbr de caractères)]</li>
                <li>REAL[(nbr de caractères,décimales)]</li>
                <li>DOUBLE[(nbr de caractères,décimales)]</li>
                <li>FLOAT[(nbr de caractères,décimales)]</li>
                <li>DECIMAL(nbr de caractères,décimales)</li>
                <li>NUMERIC(nbr de caractères,décimales)</li>
                <li>DATE</li>
                <li>TIME</li>
                <li>TIMESTAMP</li>
                <li>DATETIME</li>
                <li>VARCHAR(nbr de caractères)</li>
                <li>TINYBLOB</li>
                <li>BLOB</li>
                <li>MEDIUMBLOB</li>
                <li>LONGBLOB</li>
                <li>TINYTEXT</li>
                <li>TEXT</li>
                <li>MEDIUMTEXT</li>
                <li>LONGTEXT</li>
                <li>ENUM(valeur1,valeur2,valeur3,...)</li>
                <li>SET(valeur1,valeur2,valeur3,...)</li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="col-12">
        <h2>Syntaxe</h2>
        <div class="bg-grey p-3">
            <table>
                <tr>
                    <th></th>
                    <td style="padding-left:0px;"></td>
                </tr>
                <tr>
                    <th></th>
                    <td style="padding-left:0px;">CREATE TABLE IF NOT EXISTS visiteurs (</td>
                </tr>
                <tr>
                    <th></th>
                    <td style="padding-left:0px;"> id int(5) NOT NULL AUTO_INCREMENT,</td>
                </tr>
                <tr>
                    <th></th>
                    <td style="padding-left:0px;"> nom varchar(50) DEFAULT NULL,</td>
                </tr>
                <tr>
                    <th></th>
                    <td style="padding-left:0px;"> date DATE DEFAULT NULL,</td>
                </tr>
                <tr>
                    <th></th>
                    <td style="padding-left:0px;"> adresse_ip varchar(50) DEFAULT NULL,</td>
                </tr>
                <tr>
                    <th></th>
                    <td style="padding-left:0px;"> nouveau_visiteur bool DEFAULT NULL,</td>
                </tr>
                <tr>
                    <th></th>
                    <td style="padding-left:0px;"> lieu varchar(250) DEFAULT NULL,</td>
                </tr>
                <tr>
                    <th></th>
                    <td style="padding-left:0px;"> PRIMARY KEY(id)</td>
                </tr>
                <tr>
                    <th></th>
                    <td style="padding-left:0px;">);</td>
                </tr>
                <tr>
                    <th></th>
                    <td style="padding-left:0px;"></td>
                </tr>
            </table>
        </div>

        <p class="mt-3">
            La clé primaire est un index unique qui permet d'identifier une ligne. Cette valeur, souvent un identifiant numérique que l'on nomme "id" n'est pas voué à changer et permet de lier les tables entres elles.
        </p>
    </div>

    <div class="btn btn-danger mt-5">Une question sur l'article?</div>

<?php include("footer.php") ?>
