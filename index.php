<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Spotify Dischi</title>
  </head>
  <body>
    <!-- HEADER -->
    <header class="header">
      <img src="img/spotify.svg" alt="Spotify">
    </header>
    <!-- MAIN -->
    <main class="main">
      <div id="app" class="container">
        <div v-for="element in album" class="album">
          <img :src="element.poster" alt="cover album">
          <h3>{{ element.title }}</h3>
          <h4>{{ element.author }}</h4>
          <h5>{{ element.year }}</h5>
        </div>
      </div>
    </main>
    <script src="script.js"></script>
  </body>
</html>
