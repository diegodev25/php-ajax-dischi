<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Spotify Dischi</title>
    <?php
      include 'data.php';
    ?>
  </head>
  <body>
    <!-- HEADER -->
    <header class="header">
      <img src="img/spotify.svg" alt="Spotify">
    </header>
    <!-- MAIN -->
    <main class="main">
      <div class="container">
        <?php
          foreach ($database as $key) {
            ?>
        <div class="album">
          <img src=<?php echo $key['poster'] ?> alt="cover album">
          <h3><?php echo $key['title'] ?></h3>
          <h4><?php echo $key['author'] ?></h4>
          <h5><?php echo $key['year'] ?></h5>
        </div>
        <?php
          }
        ?>
      </div>
    </main>
  </body>
</html>
