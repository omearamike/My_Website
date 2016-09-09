<?php
/*
Template Name: Cover  Page
*/
?>

<?php get_header(); ?>

<style>
.jumbotron .home_pg {
  background-color: #fc5158;
}
</style>


<div class="jumbotron home_pg content">
<h1> Hello! I’m Mike O'Meara, Independent Web Developer and problem solver. I enjoy making the impossible a reality through the use of the web technologies. </h1>
</div>

<div class="content-container homeMenu" data-content-id="content_dok7p8bzd" data-content-type="content-img">

  <ul>
    <li> My Projects </li>
  <?php
  $args = array( 'posts_per_page' => 0, 'offset'=> 0, 'category' => 0 );

  $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
  	<li>
  		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  	</li>
  <?php endforeach;
  wp_reset_postdata();?>

  </ul>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
