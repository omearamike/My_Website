<style>
  body {
    background-color: #3598dc;
  }
  .jumbotron {
    background-color: #3598dc;
  }

  .jumbotron .entry-title {
    /*color: white;*/
  }
  </style>

<div class="jumbotron project_pg content">
  <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
  <p> Project which uses a combination of PHP and Javascript to allow users to increase a counter by the action of pressing a button </p>
  <div style="text-align:center">
    <a href="http://donateforbirds.com/" target="_blank" class="bt-url projLink genericon genericon-link"> VISIT SITE</a>
  </div>
</div>




<div class="blog-content">

  <div class="blog-post">
    <?php get_template_part('content', 'gif'); ?>
    <?php the_content(); ?>
  </div>
</div>
