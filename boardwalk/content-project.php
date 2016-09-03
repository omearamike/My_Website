<style>
  body {
    background-color: #2980b9;
  }
  .jumbotron_home {
    background-color: #2980b9;
  }

  .jumbotron_home .entry-title {
    color: white;
  }
  </style>

<div class="content-p jumbotron_home">
  <h1> this is the title </h1>
  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  <p> Project which uses a combination of PHP and Javascript to allow users to increase a counter by the action of pressing a button </p>
</div>
