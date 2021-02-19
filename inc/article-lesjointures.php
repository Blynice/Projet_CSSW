
<?php
$page = isset($_GET['sidenav'])?$_GET['sidenav']:'article-lesjointures.php';
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
    <div class="row">
        <div class="col-12">
            <h2>Les jointures SQL</h2>
            <?php echo breadcrumbs(); ?>
            <p>Les jointures SQL permettent de lier des tables entre elles. Ces tables peuvent être de la même base de données ou non.</p>
            <hr>
        </div>
        <div class="col-12">
            <h2>Table d'exemple pour les jointures</h2>
            <p>Nous utiliserons les données suivantes pour les exemples:</p>
            <div class="bg-grey p-3">
                <table>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">CREATE DATABASE IF NOT EXISTS monsiteweb;</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">USE monsiteweb;</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">DROP TABLE IF EXISTS visiteurs;</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">CREATE TABLE visiteurs</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">( id int, adresse_ip varchar(255), date datetime );</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">DROP TABLE IF EXISTS users;</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">CREATE TABLE users</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">( id int, nom varchar(255), adresse_ip varchar(255) );</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">INSERT INTO visiteurs (id, date, adresse_ip) </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">VALUES </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">( "1", "2013-11-20 15:05:13", "5.20.4.96" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">( "2", "2012-05-15 23:55:10", "105.12.3.6" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">( "3", "2013-10-08 12:14:06", "52.24.23.3" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">( "4", "2013-06-07 04:15:00", "36.45.25.204" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">( "5", "2014-11-20 23:03:45", "111.111.111.111" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;"> ( "6", "2010-07-10 03:45:12", "111.111.111.111" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">( "7", "2011-06-15 23:03:45", "111.111.111.111" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;"> ( "8", "2012-05-23 00:00:01", "111.111.111.111" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;"> ( "9", "2010-15-30 23:23:42", "0.0.0.0" );</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">INSERT INTO users (id, nom, adresse_ip) </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">VALUES </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">( "1", "Olivier ENGEL", "5.20.4.96" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">( "2", "Batman", "105.12.3.6" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">( "3", "Zorro", "52.24.23.3" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">( "4", "Superman", "36.45.25.204" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;"> ( "5", "Spiderman", "222.222.222.222" ),</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">( "6", "Hulk", "222.222.222.222" );</td>
                    </tr>
                </table>
            </div>
            <hr>
        </div>
        <div class="col-12">
            <h2>La table visiteurs</h2>
            <img src="http://localhost/Greta/docs/img/sql18.png" class="mx-auto d-block img-fluid" alt="sql18">
            <hr>
        </div>
        <div class="col-12">
            <h2>La table users</h2>
            <img src="http://localhost/Greta/docs/img/sql19.png" class="mx-auto d-block img-fluid" alt="sql18">
            <hr>
        </div>

        <div class="col-12">
            <h2>Jointure interne</h2>
            <p>Nous allons regrouper toutes les informations de ces deux tables en une seule table. Le but recherché de cet exemple et de pouvoir dire quel nom est associé à l'adresse IP. Requete SQL qui fait la jointure:</p>
            <p class="bg-grey">SELECT * FROM visiteurs a, users b WHERE a.adresse_ip = b.adresse_ip;</p>
            <p>Résultat :</p>
            <div>
                <img src="http://localhost/Greta/docs/img/sql20.png" class="mx-auto d-block img-fluid" alt="sql20">
            </div>
            <p class="m-4">La première chose que l'on remarque c'est qu'il n'y a que 4 lignes alors que la table "visiteurs" en a 9. SQL n'a pas trouvé une jointure possible avec les lignes 5,6,7,8 et 9 de la table visiteurs, puisque l'adresse IP n'est pas présente dans la table users.</p>
            <p>Cette jointure est donc la plus simple qui existe en SQL, et elle ignore les ligne qui ne peuvent avoir de jointures.</p>
            <p>Il existe une autre syntaxe pour ce type de jointure:</p>
            <div class="bg-grey p-3">
                <table>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">SELECT </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">* </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">FROM </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">visiteurs a </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">INNER JOIN </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">users b ON a.adresse_ip = b.adresse_ip;</td>
                    </tr>
                </table>
            </div>
            <p class="m-4">Le résultat de cette jointure est évidemment le même que l'exemple plus haut.
                A noter aussi que le mot INNER est facultatif.</p>
            <div class="bg-grey p-3">
                <table>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">SELECT </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">* </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">FROM </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">visiteurs a </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">JOIN </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">users b ON a.adresse_ip = b.adresse_ip;</td>
                    </tr>
                </table>
            </div>
            <hr>
        </div>

        <div class="col-12">
            <h2>WHERE, ORDER BY et LIMIT</h2>
            <p>La recherche, le tri et la limitation d'affichage de données se place après les jointures :</p>
            <div class="bg-grey p-3">
                <table>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">SELECT </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">* </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">FROM </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">visiteurs a </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">JOIN </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">users b ON a.adresse_ip = b.adresse_ip</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">WHERE</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">a.date &gt; "2013-01-01 00:00:00";</td>
                    </tr>
                </table>
            </div>
            <p>Résultat:</p>
            <div>
                <img src="http://localhost/Greta/docs/img/sql21.png" class="mx-auto d-block img-fluid" alt="sql21">
            </div>
            <hr>
        </div>
        <div class="col-12">
            <h2>Les jointures externes</h2>
            <p>Sur MySQL , il existe 2 jointures externes possibles : LEFT JOIN et RIGHT JOIN.
                Dans l'exemple de jointure interne exmpliqué plus haut, nous avons remarqué qu'il y avait 4 lignes alors que la table "visiteurs" possédait 5 entrées.
            </p>
            <p>La jointure externe permet de récupérer cette ligne, même si elle n'est associée à rien.</p>
            <hr>
        </div>
        <div class="col-12">
            <h2>LEFT JOIN</h2>
            <p>Requete SQL de jointure LEFT JOIN:
            </p>
            <div class="bg-grey p-3">
                <table>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">SELECT </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">* </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">FROM </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">visiteurs a </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">LEFT JOIN </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">users b ON a.adresse_ip = b.adresse_ip;</td>
                    </tr>
                </table>
            </div>
            <p class="m-4">
                Résultat de la jointure SQL:
            </p>
            <div>
                <img src="http://localhost/Greta/docs/img/sql22.png" class="mx-auto d-block img-fluid" alt="sql22">
            </div>
            <p class="m-4">On remarque que la jointure se fait à partir de la table de gauche ( d'où le terme LEFT JOIN ) et on ajoute, sans perdre d'informatio de la table initiales les jointures de la table suivante.</p>
            <hr>
        </div>

        <div class="col-12">
            <h2>RIGHT JOIN</h2>
            <p>A l'opposé RIGHT JOIN établit une jointure en partant de la table de droite.
            </p>
            <p>Requete SQL de jointure RIGHT JOIN:</p>
            <div class="bg-grey p-3">
                <table>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">SELECT </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">* </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">FROM </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">visiteurs a </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">RIGHT JOIN </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">users b ON a.adresse_ip = b.adresse_ip;</td>
                    </tr>
                </table>
            </div>
            <p class="m-4">
                Résultat de la jointure SQL:
            </p>
            <div>
                <img src="http://localhost/Greta/docs/img/sql23.png" class="mx-auto d-block img-fluid" alt="sql23">
            </div>
            <hr>
        </div>
        <div class="col-12">
            <h2>Jointure multi critères</h2>
            <p>Vous pouvez affiner la jointure en ajoutant plusieurs critères :</p>
            <div class="bg-grey p-3">
                <table>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">SELECT </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">* </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">FROM </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">visiteurs a </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">LEFT JOIN </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">users b ON a.adresse_ip = b.adresse_ip AND a.xxx = b.yyy;</td>
                    </tr>
                </table>
            </div>
            <p class="m-4">où xxx serait le nom de la colonne de la première table et yyy de la deuxième table</p>
            <hr>
        </div>
        <div class="col-12">
            <h2>Lier plusieurs tables</h2>
            <p>Il est possbile de lier plus que deux tables :</p>
            <div class="bg-grey p-3">
                <table>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">SELECT </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">* </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">FROM </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">&lt;<span class="balise">table</span>&gt; a </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">LEFT JOIN </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">&lt;<span class="balise">table</span>&gt; b ON a.&lt;<span class="balise">colonne</span>&gt; = b.&lt;<span class="balise">colonne</span>&gt; </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">LEFT JOIN </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">&lt;<span class="balise">table</span>&gt; c ON b.&lt;<span class="balise">colonne</span>&gt; = b.&lt;<span class="balise">colonne</span>&gt;;</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="btn btn-danger mt-5">Une question sur l'article?</div>

<?php include("footer.php") ?>
