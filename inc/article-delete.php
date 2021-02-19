<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>article-sql-select</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>
  <body>

      <!-- include navbar.php(Ben) -->
      <article class="container">
      <h2>SQL DELETE /DROP / TRUNCATE<h2>
      <!-- include header.php (Oceane) -->
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
      <article>
      <!-- include footer.php(Oceane) -->
    <script src="./js/main.js"></script>
  </body>
</html>
