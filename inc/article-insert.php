
<?php
$page = isset($_GET['sidenav'])?$_GET['sidenav']:'article-insert.php';
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
          <h2>SQL Insert</h2>
          <?php echo breadcrumbs(); ?>
            <p>La commande INSERT INTO permet d'insérer une donnée dans une table.</p>
            <hr>
        </div>
        <div class="col-12">
            <h2>Insérer une ligne de données</h2>
            <p>Il existe plusieurs syntaxes pour effectuer cette action:</p>
            <p>La plus utilisée étant:</p>
            <div class="bg-grey p-3">
                <table>
                    <tr>
                        <th>

                        </th>
                        <td style="padding-left:0px;">INSERT INTO </td>
                    </tr>
                    <tr>
                        <th>

                        </th>
                        <td style="padding-left:20px;">visiteurs (date, adresse_ip)</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">VALUES </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">( NOW(), "10.2.2.2" );</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;"></td>
                    </tr>
                </table>
            </div>
            <p class="mt-3">L'ordre des colonnes n'a pas d'importance du moment que les données qui suivent respectent l'association COLONNE/DONNEES.</p>
            <p>La syntaxe suivante exécutera la même action:</p>
            <hr>
        </div>
        <div class="col-12">
            <h2>Insérer des données depuis une requete SELECT</h2>
            <p>Il est possible d'insérer des données en SQL à travers la commande SELECT.
            </p>
            <p>Exemple:</p>
            <div class="bg-grey p-3">
                <table>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">INSERT INTO </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">visiteurs ( date, adresse_ip )</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">SELECT</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">date, adresse_ip </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">FROM</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">visiteurs_temp;</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;"></td>
                    </tr>
                </table>
            </div>
            <p class="mt-3">Il est nécessaire de faire correspondre les colonnes de la sous requete et de l'insert.</p>
            <hr>
        </div>
        <div class="col-12 mb-5">
            <h2>REPLACE INTO</h2>
            <p>REPLACE INTO fonctionne exactement comme INSERT INTO, à l'exception que si on insère une donnée où la clé primaire existe déjà, l'ancienne donnée est supprimée puis remplacée par la nouvelle. Exemple:</p>
            <div class="bg-grey p-3">
                <table>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;">REPLACE INTO </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">visiteurs ( date, adresse_ip )</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">SELECT</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">date, adresse_ip </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:20px;">FROM</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:40px;">visiteurs_temp;</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td style="padding-left:0px;"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="btn btn-danger mt-5">Une question sur l'article?</div>

<!-- <script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script> -->
<?php include("footer.php") ?>
