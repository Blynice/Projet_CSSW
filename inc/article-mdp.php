<?php
$page = isset($_GET['sidenav'])?$_GET['sidenav']:'article-mdp';
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
      <h2>PHP / MySQL : bien enregistrer les mots de passe dans la base de données</h2>
          <?php echo breadcrumbs(); ?>

      <p>Vous possédez un site internet qui stocke les mots de passe de vos utilisateurs?
      Il vous faudra donc bien protéger vos mots de passe sans quoi vous risquer de vous faire pirater facilement.</p>
      <h3>MD5</h3>
      <p>Le base de toute protection est de hasher le mot de passe, c'est-à-dire lui donner une forme ou il est impossible de faire le processus inverse pour deviner le mot de passe initial.</p>
      <p>Exemple :</p>
      <ul class="balise_php"><li>&lt;?php</li> <ul><li>$mot_de_passe = "olivier";</li> <li> echo md5( $mot_de_passe ); // d3ca5dde60f88db606021eeba2499c02 </li></ul><li>?&gt;</li></ul>
      <p>Le problème c'est que maintenant vous savez quelle forme aura le mot de passe "olivier". Si un utilisateur pirate votre base de données et voit le mot de passe d3ca5dde60f88db606021eeba2499c02 il saura qu'en réalité le mot de passe est olivier.</p>
      <p>Le problème des technologies d'aujourd'hui c'est qu'elles sont très puissantes et très intelligentes, et si vous tapez "d3ca5dde60f88db606021eeba2499c02" sur Google, il vous dira en 0,000009 seconde que cela correspond à un mot de passe MD5 qui a été hashé et qui avait pour valeur "olivier".</p>
      <p>C'est d'ailleurs pour cette raison qu'on vous dit sur plein de sites qu'un mot de passe qui mélange des chiffres et des lettres est un mot de passe plus sûr pour la sécurité de votre compte.</p>
      <h3>MD5 + SALT</h3>
      <p>Pour bien sécuriser les mots de passe dans votre base de données, utilisez un salt.
Salt ( grain de sable ) est un ajout dans la valeur du mot de passe, qui permet de feinter l'utilisation habituelle du MD5.</p>
<p>Exemple:</p>
<ul class="balise_php"><li>&lt;?php</li> <ul><li>$mot_de_passe = "olivier";</li> <li> $salt         = "@|-°+==00001ddQ"</li><li>echo md5( $mot_de_passe . $salt ); // c8a517107aca7f1fcac87004d041a9f1</li></ul><li>?&gt;</li></ul>
<p>J'ai vérifié le jour ou j'écris ces lignes : la valeur "c8a517107aca7f1fcac87004d041a9f1" n'existe pas sur Google.
Super cette methode semble sécurisée! Si un pirate met la main sur la base de données, tant qu'il ne connait pas la valeur du salt, il ne pourra pas en faire grand chose.</p>
<p>Le problème de cette méthode c'est que si deux utilisateurs ont le même mot de passe, le hash sera le même et cela peut être gênant. Pour plus de sécurité on peut ajouter une valeur unique dans la création du hash : le mail de l'utilisateur par exemple et on peut même complexifier la logique MD5 :</p>
<p>Example:</p>
<ul class="balise_php"><li>&lt;?php</li> <ul><li>$utilisateur  = "olivier@uneadressebidon.com";</li> <li> $mot_de_passe = "olivier";</li><li>$salt         = "@|-°+==00001ddQ"</li><li>echo md5( $mot_de_passe . $salt . $utilisateur .  $salt . $utilisateur . $utilisateur  ); // c6545123d1213h1004d041a9f1
</li></ul><li>?&gt;</li></ul>
<p>Bonne chance au pirate pour deviner votre construction de mot de passe.</p>
<button type="button" class="btn btn-warning">UNE QUESTION SUR L`ARTICLE</button>
      
      <!-- include footer.php(Oceane) -->
<?php include("footer.php") ?>
