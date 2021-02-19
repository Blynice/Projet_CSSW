
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
<!DOCTYPE html>
<head>
    <title> <?php echo $title ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  </head>
  <body>
<?php include $contenu;?>
